<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Collection;
use App\Models\Employee;
use App\Models\Scheduler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Calendar extends Component
{
    public $search = null;
    public $month;
    public $year;
    public $employees = [];
    public $gridIndex;
    public $childGridIndex;
    public $selectedDate;
    public $startsAt;
    public $endsAt;
    public $gridStartsAt;
    public $gridEndsAt;
    public $weekStartsAt;
    public $weekEndsAt;
    public $dragAndDropClasses;
    public $dragAndDropEnabled;
    public $dayClickEnabled;
    public $eventClickEnabled;
    public $showModifyEventButtons;

    protected $casts = [
        'startsAt' => 'date',
        'endsAt' => 'date',
        'gridStartsAt' => 'date',
        'gridEndsAt' => 'date',
    ];

    protected $listeners = ['livewireEvent' => '$refresh', 'alert' => '$refresh'];

    public function mount($initialYear = null,
                          $initialMonth = null,
                          $weekStartsAt = 1,
                          $dragAndDropClasses = null,
                          $dragAndDropEnabled = true,
                          $dayClickEnabled = true,
                          $eventClickEnabled = true,
                          $extras = [])
    {
        $this->weekStartsAt = $weekStartsAt ?? Carbon::SUNDAY;
        $this->weekEndsAt = $this->weekStartsAt == Carbon::SUNDAY
            ? Carbon::SATURDAY
            : collect([0,1,2,3,4,5,6])->get($this->weekStartsAt + 6 - 7)
        ;

        $initialYear = $initialYear ?? Carbon::today()->year;
        $initialMonth = $initialMonth ?? Carbon::today()->month;

        $this->startsAt = Carbon::createFromDate($initialYear, $initialMonth, today()->day)->startOfWeek();
        $this->endsAt = $this->startsAt->clone()->endOfMonth()->startOfDay();
        //dd($this->startsAt);
        $this->calculateGridStartsEnds();

        $this->dragAndDropEnabled = $dragAndDropEnabled;
        $this->dragAndDropClasses = $dragAndDropClasses ?? 'border border-blue-400 border-4';

        $this->dayClickEnabled = $dayClickEnabled;
        $this->eventClickEnabled = $eventClickEnabled;
        $this->showModifyEventButtons = false;
        $this->afterMount($extras);
    }

    public function afterMount($extras = [])
    {
        //
    }

    public function goToPreviousWeek()
    {
        $this->startsAt->subWeek();
        $this->endsAt->subWeek();

        $this->calculateGridStartsEnds();
        $this->dispatch('gridEvent');

    }

    public function goToNextWeek()
    {
        $this->startsAt->addWeek();
        $this->endsAt->addWeek();

        $this->calculateGridStartsEnds();
        $this->dispatch('gridEvent');
    }

    public function goToCurrentWeek()
    {
        $this->startsAt = Carbon::today()->startOfWeek();
        $this->endsAt = $this->startsAt->clone()->endOfWeek();

        $this->calculateGridStartsEnds();

        $this->dispatch('gridEvent');
    }
    public function calculateGridStartsEnds()
    {
        $this->gridStartsAt = $this->startsAt->clone()->startOfWeek($this->weekStartsAt);
        $this->gridEndsAt = $this->endsAt->clone()->endOfWeek($this->weekEndsAt);
    }

    /**
     * @throws Exception
     */
    public function monthGrid()
    {
        $firstDayOfGrid = $this->gridStartsAt;
        $lastDayOfGrid = $this->gridEndsAt;

        $numbersOfWeeks = $lastDayOfGrid->diffInWeeks($firstDayOfGrid) + 1;
        $days = $lastDayOfGrid->diffInDays($firstDayOfGrid) + 1;

        $monthGrid = collect();
        $currentDay = $firstDayOfGrid->clone();

        while(!$currentDay->greaterThan($lastDayOfGrid)) {
            $monthGrid->push($currentDay->clone());
            $currentDay->addDay();
        }

        $monthGrid = $monthGrid->chunk(7);

        return $monthGrid;
    }

    public function employees() : Collection
    {
        return Employee::search($this->search)->with('schedulers')->get();
    }
    public function goToPreviousMonth()
    {
        $this->startsAt->subMonthNoOverflow();
        $this->endsAt->subMonthNoOverflow();

        $this->calculateGridStartsEnds();
    }

    public function goToNextMonth()
    {
        $this->startsAt->addMonthNoOverflow();
        $this->endsAt->addMonthNoOverflow();

        $this->calculateGridStartsEnds();
    }

    public function goToCurrentMonth()
    {
        $this->startsAt = Carbon::today()->startOfMonth()->startOfDay();
        $this->endsAt = $this->startsAt->clone()->endOfMonth()->startOfDay();

        $this->calculateGridStartsEnds();
    }

    public function getEventsForDay($day, Collection $events) : Collection
    {
        return $events
            ->filter(function ($event) use ($day) {
                return Carbon::parse($event['date'])->isSameDay($day);
            });
    }

    public function onDayClick($user_id, $date)
    {
        $grab = [$user_id, $date];
        Log::info($grab);
        //dd('nothing');
    }

    public function onEventClick($eventId)
    {
        //
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        //dd($day);
    }

    public function forceLoad(){
        $this->js('window.location.reload()');
    }

    public function render()
    {
        $employees = $this->employees();
        $amount_scheduled = Scheduler::getTotalScheduledTime();
        $this->employees = $employees;
        return view('livewire.calendar')
            ->with([
                'componentId' => $this->getId(),
                'monthGrid' => $this->monthGrid(),
                'employees' => $employees,
                'amount_scheduled' => $amount_scheduled,
                'getEventsForDay' => function ($day) use ($employees) {
                    return $this->getEventsForDay($day, $employees);
                },
            ]);
    }


}


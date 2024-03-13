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
    public $filter = '';
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
    public $showCreateModal;
    public $draggedSchedulerId;
    public $copiedEventId;

    protected $casts = [
        'startsAt' => 'date',
        'endsAt' => 'date',
        'gridStartsAt' => 'date',
        'gridEndsAt' => 'date',
    ];

    protected $listeners = ['livewireEvent' => '$refresh', 'alert' => '$refresh', 'openDirectModal'];

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
        $this->showCreateModal = false;
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
        //return Employee::search($this->search)->with('schedulers')->get();
        $filter = $this->filter;

      return  Employee::search($this->search)
                ->when($filter !== '', function ($query) use ($filter) {
                    return $query->whereHas('schedulers', function ($subQuery) use ($filter) {
                        $subQuery->where('frequency', $filter);
                });
        })->with('schedulers')->get();
    }


    public function getEventsForDay($day, Collection $events) : Collection
    {
        return $events
            ->filter(function ($event) use ($day) {
                return Carbon::parse($event['date'])->isSameDay($day);
            });
    }

    public function onDayClick($employee, $date, $entity = 'create')
    {
        if($entity == 'create'){
            //Log::info(['employee:' => $employee]);
            $this->dispatch('openCreateDirectModal', $employee, $date);
            Log::info("opening modal");
            //$this->showCreateModal = true;
        }
    }

    public function drag($scheduler_id)
    {
        $this->draggedSchedulerId = $scheduler_id;
        Log::info(['drag-scheduler-id' => $scheduler_id]);
    }

    public function drop($employee_id, $day)
    {
        // Handle drop event
        $date = Carbon::parse($day)->format('d/m/Y');
        $scheduler = Scheduler::findOrfail($this->draggedSchedulerId);
        $alreadyHasSchedule = Scheduler::whereDate('start_at', $day)->where('employee_id', $employee_id)->count();
        if(!$alreadyHasSchedule){
                Log::info(['drop-employee-id' => $employee_id, 'date' => $day]);
                $start_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($scheduler->start_at->format('g:i'));
                $end_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($scheduler->end_at->format('g:i'));

                $load = [
                    'start_at' => $start_at,
                    'end_at' => $end_at,
                    'employee_id' => $employee_id,
                    'published' => false,
                ];

                Scheduler::where('id', $scheduler->id)->update($load);

                $this->dispatch('$refresh');
        }else{
                $this->dispatch('$refresh');
    }
    }



    public function copy($eventId)
    {
        $this->copiedEventId = $eventId;
    }

    public function paste($userId, $day)
    {
        if($this->copiedEventId != null){

            $date = Carbon::parse($day)->format('d/m/Y');

            $eventToCopy = Scheduler::findOrFail($this->copiedEventId);
            $start_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($eventToCopy->start_at->format('g:i'));
            $end_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($eventToCopy->end_at->format('g:i'));
            $alreadyExists = Scheduler::where('employee_id', $userId)->whereDate('start_at', $start_at)->count();
            if($alreadyExists){
                $this->copiedEventId = null;
                $this->dispatch('$refresh');
                return;
            }
        if ($eventToCopy) {
            $event = $eventToCopy->replicate();
            $event->start_at = $start_at;
            $event->end_at = $end_at;
            $event->employee_id = $userId;
            $event->published = false;
            $event->save();
        }

        // Reset copied event ID
        $this->copiedEventId = null;
        }

        $this->dispatch('$refresh');
    }


    public function openDirectModal(){
        Log::info("about to show modal");
        //$this->showCreateModal = true;
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


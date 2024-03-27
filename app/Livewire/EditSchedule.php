<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scheduler;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Rules\CheckScheduleConflictRule;
use App\Rules\ScheduleTimeConflictRule;
use App\Rules\TimeHasPassedRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EditSchedule extends Component
{
    public
    $id,
    $scheduler,
    $employee,
    $day,
    $date,
    $weekDates = ['Monday' => '', 'Tuesday' => '', 'Wednesday' => '', 'Thursday' => '', 'Friday' => '', 'Saturday' => '', 'Sunday' => ''],
    $originalDate,//used for validation
    $start_at,
    $end_at,
    $role,
    $pay_rate,
    $break,
    $shift_note,
    $role_colour,
    $border_colour,
    $frequency,
    $randomKey;

    protected $listeners = ['openEditModal', 'roleColorChanged', 'reload' => '$refresh'];

    protected $debug = true;

    public function mount()
    {
        $this->randomKey = uniqid();
    }

    public function roleColorChanged($role_colour, $border_colour)
    {
        $this->role_colour = $role_colour;
        $this->border_colour = $border_colour;
        Log::info(['role colour' => $role_colour, 'border colour' => $border_colour]);
    }

    public function openEditModal($id, $date){
        $this->reset();
        $this->id = $id;
        $this->scheduler = Scheduler::findOrFail($id);
        $scheduler = $this->scheduler;
        $this->employee = $scheduler->employee;
        $date = Carbon::parse($date);
        $this->day = $date;
        $this->weekDates = $this->calculateWeekDates($date->clone());
        $this->date = $date->format('d/m/Y');
        $this->originalDate = $date->format('d/m/Y');
        $this->role = $scheduler->role;
        $this->break = $scheduler->break;
        $this->shift_note = $scheduler->shift_note;
        $this->role_colour = $scheduler->role_colour;
        $this->border_colour = $scheduler->border_colour;
        $this->start_at = $scheduler->start_at->format('H:i');
        $this->end_at = $scheduler->end_at->format('H:i');
        $this->frequency = $scheduler->frequency;
    }

    public function calculateWeekDates($originalDate)
    {
        $startOfWeek = $originalDate->startOfWeek();

        $weekDates = [];

        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        for ($i = 0; $i < 7; $i++){
            $weekDates[$daysOfWeek[$i]] = $startOfWeek->copy()->addDays($i)->format('d/m/Y');
        }
        return $weekDates;
    }

    public function rgbToHex($rgb) {
        if(str_contains($rgb, '#')){
            return $rgb;
        }
        $rgb = $rgb != null ? $rgb : 'rgb(217, 227, 252)';
        return '#'.Str::of($rgb)->replace(['rgb(', ')', ' '], '')->explode(',')
            ->map(function ($value) {
                return str_pad(dechex($value), 2, '0', STR_PAD_LEFT);
            })->implode('');
    }

    protected function rules()
    {
        return [
        'start_at' => 'required',
        'end_at' => ['required', new ScheduleTimeConflictRule($this->employee->id, $this->date, $this->start_at, $this->originalDate)],
        'role' => 'required|string',
        'date' => ['required', new TimeHasPassedRule($this->start_at, $this->end_at)],
        'role_colour' => 'nullable|string',
        'border_colour' => 'nullable|string',
        'pay_rate' => 'nullable',
        'break' => 'required|string',
        'shift_note' => 'required|string',
    ];
}

public function updatedDate($value) {
    $this->resetValidation();
    $this->date = $value;
}
    public function update(){
        $data = $this->validate();
        DB::beginTransaction();

        try{
            $date = $data['date'];
            $day = $date;
            $currentDate = Carbon::now();
            $dayCarbon = Carbon::createFromFormat('d/m/Y', $day);

            if ($dayCarbon->isSameDay($currentDate) || $dayCarbon->isFuture()) {

            $start_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['start_at']);
            $end_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['end_at']);
            $employee = $this->employee;

            Scheduler::where('id', $this->scheduler->id)->update([
                'user_id' => $employee->user_id,
                'company_id' => $employee->company_id,
                'employee_id' => $employee->id,
                'start_at' => $start_at,
                'end_at' => $end_at,
                'role' => $data['role'],
                'pay_rate' => 'Monthly',
                'break' => $data['break'],
                'frequency' => $this->frequency,
                'role_colour' => $this->rgbToHex($data['role_colour']),
                'border_colour' => $this->rgbToHex($data['border_colour']),
                'shift_note' => $data['shift_note'],
                'published' => false,
            ]);
        }
        DB::commit();

        $this->dispatch('alert', type: 'success', title: 'Schedule Updated Successfully', position: 'center', timer: '2000');
        }catch(\Exception $e){
            Log::info(['delete-schedule-error' => $e->getMessage()]);
            $this->dispatch('alert', type: 'error', title: 'Something Went wrong Please Try Again', position: 'center', timer: '2000');
        }
    }

    public function render()
    {
        $weekDates = $this->weekDates;
        return view('livewire.edit-schedule', compact('weekDates'));
    }
}

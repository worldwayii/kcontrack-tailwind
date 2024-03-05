<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scheduler;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Rules\CheckScheduleConflictRule;
use Livewire\Attributes\On;
use App\Models\Employee;

class CreateScheduleDirect extends Component
{
    public
    $employee,
    $day,
    $date = [],
    $start_at,
    $end_at,
    $role,
    $pay_rate,
    $break,
    $shift_note,
    $role_colour,
    $frequency = 'daily';

    protected $listeners = ['roleColorChanged', 'livewireEvent' => '$refresh', 'gridEvent' => '$refresh', 'openCreateDirectModal'];
    protected $debug = true;

    public function roleColorChanged($role_colour)
    {
        $this->role_colour = $role_colour;
        Log::info('role colour changed: '. $role_colour);
    }

    public function openCreateDirectModal($employee, $date){
        //dd($date);
        $date = Carbon::parse($date);
         $this->employee = Employee::findOrFail($employee['id']);
         //dd($employee);
         $this->day = $date;
        Log::info("did this dispatch?");
         $this->date = [$date->format('d/m/Y')];
         $this->dispatch('openDirectModal');
    }

    public function mount(){
        // $this->employees = $employee;
        // $this->day = $date;
        // $this->date = [$date->format('d/m/Y')];
        //dd($this->date);
    }


    protected function rules()
    {
        return [
        'start_at' => 'required',
        'end_at' => 'required',
        'role' => 'required|string',
        'role_colour' => 'nullable|string',
        'frequency' => 'nullable',
        'date' => ['required', new CheckScheduleConflictRule($this->employee->id)],
        'pay_rate' => 'nullable',
        'break' => 'required|string',
        'shift_note' => 'required|string',
    ];
}

    // protected function prepareForValidation($attributes){
    //     dd($attributes);
    // }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function rgbToHex($rgb) {
        $rgb = $rgb != null ? $rgb : 'rgb(217, 227, 252)';
        return '#'.Str::of($rgb)->replace(['rgb(', ')', ' '], '')->explode(',')
            ->map(function ($value) {
                return str_pad(dechex($value), 2, '0', STR_PAD_LEFT);
            })->implode('');
    }

    public function create(){

        $data = $this->validate();
        DB::beginTransaction();

        try{
        foreach($data['date'] as $date){
            $start_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['start_at']);
            $end_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['end_at']);
            $employee = $this->employee;

            Scheduler::create([
                'user_id' => $employee->user_id,
                'company_id' => $employee->company_id,
                'employee_id' => $employee->id,
                'start_at' => $start_at,
                'end_at' => $end_at,
                'role' => $data['role'],
                'pay_rate' => 'Monthly',
                'break' => $data['break'],
                //'frequency' => $data['frequency'],
                'role_colour' => $this->rgbToHex($data['role_colour']),
                'shift_note' => $data['shift_note'],
            ]);
        }
        DB::commit();
        $this->dispatch('alert', type: 'success', title: 'New Schedule created Successfully', position: 'center', timer: '2500');
    }catch(\Exception $e){
        Log::critical("create-schedule-error: ". $e->getMessage());
        DB::rollback();
        $this->dispatch('alert', type: 'error', title: 'Schedule Could not be Created Please Try Again', position: 'center', timer: '2500');
    }

    }

    public function render()
    {
        return view('livewire.create-schedule-direct');
    }
}

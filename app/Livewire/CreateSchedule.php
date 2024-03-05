<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scheduler;
use App\Models\Employee;
use App\Rules\CheckScheduleConflictRule;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CreateSchedule extends Component
{
    public
    $employee,
    $employees,
    $day,
    $date = [],
    $start_at,
    $end_at,
    $role,
    $pay_rate,
    $break,
    $shift_note,
    $role_colour,
    $frequency;

    protected $listeners = ['roleColorChanged', 'livewireEvent' => '$refresh', 'updateDate'];
    // protected $debug = true;



    public function mount(){
        $this->employees = Employee::all();
    }

    public function roleColorChanged($role_colour)
    {
        $this->role_colour = $role_colour;
        Log::info('role colour changed: '. $role_colour);
    }

    public function updateDate($selected_date){
        $this->date = $selected_date;

        //Log::info('selected date updated', ['selectedDate' => $selected_date]);
    }

    protected function rules()
    {
        $employee =  Employee::where('uuid', $this->employee)->first();

        return [
                'employee' => 'required|string',
                'start_at' => 'required',
                'end_at' => 'required',
                'role' => 'required|string',
                'role_colour' => 'nullable|string',
                'frequency' => 'nullable',
                'date' => ['required', $employee ? new CheckScheduleConflictRule($employee->id) : 'string'],
                'pay_rate' => 'nullable',
                'break' => 'required|string',
                'shift_note' => 'required|string',

            ];
    }


    // protected function prepareForValidation($attributes){
    //     dd($attributes);
    // }

    public function updated($propertyName)
{
    $this->validateOnly($propertyName);
}


    public function rgbToHex($rgb) {
        return '#'.Str::of($rgb)->replace(['rgb(', ')', ' '], '')->explode(',')
            ->map(function ($value) {
                return str_pad(dechex($value), 2, '0', STR_PAD_LEFT);
            })->implode('');
    }

    public function create(){
        DB::beginTransaction();
        $data = $this->validate();
        try{

        $employee = Employee::where('uuid', $data['employee'])->first();
        //dd($data);
        foreach($data['date'] as $date){
            $start_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['start_at']);
            $end_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['end_at']);


            Scheduler::create([
                'user_id' => $employee->user_id,
                'company_id' => $employee->company_id,
                'employee_id' => $employee->id,
                'start_at' => $start_at,
                'end_at' => $end_at,
                'role' => $data['role'],
                'pay_rate' => 'Monthly',
                'break' => $data['break'],
                'frequency' => $data['frequency'],
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
        return view('livewire.create-schedule');
    }
}

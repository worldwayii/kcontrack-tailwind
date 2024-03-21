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
    $border_colour,
    $frequency;

    protected $listeners = ['roleColorChanged', 'livewireEvent' => '$refresh', 'updateDate'];
    
    protected $debug = true;



    public function mount(){
        $this->employees = Employee::all();
    }

    public function roleColorChanged($role_colour, $border_colour)
    {
        $this->role_colour = $role_colour;
        $this->border_colour = $border_colour;
        Log::info(['role colour' => $role_colour, 'border colour' => $border_colour]);
    }

    public function updateDate($selected_date){
        $this->date = $selected_date;
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
                'border_colour' => 'nullable|string',
                'frequency' => 'nullable',
                'date' => ['required', $employee ? new CheckScheduleConflictRule($employee->id) : 'string'],
                'pay_rate' => 'nullable',
                'break' => 'required|string',
                'shift_note' => 'required|string',

            ];
    }


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

        $schedules = [];
        foreach ($data['date'] as $date) {
            $start_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['start_at']);
            $end_at = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($data['end_at']);

            $schedules[] = [
                'uuid' => Str::uuid(),
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
                'border_colour' => $data['border_colour'] ? $this->rgbToHex($data['border_colour']) : '#b37bb3',
                'shift_note' => $data['shift_note'],
            ];
        }

        Scheduler::insert($schedules);

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

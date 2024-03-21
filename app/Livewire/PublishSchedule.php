<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Scheduler;
use App\Events\PublishScheduler;

class PublishSchedule extends Component
{


    public function publish(){

        $employeeIds = Scheduler::wherePublished(false)->pluck('employee_id')->toArray();
        $employees = Employee::whereIn('id', $employeeIds)->get();
        $user = auth()->user();

        $messages['employee'] = 'You Have New Job Schedules Please Check Your App For Details';
        $messages['employer'] = 'Here A Summary Of Your Schedule Pusblished on '. now()->toDateString();
        PublishScheduler::dispatch($employees, $messages, $user);
        $this->dispatch('schedulePublished');
    }

    public function render()
    {
        $employees = Employee::with([
        'schedulers' => function ($q) {
            $q->where('published', false);
         }])->get();
         $schedule_count = Scheduler::wherePublished(false)->count();
        return view('livewire.publish-schedule', compact('employees', 'schedule_count'));
    }
}

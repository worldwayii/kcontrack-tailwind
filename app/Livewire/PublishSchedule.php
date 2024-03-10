<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Scheduler;
use App\Mail\PublishSchedulerEmail;
use Illuminate\Support\Facades\Mail;
use App\Events\PublishScheduler;

class PublishSchedule extends Component
{


    public function publish(){
        $employeeIds = Scheduler::wherePublished(false)->pluck('employee_id')->toArray();
        $employees = Employee::whereIn('id', $employeeIds)->get();

        //Scheduler::wherePublished(false)->update(['published' => true]);

        $messages['employee'] = 'You Have New Job Schedules Please Check Your App For Details';
        $messages['employer'] = 'Here A Summary Of Your Schedule Pusblished on '. now()->toDateString();
            //Mail::to($employee)->send(new PublishSchedulerEmail($employee, $message));
            PublishScheduler::dispatch($employees, $messages);
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

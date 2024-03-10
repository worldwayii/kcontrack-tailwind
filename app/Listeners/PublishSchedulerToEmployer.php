<?php

namespace App\Listeners;

use App\Events\PublishScheduler;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\PublishSchedulerToEmployerMail;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\Scheduler;
class PublishSchedulerToEmployer implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PublishScheduler $event): void
    {
        $employees = $event->employees;
        $message = $event->messages['employer'];

        $pdf = PDF::setOption(['isRemoteEnabled' => true])->loadView('livewire.publish-schedule-pdf', compact('employees'));
        Scheduler::wherePublished(false)->update(['published' => true]);
        foreach($employees as $employee){
            Mail::to($employee->user)->send(new PublishSchedulerToEmployerMail($employee->user, $message, $pdf));
            break;

        }
    }
}

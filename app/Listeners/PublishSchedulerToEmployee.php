<?php

namespace App\Listeners;

use App\Events\PublishScheduler;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\PublishSchedulerEmail;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\Scheduler;


class PublishSchedulerToEmployee implements ShouldQueue
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
        $message = $event->messages['employee'];

        $pdf = PDF::setOption(['isRemoteEnabled' => true])->loadView('livewire.publish-schedule-pdf', compact('employees'));
        foreach($employees as $employee){
            Mail::to($employee)->send(new PublishSchedulerEmail($employee, $message, $pdf));


        }
    }
}

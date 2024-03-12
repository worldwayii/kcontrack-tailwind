<?php

namespace App\Listeners;

use App\Events\PublishScheduler;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\PublishSchedulerEmail;
use Illuminate\Support\Facades\Mail;
use Spatie\LaravelPdf\Facades\Pdf;
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

        // Pdf::view('livewire.publish-schedule-pdf', ['employees' => $employees])
        // ->save('published-scheduler.pdf');
        foreach($employees as $employee){
            //Mail::to($employee)->send(new PublishSchedulerEmail($employee, $message, $pdf));
            break;

        }
    }
}

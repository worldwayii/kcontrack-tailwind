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


        foreach($employees as $employee){
            $pdfPath = 'Employee-schedules.pdf';
            Pdf::view('livewire.publish-schedule-pdf-employee', ['employee' => $employee])
            ->landscape()->save($pdfPath);
            Mail::to($employee->user->email)->send(new PublishSchedulerEmail($employee, $message, $pdfPath));
            unlink($pdfPath);
        }
        Scheduler::wherePublished(false)->update(['published' => true]);
    }
}

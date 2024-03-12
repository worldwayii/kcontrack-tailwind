<?php

namespace App\Listeners;

use App\Events\PublishScheduler;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\PublishSchedulerToEmployerMail;
use Illuminate\Support\Facades\Mail;
//use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Spatie\LaravelPdf\Facades\Pdf;
use App\Models\Scheduler;
use Illuminate\Support\Facades\Log;

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

        $tmpt_path = 'published-scheduler.pdf';

        $pdf = Pdf::view('livewire.publish-schedule-pdf', ['employees' => $employees])
        ->landscape()->save($tmpt_path);

        //Log::info(['pdf-obj' => $pdf]);
        Scheduler::wherePublished(false)->update(['published' => true]);
        foreach($employees as $employee){
            Mail::to($employee->user)->send(new PublishSchedulerToEmployerMail($employee->user, $message, $tmpt_path));
            break;
        }
        unlink($tmpt_path);
    }
}

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
        $user = $event->user;
        $tmpt_path = 'published-scheduler.pdf';

        $pdf = Pdf::view('livewire.publish-schedule-pdf', ['employees' => $employees, 'user' => $user])
        ->landscape()->save($tmpt_path);

        Mail::to($user->email)->send(new PublishSchedulerToEmployerMail($user, $message, $tmpt_path));

        unlink($tmpt_path);
    }
}

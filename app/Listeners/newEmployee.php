<?php

namespace App\Listeners;

use App\Mail\EmployeeCreated;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class newEmployee
{
    /**
     * Create the event listener.
     */
    public function __construct(
        public User $user
    ){}

    /**
     * Handle the event.
     */
    public function handle(EmployeeCreated $event): void
    {
        Mail::to($event->user->email)->send(new EmployeeCreated($event->user));
    }
}

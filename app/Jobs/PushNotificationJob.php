<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Notifications\ExpoPushNotification;
use Illuminate\Support\Facades\Log;

class PushNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public $subject, public $message, public $employee){}


    public function handle(PushNotificationService $pushNotificationService): void
    {
        try{
        $this->storeNotificationLog($this->subject, $this->message, $this->employee->id);

        $this->employee->notify( new ExpoPushNotification($this->subject, $this->message) );
    }catch(\Exception $e){
        Log::critical(['push_notification_error' => $e->getMessage()]);
    }

    }

    private function storeNotificationLog($title, $body, $employee_id){
        PushNotificationLog::create([
            'employee_id' => $employee_id,
            'title' => $title,
            'body' => $body,
        ]);
    }
}

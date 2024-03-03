<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use NotificationChannels\ExpoPushNotifications\ExpoChannel;
use Illuminate\Support\Facades\Log;
use App\Models\Employee;

class SubscribeToExpoPushJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct(public Employee $employee,public $token)
    {
        $this->employee = $employee;
        $this->token = $token;
    }


    public function handle(ExpoChannel $expoChannel): void
    {
        Log::info('updating expo token');
        $interest = $expoChannel->interestName($this->employee);
        $expoChannel->expo->subscribe($interest, $this->token);

    }

}

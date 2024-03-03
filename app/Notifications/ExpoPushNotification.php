<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\ExpoPushNotifications\ExpoChannel;
use NotificationChannels\ExpoPushNotifications\ExpoMessage;
use Illuminate\Support\Facades\Log;

class ExpoPushNotification extends Notification
{
    use Queueable;

    public function __construct(public $title, public $message)
    {
        $this->title = $title;
        $this->message = $message;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return [ExpoChannel::class];
    }

    public function toExpoPush($notifiable)
    {
        Log::info('ExpoPushNotification');
        return ExpoMessage::create()
            ->badge(1)
            ->enableSound()
            ->title("{$this->title}")
            ->body("{$this->message}");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable): array
    {
        $returnArray = [
            'title'     =>  $this->title,
            'body'      =>  $this->body,
            'sound'     =>  $this->sound,
            'badge'     =>  $this->badge,
            'ttl'       =>  $this->ttl,
            'channelId' => $this->channelId,
            'data'      => $this->jsonData,
        ];

        if (strtolower($this->channelId) == 'default' || $this->channelId == '') {
            unset($returnArray['channelId']);
        }

        return $returnArray;

    }
}

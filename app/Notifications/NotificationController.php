<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class CustomNotification extends Notification
{
    use Queueable;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via()
    {
        return ['database']; // You can add 'mail', 'sms', etc., if needed
    }

    public function toArray()
    {
        return [
            'message' => $this->data['message'],
            'url' => $this->data['url'],
        ];
    }
}

<?php
namespace App\Notifications;

use Illuminate\Notifications\Notification;

class CustomNotification extends Notification
{
    // Existing code

    public static function getNotifications()
    {
        // Replace with actual logic to fetch notifications
        return [
            ['id' => 1, 'message' => 'Notification 1'],
            ['id' => 2, 'message' => 'Notification 2'],
        ];
    }

    public static function getNotificationById($id)
    {
        // Replace with actual logic to fetch a notification by ID
        $notifications = self::getNotifications();
        foreach ($notifications as $notification) {
            if ($notification['id'] == $id) {
                return $notification;
            }
        }
        return null;
    }
}

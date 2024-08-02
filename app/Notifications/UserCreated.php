<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserCreated extends Notification
{
    public $generatedPassword;

    public function __construct($generatedPassword)
    {
        $this->generatedPassword = $generatedPassword;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Your account has been created.')
            ->line('Your temporary password is: ' . $this->generatedPassword)
            ->line('Thank you for using our service!');
    }
}

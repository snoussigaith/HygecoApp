<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ReservationCustomized extends Notification
{
    public $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function via($notifiable)
    {
        return ['database','mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Your reservation time has been updated.')
            ->line('Service: ' . $this->reservation->service_name)
            ->line('Date: ' . $this->reservation->date)
            ->line('Time: ' . $this->reservation->time)
            ->line('Total price: ' . $this->reservation->total_price)
            ->action('View Reservation', route('reservation'))
            ->line('Thank you for using our service!');
    }
     public function toArray($notifiable)
        {
            return [
                'service_name' => $this->reservation->service_name,
                'date' => $this->reservation->date,
                'time' => $this->reservation->time,
                'total_price' => $this->reservation->total_price,
            ];
        }
}
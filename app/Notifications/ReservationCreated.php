<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ReservationCreated extends Notification
{
    public $reservation;
    public $clientName;

    public function __construct(Reservation $reservation, $clientName)
    {
        $this->reservation = $reservation;
        $this->clientName = $clientName;
    }

    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('A new reservation has been created.')
            ->line('Service: ' . $this->reservation->service_name)
            ->line('Date: ' . $this->reservation->date)
            ->line('Time: ' . $this->reservation->time)
            ->line('Total price: ' . $this->reservation->total_price)
            ->line('Client: ' . $this->clientName)
            ->action('View Reservation', route('reservation.success'))
            ->line('Thank you for using our service!');
    }

    public function toArray($notifiable)
    {
        return [
            'service_name' => $this->reservation->service_name,
            'date' => $this->reservation->date,
            'time' => $this->reservation->time,
            'total_price' => $this->reservation->total_price,
            'client_name' => $this->clientName,
        ];
    }
}

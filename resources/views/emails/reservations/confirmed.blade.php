@component('mail::message')
# Reservation Confirmed

Dear {{ $reservation->client->name }},

Your reservation for {{ $reservation->service_name }} on {{ $reservation->date }} at {{ $reservation->time }} has been confirmed.

Thank you for choosing our services.

Best regards,
{{ config('app.name') }}
@endcomponent

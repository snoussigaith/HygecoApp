@component('mail::message')
# Reservation Time Updated

Dear {{ $reservation->client->name }},

The time for your reservation for {{ $reservation->service_name }} on {{ $reservation->date }} has been updated to {{ $reservation->time }}.

Thank you for choosing our services.

Best regards,
{{ config('app.name') }}
@endcomponent

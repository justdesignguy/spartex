@component('mail::message')
    Hello {{ $name }},

    Thank you for registering for Spartex! We are looking forward to seeing you there and sharing our products with you.

    Thanks,
    {{ config('app.name') }}
@endcomponent

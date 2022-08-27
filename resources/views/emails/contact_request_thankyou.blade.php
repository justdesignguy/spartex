@component('mail::message')
    Hello {{ $name }},

    Thank you for your request. We will contact you soon.

    Thanks,
    {{ config('app.name') }}
@endcomponent

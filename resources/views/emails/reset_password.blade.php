@component('mail::message')
    # Reset Password

    Hello {{ $name }},

    Follow this link to reset your password
    {{ $reset_url }}

    Thanks,
    {{ config('app.name') }}
@endcomponent

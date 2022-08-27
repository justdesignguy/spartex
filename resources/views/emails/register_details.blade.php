@component('mail::message')
    # New User Details

    Hello Admin,

    User Name : {{ $name }}
    User Email: {{ $email }}

    Follow this link to see other details
    {{ $url }}

    Thanks,
    {{ config('app.name') }}
@endcomponent

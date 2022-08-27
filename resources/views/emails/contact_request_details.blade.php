@component('mail::message')
    # New Contact Request

    Hello Admin,

    User Name : {{ $first_name }}
    User Email: {{ $email }}
    Message   : {{ $message }}

    Follow this link to see other details
    {{ $url }}

    Thanks,
    {{ config('app.name') }}
@endcomponent

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $meta['meta_title'] ?? "Spartex" }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/media.css') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    @yield('css')
</head>
<body>
<div class="">
    @include('front.layout.partials.header')
    @yield('content')
    @include('front.layout.partials.footer')
</div>
<script src="{{ asset('front/js/aos.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
<script type="text/javascript">
    var $app_url = "{{ url('/') }}";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
    @if(Session::has('error'))
    toastr.error("{{ \Illuminate\Support\Facades\Session::get('error') }}", "Error!", {timeOut: 2000});
    @endif
    @if(Session::has('success'))
    toastr.success("{{ \Illuminate\Support\Facades\Session::get('success') }}", "Success!", {timeOut: 2000});
    @endif
</script>
@yield('footer_scripts')
</body>
</html>

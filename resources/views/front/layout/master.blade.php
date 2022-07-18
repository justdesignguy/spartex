<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spartex Home page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/global.css') }}">
    @yield('css')
</head>
<body>
<div class="wrapper">
    @include('front.layout.partials.header')
    @yield('content')
    @include('front.layout.partials.footer')
    <script src="{{ asset('front/js/custom.js') }}"></script>
@yield('footer_scripts')
</body>
</html>

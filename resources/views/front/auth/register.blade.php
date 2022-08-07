<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Spartex Admin">
    <meta name="author" content="Spartex">
    <title>SPARTEX SIGNUP</title>
    <!-- Vendor css -->
    <link href="{{ asset('admin/theme/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('admin/theme/css/slim.css') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet"/>

</head>
<body>
<div class="d-md-flex flex-row-reverse">
    <div class="signin-right">
        <div class="signin-box">
            <h3 class="signin-title-primary">Get Started!</h3>
            <h5 class="signin-title-secondary">It's free to signup and only takes a minute</h5>
            @include('admin.layout.partials.flash_messages')
            <form method="post" class="text-left form-validate login-form"
                  action="{{ route('user.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter your name"
                           data-validation="required">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email"
                           data-validation="email">
                </div>
                <div class="form-group mg-b-50">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password"
                           data-validation="required">
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-signin">Sign Up</button>
                <p class="mg-b-0">Already have an account? <a href="{{ route('user.login') }}">Sign In</a></p>
            </form>
        </div>
    </div>
    <div class="signin-left">
        <div class="signin-box">
            <h2 class="slim-logo"><a href="{{ route('home') }}">SPARTEX<span></span></a></h2>

            <p>We are excited to launch our new company and product Spartex. After being featured in too many magazines to mention and having created an online stir, we know that ThemePixels is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>

            <p>Browse our site and see for yourself why you need Spartex.</p>

            <p><a href="{{ route('home') }}" class="btn btn-outline-secondary pd-x-25">Learn More</a></p>

            <p class="tx-12">&copy; Copyright 2018. All Rights Reserved.</p>
        </div>
    </div>
</div>

<script src="{{ asset('admin/theme/lib/jquery.js') }}"></script>
<script src="{{ asset('admin/theme/lib/popper.js') }}"></script>
<script src="{{ asset('admin/theme/lib/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/theme/js/slim.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate();
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Spartex Admin">
    <meta name="author" content="Spartex">
    <title>SPARTEX Admin</title>
    <!-- Vendor css -->
    <link href="{{ asset('admin/theme/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('admin/theme/css/slim.css') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet"/>

</head>
<body>
<div class="signin-wrapper">
    <div class="signin-box">
        <h2 class="slim-logo">SPARTEX</h2>
        <h2 class="signin-title-primary">Welcome back Admin!</h2>
        <h3 class="signin-title-secondary">Sign in to continue.</h3>
        @include('admin.layout.partials.flash_messages')
        <form method="post" class="text-left form-validate login-form"
              action="{{ route('admin.authenticate') }}">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter your email"
                       data-validation="email">
            </div>
            <div class="form-group mg-b-50">
                <input type="password" name="password" class="form-control" placeholder="Enter your password"
                       data-validation="required">
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-signin">Sign In</button>
        </form>
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

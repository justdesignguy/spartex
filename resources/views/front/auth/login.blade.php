@extends('front.layout.master')
@section('content')
    <section class="signup-form-page ptb-120">
        <div class="wrapper">
            <h2 class="common-title">Sign up</h2>
            @include('admin.layout.partials.flash_messages')
            <form method="post" class="text-left form-validate login-form"
                  action="{{ route('user.authenticate') }}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email"
                           data-validation="email">
                </div>
                <div class="form-group mg-b-30">
                    <input type="password" name="password" class="form-control" placeholder="Enter your password"
                           data-validation="required">
                </div>
                <p class="mg-b-10 text-right"><a href="{{ route('user.forgot_password') }}">Forgot Password?</a></p>
                <button type="submit" class="btn btn-primary btn-block btn-signin">Sign In</button>
                <p class="mg-b-0">Don't have an account? <a href="{{ route('user.register') }}">Sign Up</a></p>
            </form>
        </div>
    </section>
@endsection
@section('css')
@endsection
@section('footer_scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        $.validate();
    </script>
@endsection

@extends('layouts.blank')

@section('title','Login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>AJK</b>ED</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4 col-xs-offset-8">
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat text-right">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="label label-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign
                    in using
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign
                    in using
                    Google+</a>
            </div>
            <!-- /.social-auth-links -->

            <a href="#">I forgot my password</a><br>
            <a href="#" class="text-center">Register a new membership</a>

        </div>
    </div>

@endsection

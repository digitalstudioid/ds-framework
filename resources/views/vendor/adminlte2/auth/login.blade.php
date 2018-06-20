@extends('vendor.adminlte2.layouts.auth')
@section('htmlheader_title', __('login.title'))
@section('main-content')
    <body class="hold-transition login-page">
        <div id="app">
            <div class="login-box">
                <div class="login-logo">
                    <a href="{{ route('home') }}">@lang('general.appname')</a>
                </div><!-- /.login-logo -->

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> @lang('login.someproblems')<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="login-box-body">
                    <p class="login-box-msg">@lang('login.subtitle')</p>

                    <!-- <form action="{{ url('/login') }}" method="post"> -->
                    <form action="{{ route('login') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group has-feedback">
                            <input type="identity" class="form-control" placeholder="@lang('login.usernameoremail')" name="identity"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="@lang('login.password')" name="password"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember"> @lang('login.remember')
                                    </label>
                                </div>
                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('login.signin')</button>
                            </div><!-- /.col -->
                        </div>
                    </form>

                    @include('vendor.adminlte2.auth.partials.social_login')

                    <a href="{{ route('password.request') }}">@lang('login.forgotpassword')</a><br>
                    <a href="{{ route('register') }}" class="text-center">@lang('login.registermember')</a>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>

        @include('vendor.adminlte2.layouts.partials.scripts_auth')
    </body>
@endsection
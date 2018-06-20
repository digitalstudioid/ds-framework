@extends('vendor.adminlte2.layouts.auth')
@section('htmlheader_title', __('passwords_reset.title'))
@section('main-content')
    <body class="login-page">
        <div id="app">
            <div class="login-box">
                <div class="login-logo">
                    <a href="{{ route('home') }}">@lang('general.appname')</a>
                </div><!-- /.login-logo -->

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> @lang('passwords_reset.someproblems')<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="login-box-body">
                    <p class="login-box-msg">@lang('passwords_reset.subtitle')</p>

                    <!-- <form action="{{ url('/password/reset') }}" method="post"> -->
                    <form action="{{ route('password.request') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="@lang('passwords_reset.email')" name="email" value="{{ old('email') }}"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="@lang('passwords_reset.password')" name="password"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="@lang('passwords_reset.passwordconf')" name="password_confirmation"/>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-2"></div><!-- /.col -->
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('passwords_reset.reset')</button>
                            </div><!-- /.col -->
                            <div class="col-xs-2"></div><!-- /.col -->
                        </div>
                    </form>

                    <a href="{{ route('login') }}">@lang('passwords_reset.login')</a><br>
                    <a href="{{ route('register') }}" class="text-center">@lang('passwords_reset.registermember')</a>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>

        @include('vendor.adminlte2.layouts.partials.scripts_auth')
    </body>
@endsection
@extends('vendor.adminlte2.layouts.auth')
@section('htmlheader_title', __('passwords_email.title'))
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
		                <strong>Whoops!</strong> @lang('passwords_email.someproblems')<br><br>
		                <ul>
		                    @foreach ($errors->all() as $error)
		                        <li>{{ $error }}</li>
		                    @endforeach
		                </ul>
		            </div>
		        @endif

		        <div class="login-box-body">
		            <p class="login-box-msg">@lang('passwords_email.subtitle')</p>
		            
		            <!-- <form action="{{ url('/password/email') }}" method="post"> -->
		            <form action="{{ route('password.email') }}" method="post">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                
		                <div class="form-group has-feedback">
		                    <input type="email" class="form-control" placeholder="@lang('passwords_email.email')" name="email" value="{{ old('email') }}"/>
		                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		                </div>

		                <div class="row">
		                    <div class="col-xs-2"></div><!-- /.col -->
		                    <div class="col-xs-8">
		                        <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('passwords_email.sendpassword')</button>
		                    </div><!-- /.col -->
			                <div class="col-xs-2"></div><!-- /.col -->
		                </div>
		            </form>

		            <a href="{{ route('login') }}">@lang('passwords_email.login')</a><br>
		            <a href="{{ route('register') }}" class="text-center">@lang('passwords_email.registermember')</a>
		        </div><!-- /.login-box-body -->
		    </div><!-- /.login-box -->
	    </div>

	    @include('vendor.adminlte2.layouts.partials.scripts_auth')
	</body>
@endsection
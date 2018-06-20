@extends('vendor.adminlte2.layouts.auth')
@section('htmlheader_title', __('register.title'))
@section('main-content')
  <body class="hold-transition register-page">
      <div id="app">
          <div class="register-box">
              <div class="register-logo">
                  <a href="{{ route('home') }}">@lang('general.appname')</a>
              </div>

              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> @lang('register.someproblems')<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <div class="register-box-body">
                  <p class="login-box-msg">@lang('register.subtitle')</p>

                  <!-- <form action="{{ url('/register') }}" method="post"> -->
                  <form action="{{ route('register') }}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="form-group has-feedback">
                          <input type="text" class="form-control" placeholder="@lang('users.name')" name="name" value="{{ old('name') }}"/>
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>

                      <div class="form-group has-feedback">
                          <input type="numeric" class="form-control" placeholder="@lang('users.mobile')" name="mobile" value="{{ old('mobile') }}"/>
                          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                      </div>

                      <div class="form-group has-feedback">
                          <input type="email" class="form-control" placeholder="@lang('users.email')" name="email" value="{{ old('email') }}"/>
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                      </div>

                      <div class="form-group has-feedback">
                          <input type="text" class="form-control" placeholder="@lang('users.username')" name="username" value="{{ old('username') }}"/>
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>

                      <div class="form-group has-feedback">
                          <input type="password" class="form-control" placeholder="@lang('users.password')" name="password"/>
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>

                      <div class="form-group has-feedback">
                          <input type="password" class="form-control" placeholder="@lang('users.passwordconf')" name="password_confirmation"/>
                          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                      </div>
                      
                      <div class="row">
                          <div class="col-xs-1">
                              <label>
                                  <div class="checkbox_register icheck">
                                      <label>
                                          <input type="checkbox" name="terms">
                                      </label>
                                  </div>
                              </label>
                          </div><!-- /.col -->
                          <div class="col-xs-6">
                              <div class="form-group">
                                  <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">@lang('register.terms')</button>
                              </div>
                          </div><!-- /.col -->
                          <div class="col-xs-4 col-xs-push-1">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('register.register')</button>
                          </div><!-- /.col -->
                      </div>
                  </form>

                  @include('vendor.adminlte2.auth.partials.social_login')

                  <a href="{{ route('login') }}" class="text-center">@lang('register.membership')</a>
              </div><!-- /.form-box -->
          </div><!-- /.register-box -->
      </div>

      @include('vendor.adminlte2.layouts.partials.scripts_auth')
      @include('vendor.adminlte2.auth.terms')
  </body>
@endsection
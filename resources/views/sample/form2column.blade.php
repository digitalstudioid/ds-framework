@extends('vendor.adminlte2.layouts.app')

@section('htmlheader_title', __('messages.pgmoduletitle'))

@section('contentheader_icon', Config::get('global.iconmodule'))
@section('contentheader_title', __('messages.pgmoduletitle'))
@section('contentheader_description', __('messages.pgmoduledesc'))

@section('contentheader_breadcrumb')
  <li class="active">{{ __('messages.sbusermanagement') }}</li>
  <li class="active">{{ __('messages.pgmodulemenu') }}</li>
@endsection

@section('main-content')

<div class="row">
  <div class="col-md-12">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Select2</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
               
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  {!! Form::label('name', 'Name', ['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-md-4">
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>                

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                  {!! Form::label('phone', 'Phone', ['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-md-4">
                    {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Phone']) !!}
                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                  {!! Form::label('mobile', 'Mobile', ['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-md-4">
                    {!! Form::text('mobile', null, ['class'=>'form-control', 'placeholder'=>'Mobile']) !!}
                    {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-md-4">
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                  {!! Form::label('username', 'Username', ['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-md-10">
                    {!! Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'Username']) !!}
                    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>                

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  {!! Form::label('password', 'Password', ['class'=>'col-sm-2 control-label']) !!}
                  <div class="col-md-10">
                    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                  {!! Form::label('password-confirm', 'Confirm Password', ['class'=>'col-sm-2 control-label']) !!}
                  <div class="col-md-10">
                    {!! Form::password('password-confirm', ['class'=>'form-control', 'placeholder'=>'Confirm Password']) !!}
                    {!! $errors->first('password-confirm', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group{{ $errors->has('password_question') ? ' has-error' : '' }}">
                  {!! Form::label('password_question', 'Password Question', ['class'=>'col-sm-2 control-label']) !!}
                  <div class="col-md-10">
                    {!! Form::text('password_question', null, ['class'=>'form-control', 'placeholder'=>'Password Question']) !!}
                    {!! $errors->first('password_question', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group{{ $errors->has('password_answer') ? ' has-error' : '' }}">
                  {!! Form::label('password_answer', 'Password Answer', ['class'=>'col-sm-2 control-label']) !!}
                  <div class="col-md-10">
                    {!! Form::password('password_answer', ['class'=>'form-control', 'placeholder'=>'Password Answer']) !!}
                    {!! $errors->first('password_answer', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>

                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                  {!! Form::label('status', 'Status', ['class'=>'col-sm-2 control-label']) !!}
                  
                  <div class="col-md-10">
                    {!! Form::select('status', ['0' => 'Not Active', '1' => 'Active', '2' => 'Locked', '3' => 'Expired'], '0')  !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                  </div>
                </div> 

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>

                  <div class="col-sm-10">
                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</button>
                    <button type="button" class="btn btn-success">Save & Add More</button>
                    <button type="button" class="btn btn-success">Save</button>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
      <!-- /.box-body -->
      <div class="box-footer">
        Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.
      </div>
    </div>
    <!-- /.box -->
  </div>
</div>

@endsection
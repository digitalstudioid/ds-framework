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

<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Select2</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Minimal</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Disabled</label>
          <select class="form-control select2" disabled="disabled" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="form-group">
          <label>Multiple</label>
          <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                  style="width: 100%;">
            <option>Alabama</option>
            <option>Alaska</option>
            <option>California</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Disabled Result</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">Alabama</option>
            <option>Alaska</option>
            <option disabled="disabled">California (disabled)</option>
            <option>Delaware</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Washington</option>
          </select>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
    the plugin.
  </div>
</div>
<!-- /.box -->

@endsection
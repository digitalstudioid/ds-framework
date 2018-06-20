<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('vendor.adminlte2.layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('vendor.adminlte2.layouts.partials.mainheader')

  @include('vendor.adminlte2.layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    @include('vendor.adminlte2.layouts.partials.contentheader')

    <!-- Main content -->
    <section class="content">
      
      @yield('main-content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('vendor.adminlte2.layouts.partials.footer')

  @include('vendor.adminlte2.layouts.partials.controlsidebar')
</div>
<!-- ./wrapper -->

@section('scripts')
    @include('vendor.adminlte2.layouts.partials.scripts')
@show

</body>
</html>

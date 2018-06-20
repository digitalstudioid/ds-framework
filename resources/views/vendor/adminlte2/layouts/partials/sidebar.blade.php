<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    
    <!-- Sidebar user panel -->
    <!-- <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Rudi Amirudin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> -->

    @if (! Auth::guest())
      <div class="user-panel">
          <div class="pull-left image">
              <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> {{ __('general.online') }}</a>
          </div>
      </div>
    @endif

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="{{ __('messages.search') }}">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <!-- NAVIGATION -->
      <li class="header">{{ __('messages.sbnavigation') }}</li>
      
      <li><a href="{{ url('/home') }}"><i class="{{ Config::get('global.icondashboard') }}"></i> <span>{{ __('messages.pghomemenu') }}</span></a></li>

      <li><a href="{{ url('/home/index2') }}"><i class="{{ Config::get('global.icondashboard') }}"></i> <span>{{ __('messages.pghomemenu') }}</span></a></li>

      <li class="treeview">
        <a href="#">
          <i class="{{ Config::get('global.iconmrr') }}"></i> <span>{{ __('messages.sbmrr') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="{{ Config::get('global.iconbuilding') }}"></i> {{ __('messages.pgbuildingmenu') }}</a></li>
          <li><a href="#"><i class="{{ Config::get('global.iconroom') }}"></i> {{ __('messages.pgroommenu') }}</a></li>
          <li><a href="#"><i class="{{ Config::get('global.iconmrreservation') }}"></i> {{ __('messages.pgmrreservationmenu') }}</a></li>
        </ul>
      </li>

      <!-- SUPER ADMIN -->
      <li class="header">{{ __('messages.sbsuperadmin') }}</li>
      
      <li class="treeview">
        <a href="#">
          <i class="{{ Config::get('global.iconusermanagement') }}"></i> <span>{{ __('messages.sbusermanagement') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/modules') }}"><i class="{{ Config::get('global.iconmodule') }}"></i> {{ __('messages.pgmodulemenu') }}</a></li>
          <li><a href="#"><i class="{{ Config::get('global.iconrole') }}"></i> {{ __('messages.pgrolemenu') }}</a></li>
          <li><a href="#"><i class="{{ Config::get('global.iconuser') }}"></i> {{ __('messages.pgusermenu') }}</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="{{ Config::get('global.iconsetting') }}"></i> <span>{{ __('messages.sbsetting') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="{{ Config::get('global.iconapplication') }}"></i> {{ __('messages.pgapplicationmenu') }}</a></li>
          <li><a href="#"><i class="{{ Config::get('global.iconemail') }}"></i> {{ __('messages.pgemailmenu') }}</a></li>
          <li><a href="#"><i class="{{ Config::get('global.iconstyle') }}"></i> {{ __('messages.pgstylemenu') }}</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="{{ Config::get('global.iconapi') }}"></i> <span>{{ __('messages.sbapi') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="{{ Config::get('global.iconlistapi') }}"></i> {{ __('messages.pglistapimenu') }}</a></li>
          <li><a href="#"><i class="{{ Config::get('global.iconsecretkey') }}"></i> {{ __('messages.pgsecretkeymenu') }}</a></li>
        </ul>
      </li>

      <!-- USER -->
      <li class="header">{{ __('messages.sbuser') }}</li>

      <li><a href="#"><i class="{{ Config::get('global.icondocumentation') }}"></i> <span>{{ __('messages.pgdocumentationmenu') }}</span></a></li>
      <li><a href="#"><i class="{{ Config::get('global.iconchangepassword') }}"></i> <span>{{ __('messages.pgchangepasswordmenu') }}</span></a></li>
      <li><a href="#"><i class="{{ Config::get('global.iconlockscreen') }}"></i> <span>{{ __('messages.pglockscreenmenu') }}</span></a></li>      
      <li><a href="#"><i class="{{ Config::get('global.iconlogout') }}"></i> <span>{{ __('messages.pglogoutmenu') }}</span></a></li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
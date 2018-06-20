<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		
		<!-- Dashboard
		<small>Control panel</small> -->

		<i class="@yield('contentheader_icon')"></i> @yield('contentheader_title', 'Page Title Here...')
        
        <small>@yield('contentheader_description', 'Page Desc Here...')</small>

        @yield('contentheader_actionbutton')

	</h1>
	
	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="{!! Config::get('global.icondashboard') !!}"></i> {{ __('messages.home') }}</a></li>
		@yield('contentheader_breadcrumb')
	</ol>

</section>
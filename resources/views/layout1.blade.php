<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Why Hire You</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	{!! HTML::script('assets/plugins/3d-bold-navigation/js/modernizr.js') !!}<!-- KICKSTART -->
	{!! HTML::style('css/kickstart.css', ['media'=>'all']) !!} <!-- KICKSTART -->
	{!! HTML::style('style.css') !!}	
</head>
<body>
	
</body>
</html>
</head>
<body>
	<div id="container" class="grid">
		<header>
			<div class="col_4 column">
				<h1><a href="{{ route('home') }}"><strong>jobs</strong>Board</a></h1>	
			</div>
			<div class="col_6 column right welcome">
				@if(Auth::user()['id'])
					<h6> welcome <strong>{{ Auth::user()['name']}}</strong></h6>
				 {{-- link_to_route('auth/logout/{id}', 'logout', array(Auth::user()['id'])) --}} 
					{!! link_to_route('auth.logout', 'logout', array(Auth::user()['id'])) !!}
				@endif
			</div>	
			<div class="col_2 column right">
				<form id="add_job_link" action="admin/jobs/create">
				<button class="large green"><i class="fa fa-plus"></i> add job </button>
				</form>
			</div>
		</header>

		<div class="col_12 column">
			<!-- Menu Horizontal -->
			<ul class="menu">
				<li>
					<a href="/"><i class="fa fa-home"></i> home </a></li>
				<li>
					<a href="/"><i class="fa fa-desktop"></i> browse jobs </a></li>
				<li>
					<a href="auth/register"><i class="fa fa-user"></i> register </a></li>
				<li>
					<a href="auth/login"><i class="fa fa-key"></i> login </a></li>
			</ul>
		</div>

		

		<div class="col_12 column">
			@if (Session::has( 'message') )
		        <div class="alert-box success">
		            {{{ Session::get('message') }}}
		        </div>
	   		@endif
			@yield('content')
		</div>

		<div class="clearfix"></div>

		<footer>
	        <p> ©2015 WhyHireYou </p>
		</footer>

	</div> <!-- End Grid -->
</body>
</html>
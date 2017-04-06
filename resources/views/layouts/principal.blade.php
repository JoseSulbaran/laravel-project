<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	
	<title>Proyect</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	{!! Html::style('css/bootstrap.min.css') !!}
	{!! Html::style('css/datepicker3.css') !!}
	
	@if (Auth::guest())
		{!! Html::style('css/app.css') !!}
	@else
		{!! Html::style('css/styles.css') !!}
	@endif
	
	@yield('css')
	<!--Icons-->

	{!!Html::script('js/lumino.glyphs.js')!!}
	{!!Html::script('js/jquery-1.11.1.min.js')!!}
	{!!Html::script('js/bootstrap.min.js')!!}
	{!!Html::script('js/chart.min.js')!!}
	{!!Html::script('js/chart-data.js')!!}
	{!!Html::script('js/easypiechart.js')!!}
	{!!Html::script('js/easypiechart-data.js')!!}
	{!!Html::script('js/bootstrap-datepicker.js')!!}
	@yield('javascript')
	
</head>
<body>
	@if (Auth::guest())
	<nav class="navbar navbar-default navbar-static-top">
	    <div class="container">	    
	        <div class="collapse navbar-collapse" id="app-navbar-collapse">
	            <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>
	@endif
	@yield('content')
</body>
</html>

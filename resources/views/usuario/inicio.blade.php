@extends('layouts.principal')

@section('javascript')
	<script type="text/javascript">
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
	</script>

@endsection

@section('content')


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Administrador </span>User</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
						{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('perfil.usuario.create') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"> <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Logout </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>                             
						</ul>
					</li>
				</ul>
			</div>		
		</div>
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="pull-left image">
        
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" title="{{ Auth::user()->name }}"><br><br>
        <center><span class="hidden-xs">{{ Auth::user()->name }} </span></center>
     </div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
		<ul class="nav menu">
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Usuario 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class=" has-icon"  href="{{ route('usuario.create') }}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Registrar
						</a>
					</li>
					<li>
						<a class="has-icon" href="{{ route('usuario.index') }}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Consultar
						</a>
					</li>
					<li>
						<a class=" has-icon"  href="{{ route('imagen.imagen.create') }}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Imagen
						</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
		@yield('area_trabajo')
	</div>	
@endsection
@extends('usuario.inicio')

@section('area_trabajo')

    @if(count($errors) > 0)
        <div class="alert bg-info" role="alert">
            @foreach($errors->all() as $error)
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> {{ $error }} <br>
            @endforeach
        </div>
    @endif
	<div class="col-lg-12">
		<div class="panel panel-success ">
			<div class="panel-heading" style="text-align: center"> Editar Usuario 
			</div>
			<div class="panel-body">
	        <br><br>
				<div class="col-md-11">	
					{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT', 'class'=> 'form-horizontal'])!!}
						@include('usuario.forms.usr')
					<div class="col-md-4 col-md-offset-4">
					 	{!!Form::submit('Actualizar',['class'=>'btn btn-primary glyphicon glyphicon-refresh'])!!}
					</div>
				</div>
			</div>
  		</div>
	</div>
@endsection
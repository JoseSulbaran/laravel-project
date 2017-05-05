@extends('usuario.inicio')

@section('area_trabajo')
@if(Session::has('message_create'))
	<div class="alert bg-success" role="alert">
		<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> 
		{{ Session::get('message_create') }}
	</div>
@endif 
@if(Session::has('message_edit'))
	<div class="alert bg-info" role="alert">
		<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> 
		{{ Session::get('message_edit') }}
	</div>
@endif
@if(Session::has('message_elimi'))
	<div class="alert bg-warning" role="alert">
		<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> 
		{{ Session::get('message_elimi') }}
	</div>
@endif

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success ">
                <div class="panel-heading" style="text-align: center"> Lista Usuarios </div>
                <div class="panel-body">
                <br><br>
				    <table class="table">
						<thead>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Cedula</th>
							<th>Dirección</th>
							<th>Genero</th>
							<th>Fecha Nacimiento</th>
							<th>Operacion</th>
						</thead>

						@foreach($users as $user)
							<tbody>
								<td>{{$user->nombre}}</td>
								<td>{{$user->apellido}}</td>
								<td>{{$user->cedula}}</td>
								<td>{{$user->direccion}}</td>
								<td>{{$user->genero->descripcion}}</td>
								<td>{{$user->fecha}}</td>								
								<td>
								{!!link_to_route('usuario.edit', $title = '', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary fa fa-pencil-square-o']) !!}



									{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
										<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
									{!!Form::close()!!}												

								
								</td>
							</tbody>
						@endforeach
					</table>
					{!!$users->render()!!}
            </div>
            </div>
        </div>
    </div>

														
@endsection




											
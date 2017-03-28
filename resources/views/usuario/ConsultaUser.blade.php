@extends('usuario.inicio')

@section('area_trabajo')
@if(Session::has('message_create'))
	 <div class="alert alert-success">{{ Session::get('message_create') }}</div>
@endif
@if(Session::has('message_edit'))
	 <div class="alert alert-info">{{ Session::get('message_edit') }}</div>
@endif
@if(Session::has('message_elimi'))
	 <div class="alert alert-danger">{{ Session::get('message_elimi') }}</div>
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
							<th>Operacion</th>
						</thead>
						@foreach($users as $user)
							<tbody>
								<td>{{$user->nombre}}</td>
								<td>{{$user->apellido}}</td>
								<td>{{$user->cedula}}</td>
								<td>{{$user->direccion}}</td>
								<td>
								{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
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

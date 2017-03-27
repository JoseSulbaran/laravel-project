@extends('usuario.inicio')

@section('area_trabajo')
    
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-success ">
					<div class="panel-heading" style="text-align: center"> Registrar Usuario </div>
					<div class="panel-body">
                    <br><br>
						<div class="col-md-11">
 							<form class="form-horizontal" role="form" method="POST" action="{{ route('usuario.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nombre" class="col-md-4 control-label">Nombre:</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-md-4 control-label">Apellido:</label>
                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido" value="" required  placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cedula" class="col-md-4 control-label">Cedula:</label>
                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control" name="cedula" required placeholder="Cedula">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-md-4 control-label">Dirección:</label>
                            <div class="col-md-6">
                                <textarea id="direccion" class="form-control" name="direccion"  required placeholder="Dirección"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar Perfil
                                </button>
                            </div>
                        </div>
                    </form>							
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->







@endsection
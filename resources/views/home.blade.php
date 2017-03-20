@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil Usuario</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/usuario/create') }}">
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
                            <label for="edad" class="col-md-4 control-label">Edad:</label>
                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control" name="edad" value="" required placeholder="Edad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-md-4 control-label">Dirección:</label>
                            <div class="col-md-6">
                                <textarea id="direccion" class="form-control" name="direccion"  required placeholder="Dirección"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar Perfil
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

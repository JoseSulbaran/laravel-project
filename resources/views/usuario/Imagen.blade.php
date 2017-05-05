@extends('usuario.inicio')
@section('javascript')
<script type="text/javascript">
  $(function() {
    $( "#id_fecha" ).datepicker({
      changeMonth: true,
      changeYear: true,
      format: 'yyyy-mm-dd'
    });
  });
</script>
@endsection

@section('area_trabajo')

@if(Session::has('message_create'))
    <div class="alert bg-success" role="alert">
        <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> 
        {{ Session::get('message_create') }}
    </div>
@endif 

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> {{ $error }} <br>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success ">
                <div class="panel-heading" style="text-align: center"> Registrar Imagen </div>
                <div class="panel-body">
                <br><br>
                    <div class="col-md-11">
                        {!!Form::open(['route'=>'imagen.imagen.store','method'=>'POST', 'class'=> 'form-horizontal', 
                        'enctype'=> 'multipart/form-data', 'files'=> true])!!}
                            
                            <div class="form-group">
                                {!!Form::label('nombre','Imagen:',['class'=>'col-md-4 control-label'])!!}
                                <div class="col-md-6">
                                    {!!Form::file('imagen',['class'=>'form-control', 'placeholder'=>'Ingresa cedula', 'required' => 'required','maxlength'=>'8'])!!}
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-4">
                                {!!Form::submit('Crear Usuario',['class'=>'btn btn-primary'])!!}
                            </div>
                         {!!Form::close()!!} 
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection
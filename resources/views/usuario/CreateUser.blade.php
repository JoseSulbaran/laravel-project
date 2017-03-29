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
                <div class="panel-heading" style="text-align: center"> Registrar Usuario </div>
                <div class="panel-body">
                <br><br>
                    <div class="col-md-11">
                        {!!Form::open(['route'=>'usuario.store','method'=>'POST', 'class'=> 'form-horizontal'])!!}
                            @include('usuario.forms.usr')
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
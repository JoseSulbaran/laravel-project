
<div class="form-group">
    {!!Form::label('nombre','Nombre:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::text('nombre',$user['nombre'],['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario', 'required' => 'required', 'maxlength'=>'50'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('nombre','Apellido:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::text('apellido',$user['apellido'],['class'=>'form-control','placeholder'=>'Ingresa el apellido del usuario', 'required' => 'required', 'maxlength'=>'50'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('nombre','Cedula:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::text('cedula',$user['cedula'],['class'=>'form-control', 'placeholder'=>'Ingresa cedula', 'required' => 'required','maxlength'=>'8'])!!}
    </div>
</div>
<div class="form-group">
    {!!Form::label('nombre','Dirección:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::textarea('direccion',$user['direccion'],['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario', 'required' => 'required', 'maxlength'=>'500'])!!}                            
    </div>
</div>                          
<div class="form-group">
    {!!Form::label('nombre','Sexo:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        <select class="form-control" id="id_genero" name="genero"  >
            <option value="" required="required">Seleccionar...</option>
            @foreach($genero as $userr)  
                @if ($user['genero_id'] == $userr->id)
                    <option value="{{$userr->id}}" title = "{{$userr->descripcion}}" selected="selected">{{$userr->descripcion}}</
                @else
                    <option value="{{$userr->id}}" title = "{{$userr->descripcion}}">{{$userr->descripcion}}</
                @endif            
                option>
            @endforeach
        </select>
    </div>
</div>  
<div class="form-group">
    {!!Form::label('nombre','Fecha Nacimiento:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::text('fecha',$user['fecha'],['id'=>'id_fecha','class'=>'form-control', 'placeholder'=>'Ingresa Fecha', 'required' => 'required',  'style'=>'width: 200px'])!!}
    </div>
</div>




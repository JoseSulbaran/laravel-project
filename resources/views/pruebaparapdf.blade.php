<html>
<head>
</head>
<body>

      <h1><center><font color="#337ab7">Lista de Usuarios</font></center></h1>

      <table id= "tabla_detalle" width="100%" cellspacing="1"
           class="tabla_deuda colapsado" style="margin-bottom: 20px;">
          <thead>
            <tr style="background-color: #D5D5D5;" >
              <th>Nombre</th>
              <th>Correo</th>
              <th>Cedula</th>
              <th>Dirección</th>
              <th>Genero</th>
              <th>Fecha Nacimiento</th>
            </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
            <tr>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->cedula}}</td>
                <td>{{$user->direccion}}</td>
                <td>{{$user->genero->descripcion}}</td>
                <td>{{$user->fecha}}</td>                         
            </tr>   
          </tbody>
          @endforeach
       </table>
</body>
</html>


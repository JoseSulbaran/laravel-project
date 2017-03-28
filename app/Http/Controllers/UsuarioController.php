<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Requests\CreateUsuarioRequest;
use Illuminate\Http\Request;
use Redirect;
use Session;

class UsuarioController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' => ['create','store', 'edit', 'update', 'destroy']]);     
    }


    public function index(Request $request)
    {

        $users = Usuario::paginate(5);

        if($request->ajax()){
            echo "string";
            return response()->json(view('usuario.ConsultaUser',compact('users'))->render());
        }
        return view('usuario.ConsultaUser',compact('users'));
    }

    public function create()
    {
        $user = [
            'nombre' => '',
            'apellido' => '',
            'cedula' => '',
            'direccion' => '',            
        ];

        return view('usuario.CreateUser', compact('user'));
    }
        

    public function store(CreateUsuarioRequest $request)
    {

        Usuario::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'cedula' => $request['cedula'],
            'direccion' => $request['direccion']
        ]);
        Session::flash('message_create','Usuario Creado Correctamente');
        return Redirect::to('/usuario');        
    }


    public function show(Usuario $usuario)
    {
        //
    }


    public function edit(Usuario $usuario)
    {

        return view('usuario.EditUser',['user'=>$usuario]);
    }


    public function update(Request $request, Usuario $usuario)
    {
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('message_edit','Usuario Actualizado Correctamente');
        //var_dump(Session::all());
        //echo Session::all();        
        return Redirect::to('/usuario');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        Session::flash('message_elimi','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }
}

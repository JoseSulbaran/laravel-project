<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Genero;
use App\imagen;
use App\Http\Requests\CreateUsuarioRequest;
use Illuminate\Http\Request;


use Redirect;
use Session;
use Excel;
use PDF;

class UsuarioController extends Controller
{

    public function __construct(){
        /*
        $this->middleware('auth', ['only' => ['index','create','store', 'edit', 'update', 'destroy', 'imagen']]);     */
        
        
    }

    public function ExportPDF(){
        $users = Usuario::all();
        $pdf = PDF::loadView('pruebaparapdf',compact('users'));
        //return $pdf->download('pruebapdf');1
        return $pdf->stream('pruebapdf');
    }


    public function importExport(){
        $data = Usuario::all();
        
        Excel::create('Reporte', function($excel) use ($data) {

           
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            
            });

        })->download('csv');
    }

    public function imagen(Request $request)
    {   

        return view('usuario.Imagen');
    }

    public function imagen_store(Request $request)
    {       

        return $request->file();
        $article = new imagen($request->all());
        $article->save();
        //imagen::create($request->all());

        //Session::flash('message_create','Artículo fue creado correctamente');
        //return redirect::to('/imagenes/imagen');

        
    }



    public function index(Request $request)
    {
        $users = Usuario::paginate(5);

        if($request->ajax()){
            echo "string";
            return response()->json(view('usuario.ConsultaUser',compact('users'))->render());
        }
        $date = date('Y-m-d');
        print $date;

        return view('usuario.ConsultaUser',compact('users'));
        
        /*$users =  Usuario::all();

        return response()->json($users->toArray());
        */

    }

    public function create()
    {
        $user = [
            'nombre' => '',
            'apellido' => '',
            'cedula' => '',
            'direccion' => '',   
            'fecha' => '', 
            'genero_id' => '',             
        ];

        $genero = Genero::all(array('id','descripcion'));
        
        //$genero = [''=>''] + Genero::get()->list('id', 'sexo')->all();        
        return view('usuario.CreateUser', compact('user','genero'));
    }
        

    public function store(CreateUsuarioRequest $request)
    {

        Usuario::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'cedula' => $request['cedula'],
            'direccion' => $request['direccion'],
            'fecha' => $request['fecha'],
            'genero_id' => $request['genero'],
        ]);
        //Usuario::create($request->all());

        Session::flash('message_create','Usuario Creado Correctamente');
        return Redirect::to('/usuario');        
    }


    public function show(Usuario $usuario)
    {
        //
    }


    public function edit(Usuario $usuario)
    {
        $genero = Genero::all(array('id','descripcion'));
        
        return view('usuario.EditUser',['user'=>$usuario,'genero'=>$genero]);
    }


    public function update(Request $request, Usuario $usuario)
    {
        //$usuario->fill($request->all());
        $usuario->fill([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'cedula' => $request['cedula'],
            'direccion' => $request['direccion'],
            'fecha' => $request['fecha'],
            'genero_id' => $request['genero'],
            ]);
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

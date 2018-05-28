<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AngularUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
       $this->middleware('cors');
       //$this->middleware("@find", ['only' => [ 'show', 'update', 'destroy']]);

    }




    // lista los data para angular
    public function index()
    {
        //

        $users =  Usuario::all();
        //dd($users);
        //header('Access-Control-Allow-Origin: *');
        return response()->json($users->toArray());
    }


    public function create()
    {
        //
    }

    // crea  la data para angular
    public function store(Request $request)
    {

        Usuario::create($request->all());
        return response()->json(["mensaje" => "creado correctnte"]);        
    }

    // lista un parametro para editar para angular
    public function show($id)
    {
        //
        return response()->json(Usuario::find($id));
    }

    public function edit($id)
    {
        //

    }

    // update 
    public function update(Request $request, $id)
    {

        $usuario = Usuario::find($id);
        $usuario->fill($request->all());    
        $usuario->save();

        return response()->json(["mensaje"=>"Actualizo correctamente"]);
        //return response()->json(["mensaje"=>"Actualizada"]);
    }


    public function destroy($id)
    {
        $user = Usuario::find($id);
        $user->delete();

        return response()->json(["mensaje"=>"Borrada la data"]);
    }
}

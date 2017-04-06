<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    protected $table = "usuario";
    
    protected $fillable = [
    	'nombre', 'apellido', 'cedula', 'direccion', 'fecha','genero_id'    
    ];
    protected $id='id';

    public $timestamps = true;     //true valor por defecto
    public $incrementing = true;    //true valor por defecto

	//Una noticia pertanece a un grupo y solo uno
	public function genero() {

        return $this->belongsTo('App\Genero');
    }
	
}

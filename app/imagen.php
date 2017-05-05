<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class imagen extends Model
{
    protected $table = "imagens";
    
    protected $fillable = [
    	'imagen'    
    ];
    
     public function setImagenAttribute($path){

        /*if(!empty($imagen)){
          $nombre = $imagen->getClientOriginalName();
          $this->attributes['imagen'] = $nombre;
          \Storage::disk('local')->put($nombre, \File::get($imagen));
        }*/

		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['imagen'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));


     }


}

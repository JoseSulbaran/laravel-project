<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('genero_id')->unsigned()->index();;
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->bigInteger('cedula');
            $table->text('direccion');
            $table->date('fecha');        
            $table->foreign('genero_id')->references('id')->on('genero')->onDelete('cascade');;
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->id()
            ;
            $table->enum('tipo_foto', array('Evento','Animal'))->nullable();
            $table->string('caminho')->nullable();

       
            $table->unsignedBigInteger('id_animal')->nullable();
            $table->foreign('id_animal')->references('id')->on('animal');
            
            $table->unsignedBigInteger('id_eventos')->nullable();
            $table->foreign('id_eventos')->references('id')->on('eventos');

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
        //
    }
}

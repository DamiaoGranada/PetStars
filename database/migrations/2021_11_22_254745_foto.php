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
            $table->id()->nullable(false);
            $table->enum('tipo_foto', array('Evento','Animal'))->nullable(false);
            $table->string('caminho')->nullable(false);

       
            $table->unsignedBigInteger('id_animal')->nullable(false);
            $table->foreign('id_animal')->references('id')->on('animal');
            
            $table->unsignedBigInteger('id_eventos')->nullable(false);
            $table->foreign('id_eventos')->references('id')->on('eventos');

            $table->rememberToken();
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

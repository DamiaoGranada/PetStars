<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();

            $table->string('nome_evento',20)->nullable();
            $table->string('descri_evento')->nullable();
            $table->date('data_evento')->nullable();
            $table->string('local_evento',50)->nullable();
            $table->enum('tipo_evento', array('Caminhada','Voluntario','Solidario'))->nullable();

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

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

            $table->id()->nullable(false);

            $table->string('nome_evento',20)->nullable(false);
            $table->string('descri_evento')->nullable(false);
            $table->date('data_evento')->nullable(false);
            $table->string('local_evento',50)->nullable(false);
            $table->enum('tipo_evento', array('Caminhada','Voluntario','Solidario'))->nullable(false);

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

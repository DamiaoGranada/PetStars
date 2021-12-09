<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Animal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->string('pelagem', 25)->nullable();
            $table->string('nome_animal', 25)->nullable(false);
            $table->char('descricao_animal')->nullable(false);
            $table->date('data_acolhimento')->nullable(false);
            $table->string('idade_animal', 25)->nullable(false);
            $table->string('especie', 25)->nullable(false);
            $table->enum('genero', array('M','F'))->nullable(false);
            $table->string('local_animal', 25)->nullable(false);
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

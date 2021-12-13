<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100)->nullable();
            $table->string('Conteudo1',700)->nullable();
            $table->string('Conteudo2',700)->nullable();
            $table->string('Conteudo3',700)->nullable();
            $table->string('Conteudo4',700)->nullable();
            $table->string('Conteudo5',700)->nullable();
            $table->string('Conteudo6',700)->nullable();
            $table->string('Conteudo7',700)->nullable();
            $table->string('Conteudo8',700)->nullable();

            
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq');
    }
}

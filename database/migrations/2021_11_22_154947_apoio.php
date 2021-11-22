<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apoio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoio', function (Blueprint $table) {

            $table->id()->nullable(false);
            $table->string('nome_apoio',20)->nullable(false);
            $table->string('descri_apoio', 200)->nullable(false);
            $table->string('caminho_apoio')->nullable(false);

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

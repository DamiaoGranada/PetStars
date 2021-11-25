<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {

            $table->id()->nullable(false);
            $table->string('nome_comentario',20)->nullable(false);
            $table->string('email_comentario', 45)->nullable(false);
            $table->date('data_envio')->nullable(false);
            $table->string('mensagem')->nullable(false);

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

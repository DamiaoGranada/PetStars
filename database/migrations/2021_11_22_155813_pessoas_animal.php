<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PessoasAnimal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_animal', function (Blueprint $table) {

            $table->id()->nullable(false);

            $table->date('data_adocao')->nullable(false);

            $table->unsignedBigInteger('id_animal')->nullable(false);
            $table->foreign('id_animal')->references('id')->on('animal');
            $table->unsignedBigInteger('id_user')->nullable(false);
            $table->foreign('id_user')->references('id')->on('users');

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('apelido', 25)->nullable(TRUE);
            $table->char('nif', 9)->unique()->nullable(TRUE);
            $table->enum('funcao', array('admin', 'cliente'))->nullable(TRUE);
            $table->string('localidade')->nullable(TRUE);
            $table->char('cod_postal', 8)->nullable(TRUE);
            $table->string('rua')->nullable(TRUE);
            $table->char('telefone', 9)->unique()
                                        ->nullable(TRUE);


            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

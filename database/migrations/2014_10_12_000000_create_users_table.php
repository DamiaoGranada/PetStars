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
            $table->id()->nullable(false);
            $table->string('p_nome', 25)->nullable(false);
            $table->string('apelido', 25)->nullable(false);
            $table->char('nif', 9)->unique()->nullable(false);
            $table->string('login', 50)->nullable(false);
            $table->string('password', 50)->nullable(false);
            $table->enum('funcao', array('admin', 'cliente'))->nullable(false);
            $table->string('localidade')->nullable(false);
            $table->char('cod_postal', 8)->nullable(false);
            $table->string('rua')->nullable(false);
            $table->char('telefone', 9)->unique()
                                        ->nullable(false);
            $table->string('email')->unique()
                                    ->nullable(false);


            
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}

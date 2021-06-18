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
            $table->integer('idUser',true);
            $table->string('nm_user',50);
            $table->string('email_user',50);
            $table->integer('cpf_user',50);
            $table->string('tel_user',50);
            $table->date('nascimento_user');
            $table->string('pai_user',50); 
            $table->string('mae_user',50);
            $table->string('rg_user',50);
            $table->string('cep_user',50);
            $table->string('rua_user',50);
            $table->string('bairro_user',50);
            $table->string('cidade_user',50);
            $table->string('uf_user',50);
            $table->integer('renda_user',50);   


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

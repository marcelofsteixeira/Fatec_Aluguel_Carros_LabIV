<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->string('cpf', 11);
            $table->primary('cpf');
            $table->string('nome', 30);
            $table->string('rg', 10);
            $table->string('endereco', 50);
            $table->string('cep', 10);
            $table->string('cel', 15);
            $table->string('tel', 15);
            $table->string('email', 30);
            $table->string('cargo', 20);
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
        Schema::dropIfExists('funcionario');
    }
}

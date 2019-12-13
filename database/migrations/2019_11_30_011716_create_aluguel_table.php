<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAluguelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluguel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente_id', 11);
            $table->string('carro_id', 7);
            $table->decimal('preco', 15, 2);
            $table->string('funcionario_id', 11);
            $table->date('data_aluguel');
            $table->date('data_entrega_esperada');
            $table->date('data_entrega')->nullable();
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
        Schema::dropIfExists('aluguel');
    }
}

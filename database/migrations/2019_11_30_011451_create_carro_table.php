<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro', function (Blueprint $table) {
            $table->string('placa', 7);
            $table->primary('placa');
            $table->string('cor', 15);
            $table->string('marca', 15);
            $table->string('modelo', 15);
            $table->string('num_renavan', 10);
            $table->decimal('diaria', 15, 2);
            $table->boolean('alugado')->default(false);
            $table->boolean('disponivel')->default(true);
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
        Schema::dropIfExists('carro');
    }
}

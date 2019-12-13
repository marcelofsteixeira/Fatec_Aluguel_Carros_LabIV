<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aluguel_id')->unsigned();
            $table->date('data', 15);
            $table->longText('descricao', 500);
            $table->decimal('multa', 15, 2);
            $table->timestamps();
        });

        /*Schema::table('incidente', function($table) {
            $table->foreign('aluguel_id')->references('id')->on('aluguel');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidente');
    }
}

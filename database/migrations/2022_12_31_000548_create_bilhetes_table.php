<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilhetes', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->default('ok');
            $table->string('referencia')->unique()->nullable();
            $table->string('tipo')->nullable();

            $table->bigInteger('tarifa_id')->unsigned();
            $table->foreign('tarifa_id')
            ->references('id')
            ->on('tarifas')
            ->onDelete('cascade');

            //Dados do titular
            $table->bigInteger('passageiro_id')->unsigned();
            $table->foreign('passageiro_id')
            ->references('id')
            ->on('passageiros')
            ->onDelete('cascade');
       
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
        Schema::dropIfExists('bilhetes');
    }
};

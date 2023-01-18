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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('quantidade_passageiro');
            $table->date('dataIda');
            $table->date('dataRegresso')->nullable();

            $table->bigInteger('origem_id')->unsigned();
            $table->foreign('origem_id')
            ->references('id')
            ->on('aeroportos')
            ->onDelete('cascade');

            $table->bigInteger('destino_id')->unsigned();
            $table->foreign('destino_id')
            ->references('id')
            ->on('aeroportos')
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
        Schema::dropIfExists('reservas');
    }
};

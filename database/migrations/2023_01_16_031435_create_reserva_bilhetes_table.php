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
        Schema::create('reserva_bilhetes', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('reserva_id')->unsigned();
            $table->foreign('reserva_id')
            ->references('id')
            ->on('reservas')
            ->onDelete('cascade');

            $table->bigInteger('bilhete_id')->unsigned();
            $table->foreign('bilhete_id')
            ->references('id')
            ->on('bilhetes')
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
        Schema::dropIfExists('reserva_bilhetes');
    }
};

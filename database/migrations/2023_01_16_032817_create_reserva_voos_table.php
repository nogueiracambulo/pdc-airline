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
        Schema::create('reserva_voos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('reserva_id')->unsigned();
            $table->foreign('reserva_id')
            ->references('id')
            ->on('reservas')
            ->onDelete('cascade');

            $table->bigInteger('voo_id')->unsigned();
            $table->foreign('voo_id')
            ->references('id')
            ->on('voos')
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
        Schema::dropIfExists('reserva_voos');
    }
};

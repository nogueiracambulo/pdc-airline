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
        Schema::create('regalia_tarifas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('regalia_id')->unsigned();
            $table->foreign('regalia_id')
            ->references('id')
            ->on('regalias')
            ->onDelete('cascade');

            $table->bigInteger('tarifa_id')->unsigned();
            $table->foreign('tarifa_id')
            ->references('id')
            ->on('tarifas')
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
        Schema::dropIfExists('regalias_tarifas');
    }
};

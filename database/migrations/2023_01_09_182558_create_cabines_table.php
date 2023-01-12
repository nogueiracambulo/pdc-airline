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
        Schema::create('cabines', function (Blueprint $table) {
            $table->id();
            $table->integer('capacidade');

            $table->bigInteger('tarifa_id')->unsigned();
            $table->foreign('tarifa_id')
            ->references('id')
            ->on('tarifas')
            ->onDelete('cascade');

            $table->bigInteger('aeronave_id')->unsigned();
            $table->foreign('aeronave_id')
            ->references('id')
            ->on('aeronaves');


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
        Schema::dropIfExists('cabines');
    }
};

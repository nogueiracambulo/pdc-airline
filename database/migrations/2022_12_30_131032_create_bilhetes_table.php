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

        // Schema::create('origems', function (Blueprint $table) {
        //     $table->id();

        //     $table->bigInteger('aeroporto_id')->unsigned();
        //     $table->foreign('aeroporto_id')
        //     ->references('id')
        //     ->on('aeroportos')
        //     ->onDelete('cascade');
            
        //     $table->timestamps();
        // });

        // Schema::create('destinos', function (Blueprint $table) {
        //     $table->id();

            
        //     $table->bigInteger('aeroporto_id')->unsigned();
        //     $table->foreign('aeroporto_id')
        //     ->references('id')
        //     ->on('aeroportos')
        //     ->onDelete('cascade');
            
        //     $table->timestamps();
        // });

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

            $table->bigInteger('voo_id')->unsigned();
            $table->foreign('voo_id')
            ->references('id')
            ->on('voos')
            ->onDelete('cascade');

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
        Schema::dropIfExists('bilhetes');
    }
};

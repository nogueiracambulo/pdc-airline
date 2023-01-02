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
        Schema::create('voos', function (Blueprint $table) {
            $table->id();
            $table->date('numero_voo');
            $table->date('dataPartida');
            $table->time('horaCheckin');
            $table->time('horaEmbarque');
            $table->time('horaPartida');
            $table->time('horaChegada');

            $table->bigInteger('percurso_id')->unsigned();
            $table->foreign('percurso_id')
            ->references('id')
            ->on('percursos')
            ->onDelete('cascade');

            $table->bigInteger('aviao_id')->unsigned();
            $table->foreign('aviao_id')
            ->references('id')
            ->on('avioes')
            ->onDelete('cascade');

            $table->bigInteger('administrativo_id')->unsigned();
            $table->foreign('administrativo_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('voos');
    }
};

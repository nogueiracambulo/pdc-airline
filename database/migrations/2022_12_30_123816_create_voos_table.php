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
        Schema::create('aeronaves', function (Blueprint $table) {
            $fotoPadrao ="aviaoModelo.png";
            $table->id();
            $table->string('nome');
            $table->string('matricula')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->string('foto', 2048)->default($fotoPadrao);
            $table->timestamps();
        });

        Schema::create('voos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_voo');
            $table->date('dataPartida');
            $table->time('horaPartida');
            $table->time('horaCheckin');
            $table->time('horaEmbarque');
            $table->date('dataChegada');
            $table->time('horaChegada');

            $table->bigInteger('percurso_id')->unsigned();
            $table->foreign('percurso_id')
            ->references('id')
            ->on('percursos')
            ->onDelete('cascade');

            $table->bigInteger('aeronave_id')->unsigned();
            $table->foreign('aeronave_id')
            ->references('id')
            ->on('aeronaves')
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
        Schema::dropIfExists('aeronaves');
        Schema::dropIfExists('voos');
    }
};

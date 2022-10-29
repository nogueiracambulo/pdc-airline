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
        Schema::create('semestres', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->date('data_inicio');
            $table->date('data_termino');

            $table->bigInteger('anoLectivo_id')->unsigned();
            $table->foreign('anoLectivo_id')
            ->references('id')
            ->on('ano_lectivos')
            ->onDelete('cascade');
           
            $table->bigInteger('criador_id')->unsigned();
            $table->foreign('criador_id')
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
        Schema::dropIfExists('semestres');
    }
};

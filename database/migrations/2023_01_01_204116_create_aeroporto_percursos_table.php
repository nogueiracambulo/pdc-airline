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
        Schema::create('aeroporto_percursos', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('aeroporto_id')->unsigned();
            $table->foreign('aeroporto_id')
            ->references('id')
            ->on('aeroportos')
            ->onDelete('cascade');

            $table->bigInteger('percurso_id')->unsigned();
            $table->foreign('percurso_id')
            ->references('id')
            ->on('percursos')
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
        Schema::dropIfExists('aeroporto_percursos');
    }
};

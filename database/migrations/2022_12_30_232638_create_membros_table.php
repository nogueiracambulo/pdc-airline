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
        Schema::create('preferencias', function (Blueprint $table) {
            $table->id();
            $table->string('refeicao');
            $table->string('tipo_lugar');

            $table->timestamps();
        });

        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->string('numero_membro')->unique();
            $table->string('titulo');
            $table->string('idioma_preferencia');
            $table->bigInteger('milhas');
            
            //Informações de utilizador
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            //Informações de preferências de viagem
            $table->bigInteger('preferencia_id')->unsigned();
            $table->foreign('preferencia_id')
            ->references('id')
            ->on('preferencias')
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
        Schema::dropIfExists('preferencias');
        Schema::dropIfExists('membros');
    }

    
};

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

        Schema::create('passageiros', function (Blueprint $table) {
            //Dados do titular
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('genero');
            $table->string('telefone');
            $table->string('email')->nullable();
            $table->date('dataNascimento');
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
        Schema::dropIfExists('passageiros');
      
    }
};

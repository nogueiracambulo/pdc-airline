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
     
        Schema::create('anuncios', function (Blueprint $table) {
            $fotoPadrao ="aviaoModelo.png";
            
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->string('imagem', 2048)->default($fotoPadrao);

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
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
        Schema::dropIfExists('anuncios');
    }
};

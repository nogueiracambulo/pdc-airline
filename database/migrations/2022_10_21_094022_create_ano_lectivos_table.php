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
        Schema::create('ano_lectivos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->boolean('selecionado')->default(1);
            
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
        Schema::dropIfExists('ano_lectivos');
    }
};

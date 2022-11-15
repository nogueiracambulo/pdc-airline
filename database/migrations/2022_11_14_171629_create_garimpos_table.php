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
        Schema::create('garimpos', function (Blueprint $table) {
            $fotoCapaPadrao="storage/capa_garimpo/padrao.png";
            $preco = "Grátis";

            $table->id();
            $table->string('nome')->unique();
            $table->string('descricao');
            $table->string('Preco')->default($preco);
            $table->integer('inscritos')->default(0);
            $table->string('fotoCapa')->default($fotoCapaPadrao);

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
        Schema::dropIfExists('garimpos');
    }
};

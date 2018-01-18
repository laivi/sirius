<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('municipio');
            $table->string('nome_soli');
            $table->string('local');
            $table->string('referencia');
            $table->string('nome_paci');
            $table->string('zona');
            $table->string('telefone');
            $table->string('tipo')->default('Padão');
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
        Schema::dropIfExists('notificacoes');
    }
}

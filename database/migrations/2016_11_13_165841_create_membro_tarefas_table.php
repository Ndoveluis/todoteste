<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembroTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_tarefas', function (Blueprint $table) {
            $table->integer('membro_id')->unsigned();
            $table->integer('tarefa_id')->unsigned();
            $table->foreign('membro_id')->references('id')->on('membros');
            $table->foreign('tarefa_id')->references('id')->on('tarefas');
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
        Schema::dropIfExists('membro_tarefas');
    }
}

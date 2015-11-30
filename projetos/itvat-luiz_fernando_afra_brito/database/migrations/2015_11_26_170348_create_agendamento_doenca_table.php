<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentoDoencaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento_doenca', function (Blueprint $table) {
            $table->integer('paciente_id')->unsigned()->index();
            $table->dateTime('data_hora')->index();
            $table->integer('doenca_id')->unsigned()->index();
            $table->timestamps();

            $table->primary(['paciente_id', 'data_hora', 'doenca_id']);

            $table->foreign(['paciente_id', 'data_hora'])
                ->references(['paciente_id', 'data_hora'])
                ->on('agendamentos')
                ->onDelete('cascade');

            $table->foreign('doenca_id')
                ->references('id')
                ->on('doencas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agendamento_doenca');
    }
}

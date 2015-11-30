<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->integer('paciente_id')->unsigned()->index();
            $table->dateTime('data_hora')->index();
            $table->integer('medico_id')->unsigned();
            $table->integer('clinica_id')->unsigned();
            $table->tinyInteger('status');
            $table->string('obs')->nullable();
            $table->timestamps();

            $table->primary(['paciente_id', 'data_hora']);

            $table->foreign('paciente_id')
                ->references('id')
                ->on('pacientes')
                ->onDelete('cascade');

            $table->foreign('medico_id')
                ->references('id')
                ->on('medicos')
                ->onDelete('cascade');

            $table->foreign('clinica_id')
                ->references('id')
                ->on('clinicas')
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
        Schema::drop('agendamentos');
    }
}

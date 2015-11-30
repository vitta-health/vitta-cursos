<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePontuacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontuacoes', function (Blueprint $table) {
            $table->integer('id_medico')->unsigned()->index();
            $table->integer('id_paciente')->unsigned()->index();
            $table->tinyInteger('pontuacao');
            $table->timestamps();

            $table->primary(['id_medico', 'id_paciente']);

            $table->foreign('id_medico')
                ->foreign('id')
                ->on('medicos')
                ->onDelete('cascade');

            $table->foreign('id_paciente')
                ->foreign('id')
                ->on('pacientes')
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
        Schema::drop('pontuacoes');
    }
}

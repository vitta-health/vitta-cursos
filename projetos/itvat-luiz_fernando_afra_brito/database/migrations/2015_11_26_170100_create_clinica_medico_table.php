<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicaMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica_medico', function (Blueprint $table) {
            $table->integer('clinica_id')->unsigned()->index();
            $table->integer('medico_id')->unsigned()->index();
            $table->timestamps();

            $table->primary(['clinica_id', 'medico_id']);

            $table->foreign('clinica_id')
                ->references('id')
                ->on('clinicas')
                ->onDelete('cascade');

            $table->foreign('medico_id')
                ->references('id')
                ->on('medicos')
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
        Schema::drop('clinica_medico');
    }
}

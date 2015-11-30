<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_medico', function (Blueprint $table) {
            $table->integer('area_id')->unsigned()->index();
            $table->integer('medico_id')->unsigned()->index();
            $table->timestamps();

            $table->primary(['area_id', 'medico_id']);

            $table->foreign('area_id')
                ->references('id')
                ->on('areas')
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
        Schema::drop('area_medico');
    }
}

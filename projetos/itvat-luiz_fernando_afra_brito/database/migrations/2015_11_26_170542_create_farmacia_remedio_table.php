<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmaciaRemedioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacia_remedio', function (Blueprint $table) {
            $table->integer('farmacia_id')->unsigned()->index();
            $table->integer('remedio_id')->unsigned()->index();
            $table->timestamps();

            $table->primary(['farmacia_id', 'remedio_id']);

            $table->foreign('farmacia_id')
                ->references('id')
                ->on('farmacias')
                ->onDelete('cascade');

            $table->foreign('remedio_id')
                ->references('id')
                ->on('remedios')
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
        Schema::drop('farmacia_remedio');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoencaRemedioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doenca_remedio', function (Blueprint $table) {
            $table->integer('doenca_id')->unsigned()->index();
            $table->integer('remedio_id')->unsigned()->index();
            $table->timestamps();

            $table->primary(['doenca_id', 'remedio_id']);

            $table->foreign('doenca_id')
                ->references('id')
                ->on('doencas')
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
        Schema::drop('doenca_remedio');
    }
}

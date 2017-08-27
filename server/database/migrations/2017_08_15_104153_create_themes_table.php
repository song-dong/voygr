<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_title');
            $table->string('t_main');
            $table->text('explain');
            $table->string('t_photo1');
            $table->string('t_photo2');
            $table->string('t_photo3');
            $table->string('t_movie');
            $table->datetime('exhibitDate');
            $table->date('deadline');
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
        Schema::drop('themes');
    }
}

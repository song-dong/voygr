<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('s_title');
            $table->string('s_main');
            $table->text('outline');
            $table->text('document');
            $table->string('s_photo1');
            $table->string('s_photo2');
            $table->string('s_photo3');
            $table->string('t_movie');
            $table->datetime('submitDate');
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
        Schema::drop('submissions');
    }
}

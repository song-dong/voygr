<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('mail');
            $table->string('password');
            $table->string('face_photo');
            $table->string('country');
            $table->string('address');
            $table->string('building');
            $table->date('birthday');
            $table->integer('tel');
            $table->string('nation');
            $table->string('lang');
            $table->string('affiiation');
            $table->datetime('register');
            $table->datetime('last_login');
            $table->integer('admin_flg');
            $table->integer('life_flg');
            $table->integer('myPoint');
            $table->integer('myRank');
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
        Schema::drop('members');
    }
}

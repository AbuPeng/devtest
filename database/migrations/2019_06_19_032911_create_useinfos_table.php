<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseinfosTable extends Migration 
{
	public function up()
	{
		Schema::create('useinfos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->integer('user_gender')->default(0)->comment('0.男,1.女');
            $table->integer('user_age');
            $table->text('photo');
            $table->text('token');
            $table->string('password');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('useinfos');
	}
}

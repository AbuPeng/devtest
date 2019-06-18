<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppinstallsTable extends Migration 
{
	public function up()
	{
		Schema::create('appinstalls', function(Blueprint $table) {
            $table->increments('id');
            $table->date('install_time');
            $table->integer('android_num')->default(0);
            $table->integer('ios_num')->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('appinstalls');
	}
}

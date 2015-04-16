<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->string('username')->unique();
			$table->biginteger('uid')->unsigned();
			$table->integer('phone');
			$table->date('birthday');
			$table->enum('gender', ['M', 'F']);
			$table->string('building');
			$table->string('floor');
			$table->string('apartment');
			$table->string('job');
			$table->string('hometown');
			$table->string('aboutme');
			$table->string('motto');
			$table->string('access_token');
			$table->string('access_token_secret');
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
		Schema::drop('profiles');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('phone')->unique()->nullable();
			$table->date('birthday');
			$table->enum('gender', ['M', 'F']);
			$table->string('building');
			$table->string('floor');
			$table->string('apartment');
			$table->string('job');
			$table->string('hometown');
			$table->string('aboutme');
			$table->string('motto');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}

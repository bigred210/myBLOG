<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {
 
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table)
	        {
	            $table->increments('id');
	            $table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('id')->on('users');
	            $table->string('title',100)->unique();
	            $table->text('body');
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
		Schema::drop('posts');
	}

}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('profiles', function (Blueprint $table) {
			$table->increments('id');
			$table->date('birthday');
			$table->string('phone');
			$table->string('github');
			$table->string('linkedin');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instagram');
			$table->string('googleplus');
			$table->string('skype');
			$table->string('youtube');
			$table->string('pinterest');
			$table->integer('user_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('profiles');
	}
}

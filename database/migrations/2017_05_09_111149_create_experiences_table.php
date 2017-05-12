<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('experiences', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('content');
			$table->string('name_position');
			$table->string('location');
			$table->date('date_start');
			$table->date('date_end');
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
		Schema::dropIfExists('experiences');
	}
}

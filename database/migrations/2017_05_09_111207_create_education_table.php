<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('education', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('institute_name');
			$table->text('description');
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
		Schema::dropIfExists('education');
	}
}

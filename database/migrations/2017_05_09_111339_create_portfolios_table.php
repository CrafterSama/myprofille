<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('portfolios', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->string('technologies');
			$table->string('url');
			$table->string('repository');
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
		Schema::dropIfExists('portfolios');
	}
}

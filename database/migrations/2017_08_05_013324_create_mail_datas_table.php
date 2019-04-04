<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailDatasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('mail_datas', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('seller_id');
			$table->bigInteger('contact_no')->nullable();
			$table->text('message')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('mail_datas');
	}
}

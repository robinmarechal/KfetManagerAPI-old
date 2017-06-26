<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoneyAddingsTable extends Migration {

	public function up()
	{
		Schema::create('money_addings', function(Blueprint $table) {
			$table->increments('id');
			$table->date('date');
			$table->decimal('amount')->default('0');
			$table->string('reason', 255);
			$table->text('description');
		});
	}

	public function down()
	{
		Schema::drop('money_addings');
	}
}
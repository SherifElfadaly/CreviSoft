<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubscription extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if ( ! Schema::hasTable('subscriptions'))
		{
			Schema::create('subscriptions', function(Blueprint $table) {
				$table->bigIncrements('id');
				$table->string('email', 100)->unique();
				$table->timestamps();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if (Schema::hasTable('subscriptions'))
		{
			Schema::drop('subscriptions');
		}
	}
}
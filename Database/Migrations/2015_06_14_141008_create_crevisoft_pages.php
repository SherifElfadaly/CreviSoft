<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrevisoftPages extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		\CMS::pages()->insert([
				[
				'title'     => 'Home',
				'page_slug' => 'home',
				'template'  => 'home',
				'theme'     => 'crevisoft',
				]
			]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		\CMS::pages()->delete('crevisoft', 'theme');
	}
}
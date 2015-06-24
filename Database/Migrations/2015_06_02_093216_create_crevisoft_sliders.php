<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrevisoftSliders extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		\CMS::sliders()->insert([
				[
				'title'       => 'News',
				'description' => 'News Slider',
				'slider_slug' => 'news',
				'is_active'   => 1,
				'template'    => 'news',
				'theme'       => 'crevisoft',
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
		\CMS::sliders()->delete('crevisoft', 'theme');
	}
}
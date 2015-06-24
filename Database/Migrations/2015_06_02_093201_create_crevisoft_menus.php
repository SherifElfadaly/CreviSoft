<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrevisoftMenus extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		\CMS::menus()->insert([
				[
				'title'       => 'Header Menu',
				'menu_slug'   => 'header_menu',
				'description' => 'Header Menu',
				'template'    => 'header_menu',
				'theme'       => 'crevisoft',
				],
				[
				'title'       => 'Side Menu',
				'menu_slug'   => 'side_menu',
				'description' => 'Side Menu',
				'template'    => 'side_menu',
				'theme'       => 'crevisoft',
				],
				[
				'title'       => 'Footer Menu',
				'menu_slug'   => 'footer_menu',
				'description' => 'Footer Menu',
				'template'    => 'footer_menu',
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
		\CMS::menus()->delete('crevisoft', 'theme');
	}
}
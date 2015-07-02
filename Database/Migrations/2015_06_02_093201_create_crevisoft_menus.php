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
				'title'       => 'Footer Site Map Menu',
				'menu_slug'   => 'footer_site_map_menu',
				'description' => 'Footer Site Map Menu',
				'template'    => 'footer_site_map_menu',
				'theme'       => 'crevisoft',
				],
				[
				'title'       => 'Footer Fast Links Menu',
				'menu_slug'   => 'footer_fast_links_menu',
				'description' => 'Footer Fast Links Menu',
				'template'    => 'footer_fast_links_menu',
				'theme'       => 'crevisoft',
				],
				[
				'title'       => 'Footer Projects Menu',
				'menu_slug'   => 'footer_projects_menu',
				'description' => 'Footer Projects Menu',
				'template'    => 'footer_projects_menu',
				'theme'       => 'crevisoft',
				],
				[
				'title'       => 'Footer Services Menu',
				'menu_slug'   => 'footer_services_menu',
				'description' => 'Footer Services Menu',
				'template'    => 'footer_services_menu',
				'theme'       => 'crevisoft',
				],
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
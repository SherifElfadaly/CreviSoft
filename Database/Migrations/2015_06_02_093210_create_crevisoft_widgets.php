<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrevisoftWidgets extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		\CMS::widgetTypes()->insert([
				[
				'widget_type_name' => 'About',
				'template'         => 'about',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'About Header',
				'template'         => 'about_header',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'Services',
				'template'         => 'services',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'Services Footer',
				'template'         => 'services_footer',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'Projects',
				'template'         => 'projects',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'Projects Header',
				'template'         => 'projects_header',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'Subscription',
				'template'         => 'subscription',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'About Us Page',
				'template'         => 'about_us_page',
				'theme'            => 'crevisoft',
				],
				[
				'widget_type_name' => 'Services Page',
				'template'         => 'services_page',
				'theme'            => 'crevisoft',
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
		\CMS::widgetTypes()->delete('crevisoft', 'theme');
	}
}
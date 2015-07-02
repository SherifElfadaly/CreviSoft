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
				],
				[
				'title'     => 'About us',
				'page_slug' => 'about_us',
				'template'  => 'about_us',
				'theme'     => 'crevisoft',
				],
				[
				'title'     => 'About',
				'page_slug' => 'about',
				'template'  => 'about',
				'theme'     => 'crevisoft',
				],
				[
				'title'     => 'Services',
				'page_slug' => 'services',
				'template'  => 'services',
				'theme'     => 'crevisoft',
				],
				[
				'title'     => 'Service',
				'page_slug' => 'service',
				'template'  => 'service',
				'theme'     => 'crevisoft',
				],
				[
				'title'     => 'Sub Services',
				'page_slug' => 'sub_services',
				'template'  => 'sub_services',
				'theme'     => 'crevisoft',
				],
				[
				'title'     => 'Blogs',
				'page_slug' => 'blogs',
				'template'  => 'blogs',
				'theme'     => 'crevisoft',
				],
				[
				'title'     => 'Blog',
				'page_slug' => 'blog',
				'template'  => 'blog',
				'theme'     => 'crevisoft',
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
		\CMS::pages()->delete('crevisoft', 'theme');
	}
}
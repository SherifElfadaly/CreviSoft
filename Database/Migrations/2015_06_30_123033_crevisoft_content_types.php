<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrevisoftContentTypes extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		\CMS::contentTypes()->createContentTypes([
				[
				'content_type_name' => 'About',
				'theme'             => 'crevisoft',
				],
				[
				'content_type_name' => 'Sub Services',
				'section_types'     => ['Service'],
				'theme'             => 'crevisoft',
				],
				[
				'content_type_name' => 'News',
				'theme'             => 'crevisoft',
				],
				[
				'content_type_name' => 'Blog',
				'section_types'     => ['Categories'],
				'theme'             => 'crevisoft',
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
		\CMS::contentTypes()->delete('crevisoft', 'theme');
	}
}
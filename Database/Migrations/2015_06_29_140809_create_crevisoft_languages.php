<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrevisoftLanguages extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if( ! \CMS::languages()->first('key', 'ar'))
		{
			\CMS::languages()->createLanguage(
				[
				'key'         => 'ar',
				'title'       => 'Arabic',
				'description' => 'Arabic Language',
				'flag'        => 'Arabic',
				'is_active'   => 1,
				'is_default'  => 1,
				]);
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// 
	}
}
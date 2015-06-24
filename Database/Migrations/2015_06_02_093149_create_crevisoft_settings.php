<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrevisoftSettings extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		\CMS::coreModuleSettings()->insert([
				[
				'key'           => 'English Logo',
				'input_type'    => 'file',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Arabic Logo',
				'input_type'    => 'file',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'English Logo Subtitle',
				'input_type'    => 'text',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Arabic Logo Subtitle',
				'input_type'    => 'text',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Facebook',
				'input_type'    => 'url',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Twitter',
				'input_type'    => 'url',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Google',
				'input_type'    => 'url',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Youtube',
				'input_type'    => 'url',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Instagram',
				'input_type'    => 'url',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Address',
				'input_type'    => 'text',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Telephone',
				'input_type'    => 'text',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Email',
				'input_type'    => 'email',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Longitude',
				'input_type'    => 'decimal',
				'module_key'    => 'crevisoft',
				],
				[
				'key'           => 'Longitude',
				'input_type'    => 'decimal',
				'module_key'    => 'crevisoft',
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
		\CMS::coreModuleSettings()->delete('crevisoft', 'module_key');
	}
}
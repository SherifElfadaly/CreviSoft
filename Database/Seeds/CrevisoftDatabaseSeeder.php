<?php
namespace App\Modules\Crevisoft\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CrevisoftDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('App\Modules\Crevisoft\Database\Seeds\FoobarTableSeeder');
	}

}

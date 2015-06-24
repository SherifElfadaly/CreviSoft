<?php
namespace App\Modules\Crevisoft\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class CrevisoftServiceProvider extends ServiceProvider
{
	/**
	 * Register the Crevisoft module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Crevisoft\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Crevisoft module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('crevisoft', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('crevisoft', realpath(__DIR__.'/../Resources/Views'));
	}
}

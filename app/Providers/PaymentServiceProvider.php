<?php namespace Ilaravel\Core\Providers;

class PaymentServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('payment', 'Ilaravel\Core\Services\Payment\Paypal' );
	}

}

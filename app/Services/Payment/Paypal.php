<?php namespace Ilaravel\Core\Services\Payment;

use Ilaravel\Core\Contracts\Payment as PaymentContract;

class Paypal implements PaymentContract {

	public function charge()
	{
		return "Payment charged over paypal, thanks!";
	}
}

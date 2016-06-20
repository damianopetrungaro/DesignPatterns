<?php

namespace App\Decorator;

use App\Decorator\Pattern\AppleShopping;
use App\Decorator\Pattern\BaseShopping;
use App\Decorator\Pattern\BananaShopping;


/**
 * Simulate client action
 */
class Client
{
	public function __construct()
	{
		$shopping = new AppleShopping(new BananaShopping(new BaseShopping()));
		var_dump($shopping->getAmount());
	}
}

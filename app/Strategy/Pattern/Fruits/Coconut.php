<?php

namespace App\Strategy\Pattern\Fruits;

use App\Strategy\Pattern\Biteable\NoBiteable;
use App\Strategy\Pattern\Fruits\Fruit;

/**
 * Coconut Fruit Object
 */
class Coconut extends Fruit
{
	/**
	 * Set Conocut basic method
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->biteable = new NoBiteable();
	}
}

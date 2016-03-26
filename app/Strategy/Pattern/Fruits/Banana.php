<?php

namespace App\Strategy\Pattern\Fruits;

use App\Strategy\Pattern\Biteable\IsBiteable;
use App\Strategy\Pattern\Fruits\Fruit;

/**
 * Banana Fruit Object
 */
class Banana extends Fruit
{
	/**
	 * Set Banana basic method
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->biteable = new IsBiteable();
	}
}

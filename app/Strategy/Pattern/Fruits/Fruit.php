<?php

namespace App\Strategy\Pattern\Fruits;

/**
 * Basic Fruit objects
 */
abstract class Fruit
{
	/**
	 * Contains biteable method
	 * 
	 * @var object Biteable
	 */
	public $biteable;

	/**
	 * Check if a fruit is biteable 
	 * 
	 * @return string
	 */
	public function biteable()
	{
		return $this->biteable->tryToBite();
	}
}

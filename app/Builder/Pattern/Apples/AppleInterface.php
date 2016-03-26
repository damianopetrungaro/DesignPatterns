<?php

namespace App\Builder\Pattern\Apples;

/**
 * Interface for Apple objects
 */
interface AppleInterface
{
	/**
	 * Set apple's taste
	 * 
	 * @param string $taste Apple's taste
	 */
	public function setTaste($taste);
	
	/**
	 * Set apple's origin
	 * 
	 * @param string $origin Apple's origin
	 */
	public function setOrigin($origin);
	
	/**
	 * Set apple's color
	 * 
	 * @param string $color Apple's color
	 */
	public function setColor($color);
}
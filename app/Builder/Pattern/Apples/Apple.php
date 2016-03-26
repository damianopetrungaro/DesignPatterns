<?php

namespace App\Builder\Pattern\Apples;

use App\Builder\Pattern\Apples\AppleInterface;

/**
 * Generic apple object
 */
class Apple implements AppleInterface
{
	/**
	 * Apple's taste
	 * 
	 * @var string
	 */
	private $taste;

	/**
	 * Apple's origin
	 * 
	 * @var string
	 */
	private $origin;

	/**
	 * Apple's color
	 * 
	 * @var string
	 */
	private $color;

	/**
	 * Set apple's taste
	 * 
	 * @param string $taste Apple's taste
	 */
	public function setTaste($taste)
	{
		$this->taste = $taste;
	}

	/**
	 * Set apple's origin
	 * 
	 * @param string $origin Apple's origin
	 */
	public function setOrigin($origin)
	{
		$this->origin = $origin;
	}

	/**
	 * Set apple's color
	 * 
	 * @param string $color Apple's color
	 */
	public function setColor($color)
	{
		$this->color = $color;
	}
}
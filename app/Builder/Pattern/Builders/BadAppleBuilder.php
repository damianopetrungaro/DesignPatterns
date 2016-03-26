<?php

namespace App\Builder\Pattern\Builders;

use App\Builder\Pattern\Apples\Apple;

class BadAppleBuilder implements AppleBuilder
{
	/**
	 * Contains Apple object
	 * 
	 * @var object Apple object
	 */
	private $apple;

	/**
	 * Create a new Apple object
	 */
	public function __construct()
	{
		$this->apple = new Apple();
	}

	/**
	 * Define the apple's taste
	 * 
	 * @return void
	 */
	public function buildTaste()
	{
		$this->apple->setTaste("Bad");
	}

	/**
	 * Define the apple's origin
	 * 
	 * @return void
	 */
	public function buildOrigin()
	{
		$this->apple->setOrigin("France");
	}

	/**
	 * Define the apple's color
	 * 
	 * @return void
	 */
	public function buildColor()
	{
		$this->apple->setColor("Green");
	}

	/**
	 * Return the built Apple
	 * 
	 * @return Apple
	 */
	public function getApple()
	{
		return $this->apple;
	}
}
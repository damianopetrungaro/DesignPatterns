<?php

namespace App\Builder\Pattern\Builders;

/**
 * Class to handle building of apples
 */
class AppleDirector
{
	/**
	 * Contains AppleBuilder object
	 * 
	 * @var Object AppleBuilder object
	 */
	private $appleBuilder;

	/**
	 * Create a new AppleBuilder object
	 * 
	 * @param Object AppleBuilder object
	 */
	public function __construct(AppleBuilder $appleBuilder)
	{
		$this->appleBuilder = $appleBuilder;
	}

	/**
	 * Return the built Apple object
	 * 
	 * @return object Apple object
	 */
	public function getApple()
	{
		return $this->appleBuilder->getApple();
	}

	/**
	 * Create a new Apple object
	 * 
	 * @return void
	 */
	public function makeApple()
	{
		$this->appleBuilder->buildTaste();
		$this->appleBuilder->buildOrigin();
		$this->appleBuilder->buildColor();
	}
}
<?php

namespace App\Builder\Pattern\Builders;

/**
 * Interface for Apple builders
 */
interface AppleBuilder
{
	/**
	 * Define the apple's taste
	 * 
	 * @return void
	 */
	public function buildTaste();
	
	/**
	 * Define the apple's origin
	 * 
	 * @return void
	 */
	public function buildOrigin();
	
	/**
	 * Define the apple's color
	 * 
	 * @return void
	 */
	public function buildColor();
		
	/**
	 * Return the built Apple
	 * 
	 * @return Apple
	 */
	public function getApple();
}
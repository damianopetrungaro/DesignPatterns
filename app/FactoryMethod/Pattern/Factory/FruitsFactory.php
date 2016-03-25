<?php

namespace App\FactoryMethod\Pattern\Factory;

/**
 * Factory for fruit objects
 */
class FruitsFactory
{
	/**
	 * Build an object from a string
	 * 
	 * @param  string $fruit Name of object to init
	 * 
	 * @return object Fruit Object
	 */
    public static function build($fruit)
    {
        $class = "App\FactoryMethod\Pattern\Fruits\\".$fruit."Fruit";
    	
    	return new $class();
    }
}
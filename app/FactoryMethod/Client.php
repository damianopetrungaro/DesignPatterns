<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Pattern\FruitsFactory;

/**
 * Simulate client action
 */
class Client
{
	/**
	 * Init two object from a factory.
	 * Then stamp two strings.
	 * 
	 * @return void
	 */
    public function __construct()
    {
       $banana = FruitsFactory::build("Banana");
       echo $banana->method();

       $apple = FruitsFactory::build("Apple");
       echo $apple->method();
    }
}

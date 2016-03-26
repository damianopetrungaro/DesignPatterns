<?php

namespace App\FactoryMethod\Pattern\Fruits;

use App\FactoryMethod\Pattern\Fruits\FruitsInterface as Fruits;

/**
 * Banana Fruit object
 */
class BananaFruit implements Fruits
{
	/**
	 * Sample method for implement the FruitsInterface.
	 * Simply stamp a string
	 * 
	 * @return string
	 */
    public function method()
    {
        return 'I am an Banana!<br>';
    }
}
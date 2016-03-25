<?php

namespace App\FactoryMethod\Pattern\Factory;

class FruitsFactory
{
    public static function build($fruit)
    {
        $class = "App\FactoryMethod\Pattern\Fruits\\".$fruit."Fruit";
    	
    	return new $class();
    }
}
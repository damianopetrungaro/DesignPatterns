<?php

namespace FactoryMethod\Pattern\Factory;

use FactoryMethod\Pattern\Fruits\AppleFruit;

class FruitsFactory extends CreatorAbstract
{
    public function factoryMethod(Fruits $fruit)
    {
        return $fruit;
    }
}
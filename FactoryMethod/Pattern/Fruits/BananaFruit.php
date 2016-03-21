<?php

namespace FactoryMethod\Pattern\Fruits;

use FactoryMethod\Pattern\Fruits;

class BananaFruit implements Fruits
{
    public function method()
    {
        return 'I am an Banana!';
    }
}
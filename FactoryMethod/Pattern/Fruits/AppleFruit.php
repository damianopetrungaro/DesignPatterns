<?php

namespace FactoryMethod\Pattern\Fruits;

use FactoryMethod\Pattern\Fruits;

class AppleFruit implements Fruits
{
    public function method()
    {
        return 'I am an Apple!';
    }
}
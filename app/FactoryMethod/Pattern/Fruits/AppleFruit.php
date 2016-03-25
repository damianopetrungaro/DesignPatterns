<?php

namespace App\FactoryMethod\Pattern\Fruits;

use App\FactoryMethod\Pattern\Fruits\FruitsInterface as Fruits;

class AppleFruit implements Fruits
{
    public function method()
    {
        return 'I am an Apple!<br>';
    }
}
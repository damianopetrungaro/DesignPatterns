<?php

namespace App\FactoryMethod\Pattern\Fruits;

use App\FactoryMethod\Pattern\Fruits\FruitsInterface as Fruits;

class BananaFruit implements Fruits
{
    public function method()
    {
        return 'I am an Banana!<br>';
    }
}
<?php

namespace App\FactoryMethod;


use App\FactoryMethod\Pattern\Factory\FruitsFactory;

class Client
{
    public function __construct()
    {
       $banana = FruitsFactory::build("Banana");
       echo $banana->method();

       $apple = FruitsFactory::build("Apple");
       echo $apple->method();
    }
}

<?php

namespace FactoryMethod\Client;

use FactoryMethod\Pattern\Factory\FruitsFactory;
use FactoryMethod\Pattern\Fruits\AppleFruit;
use FactoryMethod\Pattern\Fruits\BananaFruit;

class ClientFactoryMethod
{
    public $apple;

    public $banana;

    public function __construct()
    {
        $fruitsFactory = new FruitsFactory();
        $this->apple =  $fruitsFactory->startFactory(new AppleFruit());
        $this->banana = $fruitsFactory->startFactory(new BananaFruit());
    }

    public function getFruits()
    {
        echo $this->apple->method();
        echo $this->banana->method();
    }
}
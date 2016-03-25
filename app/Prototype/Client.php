<?php

namespace App\Prototype;

use App\Prototype\Pattern\Banana;

/**
 * Simulate client action
 */
class Client
{
    /**
     * Contains Fruit object
     * 
     * @var Object Fruit object
     */
    public $fruit;

    /**
     * Init an object from a class.
     * Then clone it and stamp two strings.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->fruit = new Banana();

        $apple = clone $this->fruit;
        $apple->name = "apple";
        $apple->taste = "bad";

        echo $this->fruit->getInfo();
        echo $apple->getInfo();
    }
}
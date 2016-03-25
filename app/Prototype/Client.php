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
     * Then colne it and stamp two strings.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->fruit = new Banana();

        $kiwi = clone $this->fruit;
        $kiwi->name = "Kiwi";
        $kiwi->taste = "bad";

        echo $this->fruit->getInfo();
        echo $kiwi->getInfo();
    }
}
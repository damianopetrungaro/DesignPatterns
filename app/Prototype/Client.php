<?php

namespace App\Prototype;

use App\Prototype\Pattern\Banana;

class Client
{
    public $fruits;

    public function __construct()
    {
        $this->fruits = new Banana();

        $kiwi = clone $this->fruits;
        $kiwi->name = "Kiwi";
        $kiwi->taste = "bad";

        echo $this->fruits->getInfo();
        echo $kiwi->getInfo();
    }
}
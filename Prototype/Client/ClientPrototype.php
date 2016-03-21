<?php

namespace Prototype\Client;

use Prototype\Pattern\Banana;

class ClientPrototype
{
    public $fruits;

    public function __construct()
    {
        $this->fruits = new Banana();
    }

    public function action()
    {
        $kiwi = clone $this->fruits;
        $kiwi->name = "Kiwi";
        $kiwi->taste = "bad";

        echo $this->fruits->getInfo();
        echo $kiwi->getInfo();
    }
}
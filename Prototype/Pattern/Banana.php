<?php

namespace Prototype\Pattern;

use PrototypeAbstract;

class Banana extends PrototypeAbstract
{
    public $name;

    public $taste;

    public function __construct()
    {
        $this->name = "Banana";
        $this->taste = "good";
    }

    public function __clone() {}
}
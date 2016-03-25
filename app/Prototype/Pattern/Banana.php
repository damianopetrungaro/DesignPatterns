<?php

namespace App\Prototype\Pattern;

use App\Prototype\Pattern\PrototypeAbstract;

class Banana extends PrototypeAbstract
{
    public function __construct()
    {
        $this->name = "Banana";
        $this->taste = "good";
    }

    public function __clone() {}
}
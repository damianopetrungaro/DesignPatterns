<?php

namespace Prototype\Pattern;

abstract class PrototypeAbstract
{
    public $name;

    public $taste;

    public function getInfo()
    {
        return 'The fuit: '.$this->name.' has a '.$this->taste.' taste!';
    }

    abstract public function __clone();
}
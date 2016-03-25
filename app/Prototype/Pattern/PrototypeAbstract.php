<?php

namespace App\Prototype\Pattern;

/**
 * Abstract class for Fruit objects
 */
abstract class PrototypeAbstract
{
    /**
     * Contains the fruit name information
     * 
     * @var string Fruit's name
     */
    public $name;

    /**
     * Contains the fruit taste information
     * 
     * @var string Fruit's taste
     */
    public $taste;

    /**
     * Return a string with a sentences with fruit infromation
     * 
     * @return string Fruit's infromation
     */
    public function getInfo()
    {
        return 'The fuit: '.$this->name.' has a '.$this->taste.' taste!<br>';
    }

    /**
     * Special method for clone the object
     * 
     * @return void
     */
    abstract public function __clone();
}
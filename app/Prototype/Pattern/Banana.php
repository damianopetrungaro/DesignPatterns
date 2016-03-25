<?php

namespace App\Prototype\Pattern;

use App\Prototype\Pattern\PrototypeAbstract;

/**
 * Banana Fruit Object
 */
class Banana extends PrototypeAbstract
{
	/**
	 * Set fruit information
	 */
    public function __construct()
    {
        $this->name = "Banana";
        $this->taste = "good";
    }

    /**
     * Special method for clone the object
     * 
     * @return void
     */
    public function __clone() {}
}
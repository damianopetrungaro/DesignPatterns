<?php

namespace App\Strategy;

use App\Strategy\Pattern\Fruits\Coconut;
use App\Strategy\Pattern\Fruits\Banana;

/**
 * Simulate client action
 */
class Client
{
	/**
	 * Retrive information from objectes by strategy pattern.
	 * 
     * @return void
	 */
    public function __construct()
    {
     	$coconut = new Coconut();
     	$banana = new Banana();

     	echo "The coconut says: ".$coconut->biteable();
		echo "<br>The banana says: ".$banana->biteable();
    }
}

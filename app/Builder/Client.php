<?php

namespace App\Builder;

use App\Builder\Pattern\Builders\GoodAppleBuilder;
use App\Builder\Pattern\Builders\BadAppleBuilder;
use App\Builder\Pattern\Builders\AppleDirector;

/**
 * Simulate client action
 */
class Client
{
	/**
	 * Init two object from a builder.
	 * Then show the information.
	 * 
	 * @return void
	 */
    public function __construct()
    {
       $goodAppleBuilder = new GoodAppleBuilder();
       $badAppleBuilder = new BadAppleBuilder();

       $goodAppleDirector = new AppleDirector($goodAppleBuilder);
       $badAppleDirector = new AppleDirector($badAppleBuilder);

       $goodAppleDirector->makeApple();
       $badAppleDirector->makeApple();

       $goodApple = $goodAppleDirector->getApple();
       $badApple = $badAppleDirector->getApple();

       var_dump($goodApple, $badApple);
    }
}

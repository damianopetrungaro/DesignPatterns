<?php

namespace App\Singleton;

use App\Singleton\Pattern\Singleton;

/**
 * Simulate client action
 */
class Client
{
    /**
     * Use a singleton multiple times.
     * 
     * @return void
     */
    public function __construct()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();
        $third = Singleton::getInstance();

        var_dump($first, $second, $third);
    }
}
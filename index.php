<?php

require 'vendor/autoload.php';

use App\FactoryMethod\Client as Factory;
use App\Prototype\Client as Prototype;
use App\Singleton\Client as Singleton;


new Factory();


new Prototype();


new Singleton();
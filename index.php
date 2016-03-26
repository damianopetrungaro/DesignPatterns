<?php

require 'vendor/autoload.php';

use App\FactoryMethod\Client as Factory;
use App\Prototype\Client as Prototype;
use App\Singleton\Client as Singleton;
use App\Builder\Client as Builder;

echo "Factory Pattern: <br>";
new Factory();

echo "<br><br>Prototype Pattern: <br>";
new Prototype();

echo "<br><br>Singleton Pattern: <br>";
new Singleton();

echo "<br><br>Builder Pattern: <br>";
new Builder();

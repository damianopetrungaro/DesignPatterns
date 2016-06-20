<?php

require 'vendor/autoload.php';

use App\FactoryMethod\Client as Factory;
use App\Decorator\Client as Decorator;
use App\Prototype\Client as Prototype;
use App\Singleton\Client as Singleton;
use App\Strategy\Client as Strategy;
use App\Builder\Client as Builder;

echo "<h1>Creational design patterns</h1>";

	echo "<h3>Factory Method Pattern:</h3>";
	new Factory();


	echo "<h3>Prototype Pattern:</h3>";
	new Prototype();


	echo "<h3>Singleton Pattern:</h3>";
	new Singleton();


	echo "<h3>Builder Pattern:</h3>";
	new Builder();



echo "<h1>Behavioral design patterns</h1>";

	echo "<h3>Strategy Pattern:</h3>";
	new Strategy();


echo "<h1>Structural design patterns</h1>";

	echo "<h3>Decorator Pattern:</h3>";
	new Decorator();
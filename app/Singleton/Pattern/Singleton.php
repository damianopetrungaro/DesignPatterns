<?php

namespace App\Singleton\Pattern;


/**
 * Singleton class
 */
class Singleton
{
   /**
    * Contains the singleton instance
    * 
    * @var mixed [null|Object]
    */
   private static $instance = null;

   /**
    * Declare private constructor to prevent creating a new instance of the Singleton
    * from a parent class, extending the singleton
    */
   private function __construct()
   {
      // Do stuff...
   }

   /**
    * Declare private constructor to prevent creating a new instance of the Singleton
    * from a parent class, extending the singleton
    * 
    * @return void
    */
   private function __clone(){}

   /**
    * Declare private constructor to prevent creating a new instance of the Singleton
    * from a parent class, extending the singleton
    *
    * @return void
    */
   private function __wakeup(){}
   
   /**
    * Instance once the object.
    * Then return the same object anytime the class is required
    * 
    * @return Object
    */
   public static function getInstance()
   {
      if(self::$instance == null) {
         
         self::$instance = new Singleton();
      }

      return self::$instance;
   }
}

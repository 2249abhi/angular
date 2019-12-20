<?php
/*
 A static class in PHP is a type of class which is instantiated only once in a program. 
 It must contain a static member (variable) or a static member function (method) or both. 
 The variables and methods are accessed without the creation of an object, 
 using the scope resolution operator(::)
*/

class StaticHello {
  static protected $sProperty = 'static';
  static public function sayHello()
  {
    return 'Hello, I am ' . self::$sProperty."</br>";
  }
}

class InstancedHello {
  protected $sProperty;
  public function __construct($name)
  {
    $this->sProperty = $name;
  }
  public function sayHello()
  {
    echo 'Hello, I am ' . $this->sProperty."</br>";
  }
}

echo StaticHello::sayHello();
// outputs "Hello, I am static"

$oInstance1 = new InstancedHello('Rob');
$oInstance2 = new InstancedHello('Fbableus');
$oInstance1->sayHello();
// outputs "Hello, I am Rob"
$oInstance2->sayHello();
// outputs "Hello, I am Fbableus"

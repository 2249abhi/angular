<?php

//The instanced class may have many instances, the static one has only one "instance".
//Note that instanced classes may have static properties and methods shared by all instances and accessible by the :: operator
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
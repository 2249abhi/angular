<?php
/*
Laravel traits are a group of functions that you include within another class. 
A trait is like an abstract class.
*/
trait  custom
{
     public function hello()
     {
          echo "hello";
     }
}

trait custom2
{
       public function hello()
       {
            echo "hello2";
       }
}

class inheritsCustom
{
        use custom, custom2
        {
              custom2::hello insteadof custom;
        }
}

$obj = new inheritsCustom();
$obj->hello();
?>

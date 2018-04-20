 <?php

 // $number = 3;
 // $fact   = 1;
 // for($k=1;$k<=$number;$k++)    
 //       {
 //          $fact =  $fact*$k;
 //       }

 //fact by recursion
 function factorial($number) {
        if ($number == 0) return 1;
        return $number * factorial($number - 1);
    }

    //print factorial(6);

 echo "Factorial of $number is ". factorial(3);
 
 
?> 

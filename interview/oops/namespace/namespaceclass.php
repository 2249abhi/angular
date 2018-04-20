<?php
/*namespace My_Namespace;


class My_Class {
	  public static function my_method () {
	  		return __function__;
	  }
}*/


namespace abcd\efgh\ijkl
{

	const MYCONST = 'App\Lib1\MYCONST';

	function MyFunction() {
		return __FUNCTION__;
	}

	class MyClass {
		static function WhoAmI() {
			return __METHOD__;
		}
	}
}
?>
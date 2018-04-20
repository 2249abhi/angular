<?php

//polymorphism->ability to take more than one form

class Shap
{
	public function draw(){

		echo "</br>this is a draw";
	}
}

class Circle extends Shap
{

	public function draw()
	{
		echo "This is a Circle";
	}
}

class Rectangle extends shap
{
	 public function draw()
	 {
	 	echo "</br>This is a Rectangle";
	 }
}

class Triangle extends shap
{
	public function draw()
	{
		echo "</br>This is Triangle";
	}
}

$val = array(3);

$val[0] = new Circle();
$val[1] = new Rectangle();
$val[2] = new Triangle();
$val[3] = new Shap();

for($i=0;$i<=3;$i++)
{
	$val[$i]->draw();
}

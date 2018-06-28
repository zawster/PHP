<?php 
	//   create simple function
	function simpleFunction()
	{
		echo "Hello World";
	}

	simpleFunction();

	//   function with parameters

	function myFunction($name)
	{
		echo "Hello $name<br>";
	}

	//  with default parameter
	function myFunction1($name = 'Default parameter')  //  default parameter
	{
		echo "Hello $name<br>";
	}
	myFunction('Hamza');
	myFunction('Ahsan');
	myFunction1();

	// Return value

	function addNumber($num1 , $num2)
	{
		return $num1 + $num2;
	}
	echo addNumber(2,5);

	// By Reference

	$myNum = 10;

	function addFive($num)
	{
		$num +=5;
	}

	function addTen(&$num)
	{
		$num +=10;
	}

	addFive($myNum);
	echo "Value : $myNum <br>";

	addTen($myNum);
	echo "Value : $myNum <br>";
	
 ?>
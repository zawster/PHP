<?php 

	$num = 3;

	if ($num >12) {
		echo "True";
	}
	elseif ($num<12) {
		echo "Less then 12";
	}
	else{
		echo "False";
	}

	// Nested If

	if ($num >=4) {
		if($num <=10){
			echo "greater then 4 and less than 10";
		}
		else			
			echo "greater then 4 but not less than 10";
	}

	//  Logical operators 

	if($num ==4 && $num <10)
	{
		echo "Its working";
	}
	else {
		echo "Not Working";
	}

	// OR ||

	if($num ==5 || $num <11)
	{
		echo "Also working";
	}
	else {
		echo "Also Not Working";
	}

	// XOR   #  one should true but not both true

	if($num ==4 XOR $num <10)
	{
		echo "XOR  working";
	}

	# Switch

	$color = 'blue';

	switch ($color) 
	{
		case 'red':
			echo "Your color is red";
			break;
		case 'green':
			echo "Your color is green";
			break;
		case 'blue':
			echo "Your color is blue";
			break;
		case 'Pink':
			echo "Your color is Pink";
			break;
		
		default:
			echo "Your color is something else";
	}
	

 ?>
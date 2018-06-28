<?php 
	// echo "Hello World";
	// print("Hello World!")
	//	indexed  Arrys

	// $people  = array("Ali","Hamza","Asad");
	// $ids = [12,23,34];
	$people[3]='New element';
	$people[]='also new';

	echo count($people); // number of values
	print_r($ids); // print whole array
	var_dump($people); // print data type of each element of array

	echo $people[0];

	//     Associative Array
	$peoples = array('Key1' => 12,'key2'=> 24 );
	$ids = [22 => 'value' , 23 => 'valu2' , 21 => 'value3'];

	echo $peoples['key1'];
	$peoples['insert'] = 21;
	echo $peoples['insert'];

	//    Multi_Dimensional Arrays
	$cars  = array(
		//  (car ,  stock  , sold)
		array('Honda',20,10),
		array('Toyota',30,20),
		array('Ford',23,15),
		array('XLI',21,13)
	);

	echo $cars[1][0];
 ?>
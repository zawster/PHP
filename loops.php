<?php 
	# LOOPS  - Execute code set number of times

	/*
		for
		while
		do while 
		foreach
	*/
	#  FOR LOOP

	for ($i=0; $i < 10; $i++) { 
		# code...
		echo 'Number = '.$i;
		echo '<br>';  // ==  endl
	}

	# WHILE LOOP

	$j=0;
	while ( j<= 10) {
		# code...
		echo $j;
		echo '<br>';
		$j++;
	}

	# DO  WHILE

	$k=0;
	do{
		echo $k;
		echo '<br>';
		$k++; 
	}
	while($k <12);

	#  FOR_EACH   LOOOP  for arrays

	$people1 = array('Ali' , 'Mudasser' , 'Hamza' , 'Asad');

	foreach ($people1 as $person ) {
		# code...
		echo  $person;
		echo '<br>';
	}

	$people2 = array('Ali' => 'Ali@gmail.com' , 'Mudasser' => 'Mudaser12@gmail.com', 'Hamza' => 'Hamza2356@gmail.com' , 'Asad' => 'Asad12378@gmail.com');

	foreach ($people2 as $person => $email) {
		# code...
		echo  $person.' : '.$email;
		echo '<br>';
	}
 ?>
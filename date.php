<?php 
	echo date('d');		// Day
	echo date('m');		// Month
	echo date('Y');		// Year
	echo date('l');		// Day of the week

	echo date('d/m/Y');  //  (15/06/2018)
	echo date('d-m-y');

	# Time

	echo date('h'); 	// Hours
	echo date('i');		// Minuts
	echo date('s');		// Seconds
	echo date('a');		// AM or PM

	# Set Time Zone
	date_default_timezone_set('Pakistan/Karachi');

	echo date('h:i:sa');	

	$timeStamp = mktime(12,60,60,31,12,1997);
	echo $timeStamp;
	echo date('m/d/y h:i:sa' , $timeStamp);	

	$timeStamp2 = strtotime('7:00pm July 31 2018');
	$timeStamp3 = strtotime('tomorrow');
	$timeStamp4 = strtotime('next Sunday');
	$timeStamp5 = strtotime('+2 Days');
	$timeStamp5 = strtotime('+2 Month');

	echo $timeStamp2;
	echo $timeStamp3;
	echo $timeStamp4;
	echo $timeStamp5;
	
	echo date('m/d/y h:i:sa',$timeStamp2);

 ?>
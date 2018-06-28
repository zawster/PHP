<?php

	$log true;
/*
	if ($log) {
		echo 'You are logged in';
	}
	else{
		echo 'You are NOT logged in';
	}
*/
	# ternary operator
	//echo ($log) ? 'You are logged in' : 'You are NOT logged in';   

	$isRegistered = ($log == true) ? true : false;
	echo $isRegistered;

	#  Nested Ternery Operator
	$age = 20;
	$score = 15;

	echo 'Your score is: '.($score>10 ? ($age>10 ? 'Average':'Exceptional'):($age>10 ? 'Horrible':'Average'));

 ?>

 <div>	
 	<?php if ($loggedin) { ?>
 		<h1>Welcome User</h1>
 	<?php } else { ?>
 		<h1>Welcome Guest</h1>
 	<?php } ?>
 </div>

 <div>	
 	<?php if ($loggedin): ?>
 		<h1>Welcome User</h1>
 	<?php  else : ?>
 		<h1>Welcome Guest</h1>
 	<?php endif; ?>
 </div>
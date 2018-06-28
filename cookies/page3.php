<?php 
	$user = ['name'=>'John' , 'email'=>'test@test.com' , 'age'=>21];

	$user=serialize($user);

	setcookie('user',$user ,time()+(86400 * 30));

	$user = unserialize($user);
	
	echo $user['name'];
	// print_r($user);
?>fdre1
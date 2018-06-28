<?php
	// Set Cookie 
	setcookie('username','Frank',time()+(86400 * 30));//set Cookie for a Day

	#  Delete Cookie
 	//setcookie('username','Frank',time()-3600);// unset cookie
 	if (count(@_COOKIE)>0) {
 		echo 'There are '.count($_COOKIE).' are saved';
 	}
 	else{
 		echo 'There are no cookie is saved';
 	}

 	if (isset($_COOKIE['username'])) {
 		echo 'User '. $_COOKIE['username'] . ' is set';
 	}
 	else{
 		echo 'User is not set';
 	}
 ?>
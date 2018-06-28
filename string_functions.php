	<?php  
	#  Common String Functions in php

	# substr()   //  return a portion of string

	echo substr('Hello',2,4);

	#  strlen()  // find the length of string
	$out = strlen('hello World');
	echo $out;

	# strpos()  // find position of the first occurence of sub string 

	$out = strpos('Hello World','o');
	echo $out;

	#strrpos()   //// find position of the last occurence of sub string 
	$out = strpos('Hello World','o');
	echo $out;

	# trim()  // strips whitespace

	$text = 'Hello World          ';
	var_dump($text);

	$trimmed = trim($text);
	var_dump($trimmed);  //   var_dump()  clculate whitespaces

	# strtoupper   // makes everything uppercase
	$output = strtoupper("hello world");
	echo $output;

	# strtolower   // makes everything lowercase
	$output = strtolower("hello world");
	echo $output;

	# ucwords()   // Capitilize every word
	$out = ucwords('hello wordwrap');
	echo $out;

	# str_replace();
	# Replace all occurences of a search string with a replacement

	$text = "Hello World";
	$replace = str_replace('World', 'Everyone', $text);  //str_replace(search, replace, subject)
	echo $replace;

	#  is_string()   // check if string
	$var= 123;
	$out = is_string($var);
	echo $out;

	####

	$values = array(true,false,true,false,'abc',123,'123','',' ',0,'0',12.3,'12.3');
	foreach ($values as $val) {
		if(is_string($val))
		{
			echo "{$val} is a string <br>";
		}
	}

	# gzcompress()   // compress a string

	$string = "Lorem is the best ifx_textasvarchar";
	$out = gzcompress($string);
	echo $out;
?>






































<?php 
	$path = '/dar1/dar2/myfile.php';
	$file='file1.txt';
	# Return filename
	//echo basename($path);

	# Return filename without extention
	//echo basename($path,'.php');

	# Return the  dir name from path
	//echo dirname($path);

	# Check if file exists
	// echo file_exists($file);

	# Get abs path
	// echo realpath($file);

	# Check to see if file
	// echo is_file('test');

	# Check if file is writeable
	// echo is_writable($file);

	# Check if file is readable
	// echo is_readable($file);

	# Get file size
	// echo filesize($file);

	# Create a directory
	//mkdir('testing');

	# Delete a directory
	// rmdir('testing');

	# copy file
	// echo copy('file1.txt', 'file2.txt');

	# Rename a file
	// rename('file2.txt', 'myfile.txt');

	# Delete File
	// unlink('myfile.txt');

	# Write from file to string
	// echo file_get_contents($file);

	# Write string to file
	// echo file_put_contents($file, 'Goodby World');

	# append data
	// $current = file_get_contents($file);

	// $current .=' Goodbye World';
	// file_put_contents($file, $current);

	# Open File for Reading
	$handle = fopen($file,'r');
	$data = fread($handle, filesize($file));
	echo $data;

	# Open File for Writing
	$handle = fopen('file2.txt','w');
	$txt = "Hello new file 1 \n";
	fwrite($handle, $txt);

	$txt = "Hello new file 2 \n";
	fwrite($handle, $txt);
	fclose($handle);
 ?>
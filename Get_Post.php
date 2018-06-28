<?php 
# GET
	if (isset($_GET['name'])) 
	{
		//print_r($_GET);
		$name = htmlentities($_GET['name']);
		//echo $name;
	}
#  POST
	if (isset($_POST['name'])) 
	{
		print_r($_POST);
		$name = htmlentities($_POST['name']);
		//echo $name;
	}
# REQUEST
	if (isset($_REQUEST['name'])) 
	{
		print_r($_REQUEST);
		$name = htmlentities($_REQUEST['name']);
		//echo $name;
	}
	
	echo $_SERVER['QUERY_STRING'];
 ?>

<!DOCTYPE html>
<head>
	<title>Get & Post</title>
</head>
<body>
	<form method="POST" action="Get_Post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="Email" name="email">
		</div>
		<div>
			<input type="submit" value="Submit">
		</div>
	</form>

	<ul>
		<li>
			<a href="Get_Post.php?name=Ahsan">Ahsan</a>
		</li>
		<li>
			<a href="Get_Post.php?name=Ali">Ali</a>
		</li>
	</ul>
	<h1> <?php echo "{$name}'s Profile"; ?> </h1>

</body>
</html>
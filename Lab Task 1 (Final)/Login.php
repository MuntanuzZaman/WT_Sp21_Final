<?php
	$uname="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		if($uname == "mzj007" && $pass == "Iamjurat007")
		{
			session_start();
			$_SESSION["user"]=$uname;
			header("Location: Dashboard.php");
		}
	}
	
	
?>

<html>
	<head></head>
	<body>
		<form method="post">
			<input type="text" name="uname" placeholder="Username"><br>
			<input type="password" name="pass" placeholder="Password"><br>
			<input type="submit" value="login"><br>
	</body>
</html>
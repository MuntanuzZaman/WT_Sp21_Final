<?php
	session_start();
?>
<html>
	<head></head>
	<body>
		<h1>Hello <?php echo $_SESSION["user"]; ?></h1>
		<?php 
		
		session_destroy();
		?>
		
	</body>
</html>
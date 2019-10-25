<?php 

session_start();

if(!isset($_SESSION['pseudoC'])){
	header('location:pageInscription.html');
} 

echo "Bonjour " . $_SESSION['pseudoC'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form name="logout" method=POST action="logout.php">
	<input type="submit" name="submit" value='logout'></input>
	</form>
</body>
</html>
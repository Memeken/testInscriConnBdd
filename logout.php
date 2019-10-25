<?php
session_start();
session_destroy();
echo "deconnecté!";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form name="logout" method=POST action="pageInscription.html">
	<input type="submit" name="submit" value='Adieu'></input>
	</form>
	
</body>
</html>
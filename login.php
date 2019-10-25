<?php include 'pageInscription.html' ?>
<?php
session_start(); 

if(isset($_POST['connect'])){
	$pseudoC = $_POST['pseudoC']; // on crée la variable pour faire l'action: nom est égal à ce qu on va renseigner dans le bouton 'nom'
	$passwdC = $_POST['passwordC'];

try{ 
	$bdd= new PDO("mysql:host=localhost;dbname=INSCRIPTION","damery","damery"); 
	$select = $bdd->query("SELECT * FROM MEMBRES WHERE pseudo='$pseudoC' && password ='$passwdC'", PDO::FETCH_ASSOC);
	$say = $select->rowCount();
	if ($say > 0){
		$_SESSION['session']=true;
		$_SESSION['pseudoC']=$pseudoC;
		$_SESSION['passwordC']=$passwdC;

		header('location:reserve.php');
}else{
	echo "c'est mort!";
}
}
catch(PDOException $error){
	echo "erreur" . $error-> getMessages(); // message test pour voir si la bdd est connectee (tu le marques tel quel)
	}
}

?>
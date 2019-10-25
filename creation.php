<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Création OK</title>
</head>
<body>

<?php 
try{ // pour essayer ="try" la connexion à la base de donnees
	$bdd= new PDO("mysql:host=localhost;dbname=INSCRIPTION","damery","damery"); // pour connecter ton fichier .PHP a ta base de donnees, on nomme une variable($bdd) puis = new PDO(c'est une fonction qui approvisionne la BDD), on ouvre les parenthese, on tape mysql (c'est le logiciel qu'on utilise pour la bdd, puis :host c'est où est situé la page internet, =localhost ta page internet, puis ;dbname= "nom de ta base de donnees", puis "damery=login", puis "damery= mot de passe") le login et le mot de passe sont ceux que tu a donné à ton PHPmyAdmin.
	}
catch(PDOException $error){
	echo "erreur" . $error-> getMessages(); // message test pour voir si la bdd est connectee (tu le marques tel quel)
	}

$pseudo = $_POST['pseudo']; // on crée la variable pour faire l'action: nom est égal à ce qu on va renseigner dans le bouton 'nom'

$passwd = $_POST['password'];// 'nom', 'prenom', 'age' ceux sont les 'name' de nos input ci dessous

$email = $_POST['email'];

$insert = $bdd->query("INSERT INTO MEMBRES VALUES ('$pseudo' , '$email' , '$passwd')"); // pour creer des donnees dans ta bdd a chaque connexion, cela rajoute des ligne dans ton tableau de ta base de données,  la fonction signifie textuellement: variable insert est égale à la variable BDD dans laquelle je vais faire une requête( je te demande d'inserrer dans ma table "coordonnées" de ma bDD, les éléments suivants $nom, $prenom, $age)
// dans la fonction "query" ce qu'il y a entre () ceus sont des commande mySql.
echo "Welcome";
?>
<a href=?Connexion>Connecte toi!</a>
<?php 
	if (isset($_GET['Connexion'])) {
			header('location:pageInscription.html');
		}
 ?>
	
</body>
</html>
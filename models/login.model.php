<?php 
function getlogin($speudo,$password)
{
	global $errors;
	$bdd=getbdd();
	$req = $bdd->prepare('SELECT id,speudo, password FROM users WHERE (speudo = :speudo OR email = :speudo) AND active="1"'); 
		$req->execute(['speudo'=>$speudo]);
		$userHasbeenFound = $req->rowCount();
		//echo $userHasbeenFound; exit;
		$utilisateur=$req->fetch(PDO::FETCH_OBJ);//on récupére sous form d'objet
		if($userHasbeenFound AND password_verify($password, $utilisateur->password)){
			$_SESSION['id_user']=$utilisateur->id;
			$_SESSION['speudo']=$utilisateur->speudo;
			header('location: ?page=profil');
			exit;
		}
		else{
			$errors[]="Erreur de login ou de mot de passe.<br>";
		}
		
}

 ?>
<?php 


function modif_mdp($speudo,$last_password,$new_password)
{
$bdd=getbdd();
$req = $bdd->prepare('SELECT * FROM users WHERE speudo = :speudo');
$req ->execute(['speudo'=>$speudo]);
$utilisateur = $req->fetch(PDO::FETCH_OBJ);//on récupére sous form d'objet
if(password_verify($last_password, $utilisateur->password)){
	$req = $bdd->prepare('UPDATE users SET password = :password WHERE speudo = :speudo');
	$req->execute(['password'=>password_hash($new_password,PASSWORD_DEFAULT),'speudo'=>$speudo]);
	return true;
}
else{
	return false;
}
} ?>

<?php 
function forget_mdp($email)
{
	global $errors;
	//echo $email;
	$bdd=getbdd();
	$req = $bdd->prepare('SELECT * FROM users WHERE email = :email'); 
		$req->execute(['email'=>$email]);
		$userHasbeenFound = $req->rowCount();
		//echo $userHasbeenFound;
		if($userHasbeenFound){
			//echo $userHasbeenFound; exit;
			$utilisateur=$req->fetch(PDO::FETCH_OBJ);//on récupére sous form d'objet
			forget_mdp_email($utilisateur->name,$utilisateur->speudo,$utilisateur->email);
			//header('location: ?page=login');
			//exit;
		}
		else{
			$errors[]="Le compte n'existe pas.<br>";
		}
		
}

 ?>
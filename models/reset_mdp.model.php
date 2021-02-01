<?php 
function verif_token($speudo,$token)
{
	global $errors;
	//echo $email;
	$bdd=getbdd();
	$req = $bdd->prepare('SELECT * FROM users WHERE speudo = :speudo'); 
		$req->execute(['speudo'=>$speudo]);
		$userHasbeenFound = $req->rowCount();
		//echo $userHasbeenFound;
		if($userHasbeenFound){
			//echo $userHasbeenFound; exit;
			$utilisateur=$req->fetch(PDO::FETCH_OBJ);//on récupére sous form d'objet
			$token_verif=sha1($utilisateur->name.$utilisateur->speudo.$utilisateur->email);
			if($token==$token_verif){
				return true;

			}
			else{
				return false;
			}
			//header('location: ?page=login');
			//exit;
		}
		else{
			return false;
		}
		
}
function change_mpd($speudo,$password){
	//echo "test1";
	$bdd=getbdd();
	$req = $bdd->prepare('UPDATE users SET password = :password WHERE speudo = :speudo'); 
	$req->execute(['password'=>password_hash($password,PASSWORD_DEFAULT) ,'speudo'=>$speudo]);


}

 ?>
<?php 
function active_compte($speudo,$token){
		// echo 'test1';
		$bdd=getbdd();
		$req=$bdd->prepare('SELECT * FROM users WHERE speudo = ?');
		$req->execute([$speudo]);// ou execute(array($peudo))
		if($req->rowCount()){
			// on récup le résultat sous forme d'objet
			$utilisateur=$req->fetch(PDO::FETCH_OBJ);
			/*echo '<pre>';
			print_r($utilisateur->name);
			echo '</pre>';*/
			$token_verif=sha1($utilisateur->name.$utilisateur->speudo.$utilisateur->email);
			if ($token==$token_verif) {
				# code...
				//echo "Le token est valide<br>";
				$req=$bdd->prepare('UPDATE users SET active = "1" WHERE speudo = ?');
				$req->execute([$speudo]);
				message_flash("Compte activé avec succes");
				//echo '<a href="?page=login">Retour à la page de connection</a>';
				header('location: ?page=login');
				exit;
			}
			else{
				message_flash("Lien d'activation incorrect","danger");
				//echo "Le token n'est valide<br>";
				//echo '<a href="?page=login">Retour à la page de connection</a>';
				header('location: ?page=login');
				exit;

			}
			

			

		}
	}
 ?>

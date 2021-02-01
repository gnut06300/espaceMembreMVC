<?php require_once('models/modif_mdp.model.php');

if (isset($_POST['modif-mdp'])) {
		if (not_empty(['last_password','new_password','new_confirm_password'])) {
		$_POST=array_map('htmlspecialchars',$_POST);
		$_POST=array_map('trim',$_POST);
		extract($_POST,EXTR_SKIP);
		if(mb_strlen($new_password)<8){
			$errors[]='Votre mot de passe doit contenir au minimum 8 caractéres <br>';

			}
		else if($new_password != $new_confirm_password){
			$errors[]='Vos deux passwords sont différents <br>';//.$new_password." ".$new_confirm_password;
			}
		if(count($errors)==0){
			if(modif_mdp($_SESSION['speudo'],$last_password,$new_password)){
				message_flash('Mot de passe modifié');
				header('location:?page=profil');
				exit;
			}
			else{
				$errors[]='Ancien mot de passe incorrecte<br>';
			}
		}
	}
}

require_once('views/modif_mdp.view.php');

?>
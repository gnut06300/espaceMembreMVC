<?php require_once('models/reset_mdp.model.php');

if(!isset($_GET['speudo']) AND !isset($_GET['token'])){
	header('location:index.php');
	exit;
} 
else{
	//echo "test1";
	# code...
	if(verif_token($_GET['speudo'],$_GET['token'])){
		//echo "<br>test2";
		if (isset($_POST['reset_mdp'])) {
		//echo "<br>test3";
	if (not_empty(['password','confirm_password'])) {
		# code..
		$_POST=array_map('htmlspecialchars',$_POST);
		$_POST=array_map('trim',$_POST);
		extract($_POST,EXTR_SKIP);
		//echo $password."+".$confirm_password;
		//exit;
		if(mb_strlen($password)<8){
			$errors[]='Votre mot de passe doit contenir au minimum 8 caractéres <br>';

			}
		else if($password != $confirm_password){
			$errors[]='Vos deux passwords sont différents <br>';
			}
	if (count($errors)==0) {
		change_mpd($_GET['speudo'],$password);
		message_flash("Mot de passe modifié");
		header('location:?page=login');
		exit;
		# code...
	}
	}
}
	}
	else{
		message_flash("Le lien de réinisialisation incorrecte",'danger');
		header('location:index.php');
		exit;
	}

}



require_once('views/reset_mdp.view.php');

?>
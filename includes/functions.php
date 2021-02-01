<?php 
//fonction d'unicité
function is_already_in_use($field,$value,$table){
	$bdd=getbdd();
	$req = $bdd->prepare('SELECT id FROM '.$table.' WHERE '.$field.' =?'); 
	$req->execute(array($value));
	$count = $req->rowCount();
	return $count;

}
function message_flash($message,$type='success'){
	$_SESSION['message_flash']='<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">'
  .$message.
  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}
function activ_mail($name,$speudo,$email){
	$token=sha1($name.$speudo.$email);
	//@ permet de masquer le message d'erreur
	if(@mail($email,'Activation du compte','Activation du compte, veuillez cliquer sur : '.WEBSITE_URL.'?page=activation&speudo='.$speudo.'&token='.$token)){
		message_flash("Un mail d'activation vous a été envoyé","info");
	}
	else{
		message_flash("Probléme d'envoi du mail d'activation","danger");
	}
}
function forget_mdp_email($name,$speudo,$email){
	$token=sha1($name.$speudo.$email);
	//@ permet de masquer le message d'erreur
	if(@mail($email,'Réinitialisation du mot de passe','Réinitialisation du mot de passe, veuillez cliquer sur : '.WEBSITE_URL.'?page=reset_mdp&speudo='.$speudo.'&token='.$token)){
		message_flash("Un mail d'activation vous a été envoyé","info");
	}
	else{
		message_flash("Probléme d'envoi du mail de réinitialisation","danger");
	}
}
//test si les champs ne sont pas vide
function not_empty($tableau) {
	foreach ($tableau as $champ) {
		if(empty($_POST[$champ]) || trim($_POST[$champ])=="" ){
			return false;
		# code.
		}

	}
	return true;
}
?>
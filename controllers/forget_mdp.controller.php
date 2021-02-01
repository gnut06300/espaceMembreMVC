<?php require_once('models/forget_mdp.model.php');

if (isset($_POST['forget_mdp'])) {
	# code...
	if (not_empty(['email'])) {
		# code..
		$_POST=array_map('htmlspecialchars',$_POST);
		$_POST=array_map('trim',$_POST);
		extract($_POST,EXTR_SKIP);
		forget_mdp($email);
	}
}

require_once('views/forget_mdp.view.php');

?>
<?php require_once('models/login.model.php');

if (isset($_POST['login'])) {
	# code...
	if (not_empty(['speudo','password'])) {
		# code..
		$_POST=array_map('htmlspecialchars',$_POST);
		$_POST=array_map('trim',$_POST);
		extract($_POST,EXTR_SKIP);
		getlogin($speudo,$password);
	}
}

require_once('views/login.view.php');

?>
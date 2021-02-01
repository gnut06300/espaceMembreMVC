<?php 
if(!isset($_SESSION['id_user']) && !isset($_SESSION['speudo'])){
	header('location: ?page=login');
	exit;
}

 ?>
<?php  require_once 'views/profil.view.php' ;  ?>
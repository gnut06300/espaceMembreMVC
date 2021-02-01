<?php 
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';
require_once 'config/constants.php';
$errors=[];//initialisation du tableau erreurs
//mail('gnut@gnut.eu','test','message');
//page=accueil
if(!empty($_GET['page']) && is_file('controllers/'.$_GET['page'].'.controller.php')){
	//controllers/accueil.php
	require_once 'controllers/'.$_GET['page'].'.controller.php';

}
else{
	require_once 'controllers/accueil.controller.php';
}

 ?>
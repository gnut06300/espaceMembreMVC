<?php
function getbdd(){
		try 
	{ 
	 // On se connecte à MySQL 
	if($_SERVER['HTTP_HOST']=='votredomaine.com'){
    	$mysqli = new mysqli('cheminDeLaBase', 'utilisateur', 'password', 'nomDeLaBase');
   	}
	else{
		$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', ''); 
	}
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// active les erreurs PDO 
	$bdd -> exec("set names utf8"); // pour passer à l'UTF 8 

	} 
	catch(Exception $e) 
	{ 
	        die('Erreur : '.$e->getMessage());// En cas d'erreur, on affiche un message et on arrête tout 
	} 
	return $bdd;
}

?>
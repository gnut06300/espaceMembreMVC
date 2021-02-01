<?php 
function regiter_user($name,$speudo,$email,$password)
{
	$bdd=getbdd();
	$req = $bdd->prepare('INSERT INTO users(name, speudo, email, password) VALUES(:name,:speudo, :email, :password)'); 
		$req->execute(array('name'=>$name,  
		'speudo'=>$speudo, 
		'email'=>$email,
		'password'=>$password
		));
}

 ?>
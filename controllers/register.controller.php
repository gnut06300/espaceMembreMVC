<?php  require_once 'models/register.model.php'; ?>
<?php// print_r($_POST) ; exit;?>
<?php 
if(isset($_POST['register'])){
	//echo "test1";exit;
	if(not_empty(['name','speudo','email','password','confirm_password'])){
		//echo "test"; exit;
		$_POST=array_map('htmlspecialchars',$_POST);
		$_POST=array_map('trim',$_POST);
		extract($_POST,EXTR_SKIP);
		if(mb_strlen($name)>30){
			$errors[]='Le nom est trop long <br>';
			}
		if(mb_strlen($speudo)<4 or mb_strlen($speudo) > 30){
			$errors[]='Le speudo doit avoir au minimum 4 caractéres et un maximum de 30 caractéres<br>';
			}
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors[]='Votre Email n\'est pas au bon format<br>';

			}
		if(mb_strlen($password)<8){
			$errors[]='Votre mot de passe doit contenir au minimum 8 caractéres <br>';

			}
		else if($password != $confirm_password){
			$errors[]='Vos deux passwords sont différents <br>';
			}
			if(is_already_in_use('speudo',$speudo,'users')){
			//echo 'le speudo existe';exit;
			$errors[]='Ce pseudo est déjà pris <br>';

			}
			if(is_already_in_use('email',$email,'users')){
			$errors[]='Ce mail est déjà utilisé<br>';
			}
		if(count($errors)==0){//si je n'ai pas erreurs alors j'enregistre
			$password=password_hash($password,PASSWORD_DEFAULT);
			//echo "textfin";exit;
			activ_mail($name,$speudo,$email);
			regiter_user($name,$speudo,$email,$password);
			}
		
		}
		else{
			$errors[]='Veuillez remplir tous les champs';
		}
} ?>
<?php require_once 'views/register.view.php';  ?>
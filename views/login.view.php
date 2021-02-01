<?php ob_start() ?>
<?php require_once '_partials/_errors.php'; ?>
<h1>Connexion</h1>
<form method="POST" class="card card-body">
  <div class="form-group"> 
    <input type="text" name="speudo" class="form-control" placeholder="Votre Pseudo ou votre Email">
   </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Votre mot de passe">
  </div>
    <button type="submit" name="login" class="btn btn-primary">Se connecter</button>
    <br>
    <a href="?page=forget_mdp">Mot de passe oublié</a>
</form>



<?php $contenu = ob_get_clean()  ?>


<?php require_once 'views/gabarit.php'; ?>
<?php ob_start() ?>
<?php require_once '_partials/_errors.php'; ?>
<h1>Réinitialisation du mot de passe</h1>
<form method="POST" class="card card-body">
  <div class="form-group"> 
    <input type="password" name="password" class="form-control" placeholder="Votre nouveau mot de passe">
   </div>
  <div class="form-group">
    <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Confirmé votre nouveau mot de passe">
  </div>
    <button type="input" name="reset_mdp" class="btn btn-primary">Réinitialisation du mot de passe</button>
    
</form>



<?php $contenu = ob_get_clean()  ?>


<?php require_once 'views/gabarit.php'; ?>
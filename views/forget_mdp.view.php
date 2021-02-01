<?php ob_start() ?>
<?php require_once '_partials/_errors.php'; ?>
<h1>Mot de passe oublié</h1>
<form method="POST" class="card card-body">
  <div class="form-group"> 
    <input type="text" name="email" class="form-control" placeholder="Votre Email">
   </div>
  	<button type="submit" name="forget_mdp" class="btn btn-primary">M'envoyer un mail pour réinitialiser mon mot de passe</button>
  </form>



<?php $contenu = ob_get_clean()  ?>


<?php require_once 'views/gabarit.php'; ?>
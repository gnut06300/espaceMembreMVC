<?php ob_start() ?>
<?php require_once '_partials/_errors.php'; ?>
<h1>Changer de mot de passe</h1>
<form method="POST" class="card card-body">
   <div class="form-group">
    <input type="password" class="form-control" name="last_password" id="exampleInputPassword1" placeholder="Votre ancien mot de passe">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="new_password" id="exampleInputPassword1" placeholder="Votre nouveau mot de passe">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="new_confirm_password" id="exampleInputPassword1" placeholder="Confirmation de votre nouveau mot de passe">
  </div>
  <button type="submit" name="modif-mdp" class="btn btn-primary">Modification du mot de passe</button>
</form>

<?php $contenu = ob_get_clean()  ?>


<?php require_once 'views/gabarit.php'; ?>
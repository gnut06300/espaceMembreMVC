<?php ob_start() ?>
<?php require_once '_partials/_errors.php'; ?>
<h1>Inscription</h1>
<form method="POST" class="card card-body">
  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Votre nom">
    </div>
  <div class="form-group"> 
    <input type="text" name="speudo" class="form-control" placeholder="Votre Pseudo">
   </div>
   <div class="form-group">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Votre Email">
  	</div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Votre mot de passe">
  </div>
  <div class="form-group">
      <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Confirmer votre mot de passe">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Inscription</button>
</form>

<?php $contenu = ob_get_clean()  ?>


<?php require_once 'views/gabarit.php'; ?>
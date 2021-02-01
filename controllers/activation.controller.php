<?php require_once('models/activation.model.php'); 

active_compte(htmlspecialchars($_GET['speudo']),htmlspecialchars($_GET['token']));

?>
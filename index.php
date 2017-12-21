<?php
session_start();

$user = new Utilisateur();

class Utilisateur
{
$_SESSION['prenom'] = 'John';
$_SESSION['nom'] = 'Doe';
$_SESSION['email'] = 'john.doe@domain.com';
$_SESSION['password'] = 'mdpsupersecure';



}

 ?>
<h1>Accueil du site : Login</h1>
<form class="" action="index.html" method="post">
  <legend>
<label for="">Prenom</label>
<input type="text" name="" value="" placeholder="John">
<label for="">Nom</label>
<input type="text" name="" value="" placeholder="Doe">
<label for="">Email</label>
<input type="email" name="" value="" placeholder="john.doe@domain.com">
<label for="">Password</label>
<input type="password" name="" value="" placeholder="mdpsupersecure">
  </legend>
</form>

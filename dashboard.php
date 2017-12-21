<?php
session_start();

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {


$_SESSION['nom'] = $_POST['name'];
$_SESSION['prenom'] = $_POST['firstname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
}

 ?>

<p class="hidden">
  Voici la page de traitement, cliquez ici pour accéder au résultat.
<a href="map.php">Accéder aux résultats</a>
</p>

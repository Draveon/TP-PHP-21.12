<?php


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {

	//echo 'Votre nom est '.$_POST['nom'].' et votre fonction est '.$_POST['fonction'];

$_SESSION['nom'] = $_POST['name'];
$_SESSION['prenom'] = $_POST['firstname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
}
 ?>


         <a class="hidden" href="map.php">Accéder aux résultats</a>

<?php
session_start();
require "session.php";


 ?>
 
 Alors comme ça, Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
 Ton adresse mail est "<?php echo $_SESSION['email'] ?>" et

     <p>
        <a href="index.php">retour au formulaire</a>
    </p>

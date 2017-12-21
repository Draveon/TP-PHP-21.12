<style media="screen">
  .hidden
  {
    display: none;
  }
</style>

<?php
session_start();
require "dashboard.php";


 ?>

 Alors comme ça, Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
 Ton adresse mail est "<?php echo $_SESSION['email'] ?>" et "<?php echo $_SESSION['password'] ?>" est ton mot de passe super sécurisé ! Wow :O

     <p>
        <a href="index.php">retour au formulaire</a>
    </p>

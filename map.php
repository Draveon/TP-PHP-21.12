<?php
session_start();
require "session.php";


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TERRE</title>
  </head>
  <body>
     Alors comme ça, Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
     Ton adresse mail est "<?php echo $_SESSION['email'] ?>" et ton mot de passe est "<?php echo $_SESSION['password']; ?>" ? Super sécurisé Woaw ! =O<br />
  </body>
</html>

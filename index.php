<style media="screen">
  .hidden
  {
    display: none;
  }
</style>

<?php

require "session.php";

session_start();
$user = new Utilisateur();

class Utilisateur
{
  private $nom = "Doe";
  private $prenom = "John";
  private $email ="john.doe@domain.com";
  private $password ="mdpsupersecure";


}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <h1>LOGIN</h1>

     <form class="" action="session.php" method="post">
      <legend>
     <label for="">Prenom</label>
     <input type="text" name="name" value="" placeholder="John">
     <label for="">Nom</label>
     <input type="text" name="firstname" value="" placeholder="Doe">
     <label for="">Email</label>
     <input type="email" name="email" value="" placeholder="john.doe@domain.com">
     <label for="">Password</label>
     <input type="password" name="password" value="" placeholder="mdpsupersecure">
     <input type="submit" name="" value="envoi">
      </legend>
     </form>

   </body>
 </html>

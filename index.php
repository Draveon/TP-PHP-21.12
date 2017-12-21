<style media="screen">
  .hidden
  {
    display: none;
  }
</style>

<?php
session_start();

require "dashboard.php";

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

     <form class="" action="dashboard.php" method="post">
      <legend>
     <label for="">Prenom</label>
     <input type="text" name="name" value="" placeholder="John" required>
     <label for="">Nom</label>
     <input type="text" name="firstname" value="" placeholder="Doe" required>
     <label for="">Email</label>
     <input type="email" name="email" value="" placeholder="john.doe@domain.com" required>
     <label for="">Password</label>
     <input type="password" name="password" value="" placeholder="mdpsupersecure" required>
     <input type="submit" name="" value="envoi">
      </legend>
     </form>

   </body>
 </html>

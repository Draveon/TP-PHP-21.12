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

     <p>
        <a href="map.php">Lien vers mapage.php</a>
    </p>
   </body>
 </html>

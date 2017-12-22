<?php
class Utilisateur
{
  private $nom;
  private $prenom;
  private $email;
  private $password;

        /**
        * @return string
        */
       public function getPrenom():String {
           return $this->prenom;
       }
       /**
        * @param string $Prenom
        */
       public function setPrenom(String $prenom) {
           $this->prenom = $prenom;
       }
       /**
        * @return string
        */
       public function getNom():String {
           return $this->nom;
       }
       /**
        * @param string $Nom
        */
       public function setNom(String nom) {
           $this->?$nom = $nom;
       }
       /**
        * @return string
        */
       public function getEmail():String {
           return $this->email;
       }
       /**
        * @param string $email
        */
       public function setEmail(String $email) {
           $this->email = $email;
       }
       /**
        * @return string
        */
       public function getPassword():String {
           return $this->password;
       }
       /**
        * @param string $password
        */
       public function setPassword(String $password) {
           $this->password = $password;
       }
   }
?>
 ?>

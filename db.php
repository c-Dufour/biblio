<?php

class db_connect{

  private $table = "bibli";
  public function connect(){
    $bdd = new PDO('mysql:host=localhost;dbname=tpcombat;charset=utf8', 'root', '');
    return $bdd;
  }
  public function getAll(){
    $bdd = $this->connect();
    $reponse = $bdd->query('SELECT * FROM bibli');
    return $reponse;
  }


}



 ?>

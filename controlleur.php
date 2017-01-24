<?php
require('db.php');

class livre_controlleur{

  public function delete($id){
    $pdo=db_connect::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM bibli  WHERE id = $id";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
  }
  public function create($name){
    $pdo = db_connect::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO bibli (nom) values(?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($name));
  }
  public function redirect(){
    header("Location: index.php");
  }

}

 ?>

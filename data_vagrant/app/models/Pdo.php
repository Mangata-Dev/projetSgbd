<?php
function getConnexion(){
  try {
    $user ="root";
    $mdp = "root";
    $database = "app_bdd";
    $url = "localhost";
    $dbh = new PDO("mysql:host=$url;dbname=$database",$user,$mdp);
    return $dbh ;
  }
  catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
}
?>

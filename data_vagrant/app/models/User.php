<?php
function getUser( $mailUser , $mdpUser){
  try {
    $user ="root";
    $mdp = "root";
    $database = "app_bdd";
    $url = "localhost";
    $dbh = new PDO("mysql:host=$url;dbname=$database",$user,$mdp);
    $request = $dbh->prepare("SELECT * FROM user
                              WHERE mailUser=:user AND mdpUser=:mdp ;
    ");
    $request->bindParam(':user', $mailUser, PDO::PARAM_STR);
    $request->bindParam(':mdp', $mdpUser, PDO::PARAM_STR);
    $request->execute();
    $result = $request->fetchAll();
    if(count($result)===1){
      return $result[0];
    }else{
      return false ;
    }
    $dbh = null;
  }
  catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
}

?>

<?php

include 'Pdo.php';

function getAllProducts(){
  try {
    $dbh = mysqli_connect("localhost","root","root","app_bdd");
    $request = mysqli_query($dbh , "SELECT  idProduits,nameProduits,descriptions,dateProduits,imageProduits,price FROM Produits ;");
    $rows = array();

    while ($row =mysqli_fetch_array($request)) {
      $row = array_merge( $row ,array(6 => "<button type='button' class='btn btn-warning updateBtn' name='$row[0]' data-toggle='modal' data-target='#modalUpdateProduct'  >Update</button>")  );
      $row = array_merge( $row ,array(7 => "<button type='button' class='btn btn-danger deleteBtn' name='$row[0]' >Delete</button>")  );
      $rows[] = $row ;
      // code...
    }
    $dbh = null;
    return $rows;
  }
  catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
}
function createProduct($nameProducts,$descriptProducts,$priceProducts){
  try {
    $dbh = getConnexion();
    $date = new DateTime();
    $timestamp = $date->getTimestamp();
    $request = $dbh->prepare("INSERT INTO Produits(nameProduits,descriptions,dateProduits,price) VALUES(:name,:descript,CURRENT_TIME(),:price);
    ");
    $request->bindParam(':name', $nameProducts, PDO::PARAM_STR);
    $request->bindParam(':descript', $descriptProducts, PDO::PARAM_STR);
    $request->bindParam(':price', $priceProducts, PDO::PARAM_STR);
    $request->execute();
    $dbh = null;
  }
  catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
}
function deleteProduct($idProducts){
  try {
    $dbh = getConnexion();
    $request = $dbh->prepare("DELETE FROM Produits WHERE idProduits = :id ;");
    $request->bindParam(':id', $idProducts, PDO::PARAM_INT);
    $request->execute();
    $dbh = null;
  }
  catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
}
function getProductbyId($idProducts){
  try {
    $dbh = getConnexion();
    $request = $dbh->prepare("SELECT * FROM Produits WHERE idProduits = :id ;");
    $request->bindParam(':id', $idProducts, PDO::PARAM_INT);
    $request->execute();
    $result = $request->fetchAll();
    $dbh = null;
    return $result ;
  }
  catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
  }
}
 function updateProductbyId($idProducts,$nameProducts,$descriptProducts,$priceProducts){
   try {
     $dbh = getConnexion();
     $request = $dbh->prepare("UPDATE Produits SET nameProduits = :nameProduct , price= :price , descriptions = :descriptions WHERE idProduits = :id ;");
     $request->bindParam(':id', $idProducts, PDO::PARAM_INT);
     $request->bindParam(':nameProduct', $nameProducts, PDO::PARAM_STR);
     $request->bindParam(':descriptions', $descriptProducts, PDO::PARAM_STR);
     $request->bindParam(':price', $priceProducts, PDO::PARAM_STR);
     $request->execute();
     $dbh = null;
   }
   catch (PDOException $e) {
       print "Erreur !: " . $e->getMessage() . "<br/>";
       die();
   }
 }
 function getTenLastProducts(){
   try {
     $dbh = getConnexion(); 
     $request = $dbh->prepare("SELECT * FROM Produits ORDER BY dateProduits DESC LIMIT 10 ;");
     $request->execute();
     $result = $request->fetchAll();
     $dbh = null;
     return $result ;
   }
   catch (PDOException $e) {
       print "Erreur !: " . $e->getMessage() . "<br/>";
       die();
   }
 }

?>

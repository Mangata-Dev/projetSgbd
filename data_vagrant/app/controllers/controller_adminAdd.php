<?php
  include "../models/Product.php";
  $nameProducts = isset($_POST['nameProduct']) ?  $_POST['nameProduct'] : null ;
  $descriptProducts = isset($_POST['descriptionProduct']) ?  $_POST['descriptionProduct'] : null ;
  $priceProducts = isset($_POST['price']) ?  $_POST['price'] : null ;
  $imgProducts = isset($_FILES) ?  $_FILES : null ;
  $dataArray1 = array("nom" => $nameProducts,"descriptions" => $descriptProducts, "prix" => $priceProducts, "image" => $imgProducts);
  $dataArray2 = array("nom" => $nameProducts,"prix" => $priceProducts);
  $error = false;
  if(isset($_FILES) ){
    foreach ($dataArray2 as $key => $value) {
      if(empty($value)){
        echo json_encode(array("error" => "la valeurs de $key est vide ou null"));
        $error =true ;
      }
    }
    if(!$error){
      $priceProducts = is_numeric($dataArray1["prix"]) ? $dataArray1["prix"]  : false ;
      if($priceProducts===false ){
        echo  json_encode(array("error" => "erreur de format des entrées"));
      }else{
        createProduct($nameProducts,$descriptProducts,$priceProducts);
      }
    }
  }


  //
  // $nameProducts= mysql_real_escape_string($dataArray1["nom"]) ;
  // $descriptProducts= !empty($dataArray1["descriptions"])? mysql_real_escape_string($dataArray1["descriptions"]) : $dataArray1["descriptions"];

  // addProduct($nameProducts,$descriptProducts,$priceProducts,$imgProducts);

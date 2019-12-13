<?php
  include "../models/Product.php";
  $function = isset($_GET['function']) ?  $_GET['function'] : null ;
  $function();

  function getProduct(){
    $idProduct = isset($_POST['idProduct']) ?  $_POST['idProduct'] : null ;
    if(!empty($idProduct) && is_numeric($idProduct)){
      $product = getProductbyId($idProduct);
      echo json_encode($product[0]);
    }else{
      echo json_encode(array("error" => "Une erreur est survenue !"));
    }
  }
  function updateProduct(){
    $nameProducts = isset($_POST['nameProduct']) ?  $_POST['nameProduct'] : null ;
    $idProducts = isset($_POST['idProduct']) ?  $_POST['idProduct'] : null ;
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
        $priceProducts = is_numeric($dataArray1["prix"]) ? $dataArray1["prix"] : false ;
        if($priceProducts===false ){
          echo  json_encode(array("error" => "erreur de format des entrées"));
        }else{
          echo "je suis ici";
          updateProductbyId($idProducts,$nameProducts,$descriptProducts,$priceProducts);
        }
      }
    }
  }

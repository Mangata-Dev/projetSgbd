<?php
  session_start();
  include "../models/User.php";
  $user=  isset($_POST["idUser"]) ? $_POST["idUser"] : "error" ;
  $mdp =  isset($_POST["mdpUser"]) ? $_POST["mdpUser"] : "error" ;
  if($user !== "error" && $mdp !== "error"){
    $userExist = getUser($user,$mdp) ;
    if($userExist!==false){
      $arrayName = array('message' => "connectée" , 'response' => true) ;
      $_SESSION['roleUser']=$userExist["idRole"] ;
      $_SESSION['idUser']=$userExist["idUser"] ;
      echo json_encode($arrayName) ;
    }else{
      $arrayName= array('message' => "Indentifiants invalids" , 'response' => false )  ;
      echo json_encode($arrayName) ;
    }
  }
 ?>

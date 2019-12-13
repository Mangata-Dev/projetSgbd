<?php

session_start();
$role = isset($_SESSION['roleUser']) ?  $_SESSION['roleUser'] : "default";
$page = isset($_GET['page']) ?  $_GET['page'] : "default";
$adminPages = array("admin.php");
$userPages = array('acceuil.php','tenArticles.php');
$publicPages = array('public.php','login.php');
switch ($role) {
  case "1":// 1 corresponds à ADMIN
      $page = $page==="default" ? "admin.php" : $page;
      in_array($page , $adminPages) ? header("Location: views/$page") :  header("Location: views/500.php") ;
    break;
  case '2':// 2 corresponds à USER
      $page = $page==="default" ? "acceuil.php" : $page;
      in_array($page , $userPages) ?  header("Location:views/$page") :  header("Location: views/500.php") ;
    break;
  default://public
      $page = $page==="default" ? "public.php" : $page;
      in_array($page , $publicPages) ?  header("Location:views/$page") :  header("Location: views/500.php") ;
    break;
}
?>

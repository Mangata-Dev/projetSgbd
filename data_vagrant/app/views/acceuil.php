<? session_start( );
  if(!isset($_SESSION['roleUser']) || $_SESSION['roleUser']!=='2'){header('Location:../index.php') ; }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../vendor/Bootstrap/bootstrap.min.css"/>
  </head>
  <?php include 'navUser.php' ?>
  <body>

    <h1> bienvenue sur la page d'admin</h1>
    <p></p>
    <p>Voici les 10 derniers produits en stocks</p>
    <div class="container">
      <div class="container-articles">
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script type="text/javascript" src="../vendor/Bootstrap/bootstrap.min.js"></script>
    <script src="../assets/js/acceuil.js" type="text/javascript"></script>
  </body>
</html>

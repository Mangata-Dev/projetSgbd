<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Shop Me</title>
    <link href="../assets/css/reset.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/login.css" rel="stylesheet">
  </head>

  <body>
  <div class="container_login">
    <form id="loginForm" method="post">
      <input id="log" class="inputStyle" type="text" name="idUser" value="" placeholder="Entrer votre Identifiant">
      <input id="mdp" class="inputStyle" type="password" name="mdpUser" value="" placeholder="Entrer votre mot de passe">
      <a id="mdpLink" href="#">J'ai oublié mon mot de passe oublié</a>
      <button id="btn_cnx" type="submit" name="connecter">Se connecter</button>
      <button id="btn_signup" type="button" name="inscription">Inscription</button>
    </form>
  </div>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/login.js"></script>
  </body>
</html>

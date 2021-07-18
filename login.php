<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Connexion - La boucherie du Village</title>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
  <link href="style/css/signin.css" rel="stylesheet">
  <link href="style/css/style.css" rel="stylesheet">
</head>
<body class="text-center">



<main class="form-signin border shadow-lg bg-white">

<img class="mb-4 img-fluid" src="style/images/LOGO-BOUCHERIE-DU-VILLAGE3.png" alt="" width="180" height="180">

<form action="connexion.php" method="post">
    <h1 class="h3 mb-3">Connexion</h1>
    <div id="message"></div>
    <h3 class="mt-2 fw-normal">Identifiants</h3>
    <div class="mb-3">
        <input type="email" class="form-control" id="email" placeholder="nom@exemple.com">
    </div>
    <h3 class="mt-2 fw-normal">Mot de passe</h3>
    <div class="mb-3">
        <input type="password" class="form-control" id="password" placeholder="Mot de passe">
    </div>
    <button class="w-100 btn btn-lg btn-danger" id="button" type="button">Se connecter</button>
    <a class="w-100 btn btn-lg btn-light text-decoration-none" href="index.html">Retour au site</a>
</form>

</main>
</body>
<script src="js/jquery.js"></script>
<script src="js/login.js"></script>
</html>
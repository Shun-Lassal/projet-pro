<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sidebar/style/style.css">
    <link rel="stylesheet" href="sidebar/style/bootstrap.css">
    <link rel="stylesheet" href="sidebar/style/orange.css">
    <title>Panel Admin - Accueil</title>
</head>
<body>
    <?php
        include("../fonctions/session.php");
    ?>
    <div class="mob">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-gray height100 sidebar">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none dispnone">
            <img src="sidebar/style/LOGO-BOUCHERIE-DU-VILLAGE.png" class="img-fluid dispnone" alt="">
            </a>
            <span class="text-center fs-4">Panel Administrateur</span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto dispnone">
            <li class="nav-item dispnone">
                <a href="accueil.php" class="nav-link text-white active dispnone" aria-current="page">
                Accueil
                </a>
            </li>
            <li>
                <a href="articles.php" class="nav-link text-white dispnone">
                Articles
                </a>
            </li>
            <li>
                <a href="photos.php" class="nav-link text-white dispnone">
                Photos
                </a>
            </li>
            <li>
                <a href="reservations.php" class="nav-link text-white dispnone">
                Réservations
                </a>
            </li>
            </ul>
            <hr>
            <a href="../fonctions/deconnexion.php" class="nav-link text-white dispnone">Retour au site</a>
        </div>

        <div class="container d-flex flex-column justify-content-center">
            <h1 class="text-center m-5 fs-2">Bienvenue sur le panel administrateur</h1>
            <p class="text-center fs-4">Que souhaitez-vous faire ?</p>
            <div class="align-self-center">
                <a class="col m-2" href="articles.php"><button class="btn btn-lg btn-outline-danger">Gérer mes articles</button></a>
                <a class="col m-2" href="photos.php"><button class="btn btn-lg btn-outline-danger">Gérer mes photos</button></a>
                <a class="col m-2" href="reservations.php"><button class="btn btn-lg btn-outline-danger">Gérer mes commandes</button></a>
            </div>

            <div class="text-center mt-5">
                <a href="../fonctions/deconnexion.php"><button class="btn btn-secondary">Retourner au site</button></a>
            </div>
        </div>
    </div>
</body>
</html>
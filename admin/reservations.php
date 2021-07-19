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
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item dispnone">
                <a href="accueil.php" class="nav-link text-white dispnone" aria-current="page">
                Accueil
                </a>
            </li>
            <li>
                <a href="articles.php" class="nav-link text-white">
                Articles
                </a>
            </li>
            <li>
                <a href="photos.php" class="nav-link text-white">
                Photos
                </a>
            </li>
            <li>
                <a href="reservations.php" class="nav-link text-white active">
                Réservations
                </a>
            </li>
            </ul>
            <hr>
            <a href="../fonctions/deconnexion.php" class="nav-link text-white">Retour au site</a>
        </div>
    </div>
    <div class="container d-flex flex-column justify-content-center">
            <h1 class="text-center m-5 fs-2">Les commandes d'aujourd'hui</h1>
            <p class="text-center fs-4">Voici les commandes</p>
            <div class="container border shadow">
                <div class="d-flex text-center">
                    <span class="col-sm">N°</span>
                    <span class="col-sm">Nom</span>
                    <span class="col-sm">E-mail</span>
                    <span class="col-sm">Tel</span>
                    <span class="col-sm">Parts</span>
                    <span class="col-sm">Viande</span>
                    <span class="col-sm">Heure</span>
                    <span class="col-sm">Action</span>
                </div>
                <?php
                    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
                    $sth = $dbh->prepare("SELECT * FROM reservation ");
                    $sth->execute();
                    $result = $sth->fetchAll();

                    foreach ($result as $key => $value) {
                        echo("<form method='post' action='reservations_management.php' class='d-flex fs-6'>");
                        echo("<input class='col m-1 text-center input-group input-group-sm' name='id' value='".$value['id']."' readonly>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='nom' value='".$value['nom']."' readonly>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='mail' value='".$value['mail']."' readonly>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='tel' value='".$value['tel']."' readonly>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='parts' value='".$value['parts']."' readonly>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='food' value='".$value['food']."' readonly>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='heure' value='".$value['heure']."' readonly>");
                        echo("<button class='col m-1 btn btn-sm btn-outline-danger' type='submit' name='supprimer'>Supprimer</button>");
                        echo("</form></br>");
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</head>
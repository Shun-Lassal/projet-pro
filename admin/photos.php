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
    <div class="mob">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-gray height100 sidebar">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none dispnone">
            <img src="sidebar/style/LOGO-BOUCHERIE-DU-VILLAGE.png" class="img-fluid dispnone" alt="">
            </a>
            <span class="text-center fs-4">Panel Administrateur</span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item dispnone">
                <a href="#" class="nav-link text-white dispnone" aria-current="page">
                Accueil
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                Articles
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white active">
                Photos
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                Réservations
                </a>
            </li>
            </ul>
            <hr>
            <a href="" class="nav-link text-white">Retour au site</a>
        </div>
        <div class="container d-flex flex-column justify-content-center">
            <h1 class="text-center m-5 fs-2">Gérer mes photos</h1>
            <p class="text-center fs-4">Ajouter une photo</p>
            <div class="container border shadow">
                <div class="d-flex text-center">
                    <span class="col">N°</span>
                    <span class="col">Titre</span>
                    <span class="col">Photo</span>
                    <span class="col">Action</span>
                </div>
                <form class='d-flex fs-6' method='post' action='photos_management.php'>
                    <span class='col m-1 text-center'>Auto généré</span>
                    <input class='col input-group input-group-sm m-1' type='text' name='titre'>
                    <input class='col m-1 input-group input-group-sm' type='text' name='photo' value='style/images/'>
                    <button class='col m-1 btn btn-sm btn-outline-danger' type='submit' name='ajouter'>Ajouter</button>

                </form>
            </div>
            <p class="text-center fs-4 mt-5">Modifier mes photos existantes</p>
            <div class="container border shadow">
                <div class="d-flex text-center">
                    <span class="col-sm">N°</span>
                    <span class="col-sm">Titre</span>
                    <span class="col-sm">Photo</span>
                    <span class="col-sm">Actions</span>
                    <span class="col-sm"></span>
                </div>
                <?php
                    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
                    $sth = $dbh->prepare("SELECT * FROM photo_accueil ORDER BY id, titre, photo DESC");
                    $sth->execute();
                    $result = $sth->fetchAll();

                    foreach ($result as $key => $value) {
                        echo("<form method='post' action='photos_management.php' class='d-flex fs-6'>");
                        echo("<input class='col m-1 text-center input-group input-group-md' name='id' value='".$value['id']."' readonly>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='titre' value='".$value['titre']."'>");
                        echo("<input class='col m-1 input-group input-group-sm' type='text' name='photo' value='".$value['photo']."'>");
                        echo("<button class='col m-1 btn btn-sm btn-outline-danger' type='submit' name='modifier'>Modifier</button>");
                        echo("<button class='col m-1 btn btn-sm btn-outline-danger' type='submit' name='supprimer'>Supprimer</button>");
                        echo("</form></br>");
                    }
                ?>
            </div>
        </div>
</body>
</head>
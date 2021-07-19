<?php

if (isset($_POST['modifier'])) {

    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $photo = $_POST['photo'];

    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
    $sth = $dbh->prepare("UPDATE `photo_accueil` SET `titre` = '$titre', `photo` = '$photo' WHERE `photo`.`id` = $id");
    $sth->execute();
    header("location: photos.php");

} else if (isset($_POST['supprimer'])) {

    $id = $_POST['id'];

    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
    $sth = $dbh->prepare("DELETE FROM `photo_accueil` WHERE `photo`.`id` = $id");
    $sth->execute();
    header("location: photos.php");

} else if (isset($_POST['ajouter'])) {

    $titre = $_POST['titre'];
    $photo = $_POST['photo'];

    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
    $sth = $dbh->prepare("INSERT INTO `photo_accueil` (`id`, `titre`, `photo`) VALUES ('', '$titre', '$photo')");
    $sth->execute();
    header("location: photos.php");

}


?>
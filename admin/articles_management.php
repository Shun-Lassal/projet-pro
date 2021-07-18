<?php

if (isset($_POST['modifier'])) {

    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $photo = $_POST['photo'];

    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
    $sth = $dbh->prepare("UPDATE `article` SET `titre` = '$titre', `description` = '$description', `photo` = '$photo' WHERE `article`.`id` = $id");
    $sth->execute();
    header("location: articles.php");

} else if (isset($_POST['supprimer'])) {

    $id = $_POST['id'];

    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
    $sth = $dbh->prepare("DELETE FROM `article` WHERE `article`.`id` = $id");
    $sth->execute();
    header("location: articles.php");

} else if (isset($_POST['ajouter'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $description = htmlspecialchars($description);
    $photo = $_POST['photo'];

    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
    $sth = $dbh->prepare("INSERT INTO `article` (`id`, `titre`, `description`, `photo`) VALUES ('', '$titre', '$description', '$photo')");
    $sth->execute();
    header("location: articles.php");

}


?>
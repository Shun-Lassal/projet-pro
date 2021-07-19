<?php

if (isset($_POST['reserv'])) {
    
    $nom = $_POST['form_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $parts = $_POST['parts'];
    $pref = $_POST['pref'];
    $time = $_POST['time-picker'];
    $time = date("d.m.y ".$time);

    if (!isset($nom) || !isset($email) || !isset($phone) || !isset($parts) || !isset($pref) || !isset($time)) {
        echo("<script>alert('Merci de remplir toute les cases du formulaire');</script>");
        header("location: ../index.php");
    } else {
        $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
        $sth = $dbh->prepare("INSERT INTO `reservation` (`id`, `nom`, `mail`, `tel`, `parts`, `food`, `heure`) VALUES (NULL, '$nom', '$email', '$phone', '$parts', '$pref', '$time');");
        $sth->execute();
        echo("<script>alert('Merci de remplir toute les cases du formulaire');</script>");
        header("location: ../index.php");
        
    }

} else if (isset($_POST['supprimer'])) {
    
    $id = $_POST['id'];
    $dbh = new PDO('mysql:host=localhost;dbname=laboucherieduvillage', 'root', '');
    $sth = $dbh->prepare("DELETE FROM `reservation` WHERE `reservation`.`id` = $id");
    $sth->execute();
    header("location: reservations.php");

}

















?>
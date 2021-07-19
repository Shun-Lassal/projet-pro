<?php
session_start();

if ($_SESSION['email'] == "shun.lassal@laplateforme.io") {

} else {
    header("location: ../login.php");
}



?>
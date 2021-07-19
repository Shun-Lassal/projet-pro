<?php

session_start();
$_SESSION['email'] = null;
$_SESSION['password'] = null;
session_destroy();

header("location: ../index.php");

?>
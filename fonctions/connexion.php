<?php
session_start();
// CONNEXION BDD
try
{
    $conn = new PDO("mysql:host=localhost;dbname=laboucherieduvillage", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch
(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
///////////////////// Fonction ////////////////

if(isset($_POST))
{
    if(empty($_POST['email']) || empty($_POST['password']))
    {
        exit();
    }
    $pswd = $_POST['password'];
    $stmt = $conn->prepare("SELECT email , password FROM user WHERE email = :email ;");
    $stmt->execute(['email' => $_POST['email']]);
    if($stmt->rowCount() == 0){
        echo"<p style='color:red;'>Email non valide !</p>";
    }
    else{
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($pswd,$user['password']))
        {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $user['password'];
            exit('<p style="display: none;">success</p>');
        }
        if($user['password']!=$_POST['password'])
        {
            echo"<p style='color:red;'>Mot de passe non valide !</p>";
        }
    }
}

?>
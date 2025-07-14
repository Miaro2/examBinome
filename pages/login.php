<?php
session_start();
require('../inc/connection.php');
require('../inc/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="..assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

        <a href="#"><h1>Login</h1>
        <a href="inscription.php"><h1 style="color: rgb(63, 66, 66);">Sign up</h1></a>

    <form action="traitement_login.php" method="get">
        <span>Email</span> 
        <input type="email" name="mail" id="">
        <span>Mot de passe</span>
        <input type="password" name="mdp" id="">
        <input type="submit" value="Se connecter" class="btn btn-primary">
    </form>
    
</body>
</html>
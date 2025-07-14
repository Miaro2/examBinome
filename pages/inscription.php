<?php
session_start();
// require('../inc/functions.php');

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
    
            <a href="index.php"><h1 style="color: rgb(63, 66, 66);">Login</h1>
            <a href="#"><h1 style="color: rgb(0, 112, 97);">Sign up</h1></a>
        <form action="traitement_signup.php" method="get">
            <div class="test">
                <p>Nom</p>
                <input type="text" name="name" placeholder="Nom" id="input">
                <p>EMail</p>
                <input type="email" name="mail" placeholder = "EMail" id="input">
                <p>Date de naissance</p>
                <input type="date" name="date" id="input">
                <p>Mot de passe</p>
                <input type="password" name="mdp" placeholder="Mot de passe" id="input">
                <p>Genre</p>
                <select name="genre" id="">
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                </select>
                <p>Ville</p>
                <input type="text" name="ville" placeholder="Ville" id="input">
                <br>
                <input type="submit" value="Validez" id="submit">
        </form>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
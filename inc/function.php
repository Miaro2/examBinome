<?php

function connection($mail, $mdp){

    $requete = "SELECT * FROM gestion_emprunt_membre WHERE email = '%s' AND mdp = '%s'";
    $requete = sprintf($requete, $mail, $mdp);

    $resultat = mysqli_query(getdataBase(), $requete);
    $donne = mysqli_fetch_assoc($resultat);

    if ($donne) {
        $_SESSION['nom'] = $donne['Nom'];
        $_SESSION['mail'] = $donne['Email'];
        $_SESSION['ddn'] = $donne['Date_De_Naissance'];
        $_SESSION['IdMembre'] = $donne['IdMembre'];
        header("Location: ../pages/accueil.php");
    } else {
        $_SESSION['error'] = "Erreur de connexion";
        header("Location: ../pages/login.php");
    }
}

function create_compte($nom, $mail, $mdp, $date, $genre, $ville) {
    $checkEmailQuery = "SELECT * FROM gestion_emprunt_membre WHERE email = '%s'";
    $checkEmailQuery = sprintf($checkEmailQuery, $mail);
    $checkEmailResult = mysqli_query(getdataBase(), $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        $_SESSION['deja'] = "Email déjà utilisé";
        header("Location: ../pages/inscription.php");
        exit;
    }

    $insert = "INSERT INTO gestion_emprunt_membre (nom, email, mdp, date_naissance, genre ,ville) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
    $insert = sprintf($insert, $nom, $mail, $mdp, $date, $genre, $ville);

    if (mysqli_query(getdataBase(), $insert)) {
        header("Location: ../pages/login.php");
        exit;
    }

    header("Location: ../pages/inscription.php");
}
?>
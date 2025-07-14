<?php

function connection($mail, $mdp){

    $requete = "SELECT * FROM gestion_emprunt_membre WHERE email = '%s' AND mdp = '%s'";
    $requete = sprintf($requete, $mail, $mdp);

    $resultat = mysqli_query($dataBase, $requete);
    $donne = mysqli_fetch_assoc($resultat);

    if ($donne) {
        $_SESSION['nom'] = $donne['Nom'];
        $_SESSION['mail'] = $donne['Email'];
        $_SESSION['ddn'] = $donne['Date_De_Naissance'];
        $_SESSION['IdMembre'] = $donne['IdMembre'];
        header("Location: ../pages/accueil.php");
    } else {
        $_SESSION['error'] = "Erreur de connexion";
        header("Location: ../pages/index.php");
    }
}
?>
<?php

function connection($mail, $mdp){

    $requete = "SELECT * FROM gestion_emprunt_membre WHERE email = '%s' AND mdp = '%s'";
    $requete = sprintf($requete, $mail, $mdp);

    $resultat = mysqli_query(getdataBase(), $requete);
    $donne = mysqli_fetch_assoc($resultat);

    if ($donne) {
        $_SESSION['nom'] = $donne['nom'];
        $_SESSION['mail'] = $donne['email'];
        $_SESSION['ddn'] = $donne['date_naissance'];
        $_SESSION['IdMembre'] = $donne['id_membre'];
        $_SESSION['genre'] = $donne['genre'];
        $_SESSION['ville'] = $donne['ville'];
        $_SESSION['image'] = $donne['image_profil'] ?? 'default.png';
        header("Location: ../pages/accueil.php");
        exit;
    } else {
        $_SESSION['error'] = "Erreur de connexion";
        header("Location: ../pages/login.php");
        exit;
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

function getObjet($idCategorie = null) {
    $requete = "SELECT * FROM v_objets_emprunt";
    if ($idCategorie) {
        $requete .= " WHERE id_categorie = " . intval($idCategorie);
    }
    $resultat = mysqli_query(getdataBase(), $requete);
    $objets = [];
    while ($donne = mysqli_fetch_assoc($resultat)) {
        $objets[] = $donne;
    }
    return $objets;
}

function getCategories() {
    $requete = "SELECT * FROM gestion_emprunt_categorie_objet";
    $resultat = mysqli_query(getdataBase(), $requete);
    $categories = [];
    while ($donne = mysqli_fetch_assoc($resultat)) {
        $categories[] = $donne;
    }
    return $categories;
}
?>
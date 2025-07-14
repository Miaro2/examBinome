<?php
session_start();
require('../inc/function.php');
require('../inc/connection.php');

$getObjet = getObjet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des objets empruntés</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nom Objet</th>
                <th>Nom Membre</th>
                <th>Date Emprunt</th>
                <th>Date Retour</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getObjet as $objet): ?>
                <?php if (!isset($objet['nom_membre'])) {
                    $objet['nom_membre'] = '-----';
                    $objet['date_emprunt'] = '-----';
                    $objet['date_retour'] = '-----';
                }?>
                <tr>
                    <td><?= $objet['nom_objet'] ?></td>
                    <td><?= $objet['nom_membre'] ?></td>
                    <td><?= $objet['date_emprunt'] ?></td>
                    <td><?= $objet['date_retour'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
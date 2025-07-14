<?php
session_start();
require('../inc/function.php');
require('../inc/connection.php');

$nom = $_SESSION['nom'] ?? 'Visiteur';

$idCategorie = isset($_GET['categorie']) ? intval($_GET['categorie']) : null;
$getObjet = getObjet($idCategorie);

$categories = getCategories();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Emprunte Moi - Liste des objets</title>
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-secondary bg-opacity-10">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Emprunte Moi</a>
        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <span class="nav-link text-light">Bienvenue <?= $nom ?></span>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="container mb-5">
    <h1 class="mb-4 text-center">Liste des objets</h1>

    <section>
      <form method="get" class="row mb-4">
        <div class="col-md-6">
          <select name="categorie" class="form-select">
            <option value="">-- Toutes les catégories --</option>
            <?php foreach ($categories as $cat): ?>
              <option value="<?= $cat['id_categorie'] ?>" <?= ($idCategorie == $cat['id_categorie']) ? 'selected' : '' ?>>
                <?= $cat['nom_categorie'] ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-dark w-100">Filtrer</button>
        </div>
      </form>
    </section>

    <section class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Nom Objet</th>
            <th>Nom Membre</th>
            <th>Date Emprunt</th>
            <th>Date Retour</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($getObjet) > 0): ?>
            <?php foreach ($getObjet as $objet): ?>
              <?php
                if (!isset($objet['nom_membre'])) {
                  $objet['nom_membre'] = '-----';
                  $objet['date_emprunt'] = '-----';
                  $objet['date_retour'] = '-----';
                }
              ?>
              <tr>
                <td><a href="fiche.php?id=<?= $objet['id_objet'] ?>"><?= $objet['nom_objet'] ?></a></td>
                <td><?= $objet['nom_membre'] ?></td>
                <td><?= $objet['date_emprunt'] ?></td>
                <td><?= $objet['date_retour'] ?></td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="4" class="text-center">Aucun objet trouvé.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </section>
  </main>

  <footer class="text-center py-4 bg-dark text-light">
    &copy; <?= date('Y') ?> Emprunte Moi
  </footer>

  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

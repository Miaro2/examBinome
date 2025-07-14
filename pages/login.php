<?php
session_start();
require('../inc/connection.php');
require('../inc/function.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Emprunte Moi - Login</title>
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body class="bg-light">

  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Emprunte Moi</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inscription.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Formulaire centré -->
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
      <h3 class="mb-4 text-center">Connexion</h3>
      <form action="traitement_login.php" method="get">
        <div class="mb-3">
          <label for="mail" class="form-label">Email</label>
          <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="mb-3">
          <label for="mdp" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="mdp" name="mdp" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
      </form>
      <p class="mt-3 text-center">Pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
    </div>
  </div>

  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

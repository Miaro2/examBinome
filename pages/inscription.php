<?php
session_start();
require('../inc/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Emprunte Moi - Sign Up</title>
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-secondary bg-opacity-10">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Emprunte Moi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
      <article class="card shadow p-4 w-100" style="max-width: 500px;">
        <h1 class="mb-4 text-center">Inscription</h1>
        <form action="traitement_signup.php" method="get" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
          </div>
          <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Date de naissance</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>
          <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe" required>
          </div>
          <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" id="genre" name="genre" required>
              <option value="" disabled selected>Choisir...</option>
              <option value="M">Homme</option>
              <option value="F">Femme</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
          </div>
          <button type="submit" class="btn btn-dark w-100">Validez</button>
        </form>
        <p class="mt-3 text-center">
          Déjà un compte ? 
          <a href="index.php" class="link-dark">Connectez-vous</a>
        </p>
      </article>
    </section>
  </main>

  <footer class="text-center py-3">
    <small>&copy; <?= date('Y') ?> Emprunte Moi</small>
  </footer>

  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

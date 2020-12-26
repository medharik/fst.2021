<?php
demarrer_session();
verifier_acces($_SESSION['login'], $_SESSION['passe']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD 1.0</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Liste des produits </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><?= $_SESSION['prenom'] ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">DECONNEXION </a>
        </li>


      </ul>

    </div>
  </div>
</nav>
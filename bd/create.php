<?php
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle ressource</title>
    <?php include_once("_css.php"); ?>
</head>

<body>

    <?php include_once("_menu.php"); ?>
    <div class="container">
        Bienvenue <?= $_SESSION['prenom']; ?>
        <form action="store.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 mx-auto shadow mt-5 rounded">
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input name="libelle" type="text" class="form-control" id="libelle" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input name="prix" type="number" step="0.01" class="form-control" id="prix" placeholder="Prix en DHS" required>
                    </div>
                    <div class="mb-3">
                        <label for="qtestock" class="form-label">Quantité en stock</label>
                        <input type="number" name="qtestock" class="form-control" id="qtestock" required placeholder="0">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary ">Valider</button>
                    </div>


                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
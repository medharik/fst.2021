<?php
include("functions.php");
// 
$id = $_GET['id'];
$produit = find($id);
print_r($produit);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter le produit</title>
    <?php include_once("_css.php"); ?>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Détails du produit : <?= $produit['libelle'] ?> </h2>
        <div class="card" style="width: 18rem;">
            <img src="<?= $produit['chemin'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $produit['libelle'] ?></h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="#" onclick="history.go(-1)" class="btn btn-primary">Précedent</a>
            </div>
        </div>

    </div>

</body>

</html>
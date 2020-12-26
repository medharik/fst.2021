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
        <p>
            Prix : <?= $produit['prix'] ?> <br>
            Quantite : <?= $produit['qtestock'] ?>
        </p>

    </div>

</body>

</html>
<?php
include("functions.php");
$produits = all();
if (isset($_GET['op']) && $_GET['op'] == 'ajout') {
    echo "Ajout OK";
}
// dep(id,nom)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits </title>
    <?php include_once("_css.php") ?>
</head>

<body>
    <?php include("_menu.php") ?>
    <div class="container">
        <h2 class="text-center">Liste des <?= count($produits); ?> produits </h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">prix</th>
                    <th scope="col">qte en stock</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produits as $ligne) { ?>
                    <tr>
                        <th scope="row"><?= $ligne['id'] ?></th>
                        <td><?= $ligne['libelle'] ?></td>
                        <td><?= $ligne['prix'] ?></td>
                        <td><?= $ligne['qtestock'] ?></td>
                        <td><a href="" class="btn btn-primary">C</a>
                            <a href="" class="btn btn-warning">M</a>
                            <a onclick="return confirm('supprimer ?')" href="delete.php?id=<?= $ligne['id'] ?>" class="btn btn-danger">S</a></td>
                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>


</body>

</html>
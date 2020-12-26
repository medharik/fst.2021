<?php
include("functions.php");
demarrer_session();
verifier_acces($_SESSION['login'], $_SESSION['passe']);
$produits = all();
$message = "";
$classe = "d-none";
if (isset($_GET['op']) && $_GET['op'] == 'ajout') {
    $classe = "alert-success";
    $message = "Ajout OK";
}
if (isset($_GET['op']) && $_GET['op'] == 'modif') {
    $message = "Modification  OK";
    $classe = "alert-warning";
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

        <div class="alert <?= $classe ?>"><?= $message ?></div>
        <h2 class="text-center">Liste des <?= count($produits); ?> produits </h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
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
                        <th scope="row"><img width="150" src="<?= $ligne['chemin'] ?>" alt=""></th>
                        <td><?= $ligne['libelle'] ?></td>
                        <td><?= $ligne['prix'] ?></td>
                        <td><?= $ligne['qtestock'] ?></td>
                        <td><a href="show.php?id=<?= $ligne['id'] ?>" class="btn btn-primary">C</a>
                            <a href="edit.php?id=<?= $ligne['id'] ?>    " class="btn btn-warning">M</a>
                            <form action="delete.php" method="post" class="d-inline">
                                <input type="hidden" name="id" value="<?= $ligne['id'] ?>">
                                <button class="btn btn-danger" onclick="return confirm('supprimer ?')">D</button>
                            </form>
                            <a onclick="return confirm('supprimer ?')" href="delete.php?id=<?= $ligne['id'] ?>" class="btn btn-danger">S</a>
                        </td>
                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>


</body>

</html>
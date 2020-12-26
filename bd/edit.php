<?php
// PAR GET (URL) : 
// index.php => liste des ressources 
// show.php?id=1 => consulter une ressource par son id
// create.php => form pour creer une nouvelle ressource
// edit.php>id=1 => form pour modifier une  ressource (par son id)

// PAR POST (FORM) : 
// delete.php=> supprimer une ressource
// store.php => ajouter une ressource dans la bd
// update.php =>  MAJ d'une ressource 

// create=>store
// edit=>update
include('functions.php');
demarrer_session();
verifier_acces($_SESSION['login'], $_SESSION['passe']);
$id = $_GET['id'];
$produit =  find($id);
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
    <?php include_once("_menu.php"); ?> <div class="container">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= $produit['id'] ?>">
            <div class="row">
                <div class="col-md-6 mx-auto shadow mt-5 rounded">
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input value="<?= $produit['libelle'] ?>" name="libelle" type="text" class="form-control" id="libelle" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input value="<?= $produit['prix'] ?>" name="prix" type="number" step="0.01" class="form-control" id="prix" placeholder="Prix en DHS" required>
                    </div>
                    <div class="mb-3">
                        <label for="qtestock" class="form-label">Quantité en stock</label>
                        <input value="<?= $produit['qtestock'] ?>" type="number" name="qtestock" class="form-control" id="qtestock" required placeholder="0">
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
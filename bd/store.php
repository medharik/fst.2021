<?php
// print_r($_POST);

include("functions.php");

//recuperer les data depuis le form ($_POST)
$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$qtestock = $_POST['qtestock'];
//appeler la fct ajouter_produit
ajouter_produit($libelle, $prix, $qtestock);
//afficher de confirmation d'ajout
// echo "produit $libelle est ajouté avec succes";
//redirection vers la index.php (liste des produits)

header("location:index.php?op=ajout");

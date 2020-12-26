<?php
include("functions.php");
// $id=$_POST['id'];
// $libelle=$_POST['libelle'];
extract($_POST);
modifier_produit($id, $libelle, $prix, $qtestock);
header("location:index.php?op=modif");

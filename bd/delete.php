<?php
include("functions.php");
//on recupere l'id depuis le lien (GET) : delete.php?id=1
$id = $_GET['id'];

supprimer_produit($id);
header("location:index.php?op=sup");

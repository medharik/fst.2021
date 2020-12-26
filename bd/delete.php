check.<?php
        include("functions.php");
        //on recupere l'id depuis le lien (GET) : delete.php?id=1
        $id = $_POST['id'];

        supprimer_produit($id);
        header("location:index.php?op=sup");

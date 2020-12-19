<?php
// fonction de connection bd
function connecter_db()
{
    // ERR_MODE : warning_mode , silent_mode , exception_mode

    try {
        $cnx = new PDO("mysql:host=localhost;dbname=db_produit", 'root', '');
        $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur de connexion bd ' . $e->getMessage();
    }
    return $cnx;
}


// fonction d'ajout  d'un record produit

function ajouter_produit(string $libelle, float $prix, int $qtestock = 0)
{
    try {
        //connexion db 
        $cnx = connecter_db();
        //preparer la requete
        $rp = $cnx->prepare("insert into produit(libelle,prix,qtestock) values(?,?,?)"); //protection contre l'injection SQL 

        //exection de la requete dans la cnx 
        $rp->execute([$libelle, $prix, $qtestock]);
    } catch (PDOException $e) {
        echo "Erreur d'ajout de produit dans la bd " . $e->getMessage();
    }
}

// department (id,department_name,adresse)

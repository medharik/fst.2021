<?php
// fonction de connection bd
function connecter_db()
{
    // ERR_MODE : warning_mode , silent_mode , exception_mode

    try {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $cnx = new PDO("mysql:host=localhost;dbname=db_produit", 'root', '', $options);
        // $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $cnx->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erreur de connexion bd ' . $e->getMessage();
    }
    return $cnx;
}


// fonction d'ajout  d'un record produit

function ajouter_produit(string $libelle, float $prix, int $qtestock = 0, $chemin)
{
    try {
        //connexion db 
        $cnx = connecter_db();
        //preparer la requete
        $rp = $cnx->prepare("insert into produit(libelle,prix,qtestock,chemin) values(?,?,?,?)");
        //protection contre l'injection SQL 

        //exection de la requete dans la cnx 
        $rp->execute([$libelle, $prix, $qtestock, $chemin]);
    } catch (PDOException $e) {
        echo "Erreur d'ajout de produit dans la bd " . $e->getMessage();
    }
}

// suppression par id 

function supprimer_produit(int $id)
{
    try {
        //connexion db 
        $cnx = connecter_db();
        //preparer la requete
        $rp = $cnx->prepare("delete from produit where id =?"); //protection contre l'injection SQL 

        //exection de la requete dans la cnx 
        $rp->execute([$id]);
    } catch (PDOException $e) {
        echo "Erreur de suppression du produit dans la bd " . $e->getMessage();
    }
}


//modification 
function modifier_produit(int $id, string $libelle, float $prix, int $qtestock = 0)
{
    try {
        //connexion db 
        $cnx = connecter_db();
        //preparer la requete
        $rp = $cnx->prepare("update produit set libelle =? , prix =? , qtestock=? where id=?"); //protection contre l'injection SQL 

        //exection de la requete dans la cnx 
        $rp->execute([$libelle, $prix, $qtestock, $id]);
    } catch (PDOException $e) {
        echo "Erreur de modification  de produit dans la bd " . $e->getMessage();
    }
}


//liste des produits 
function all()
{
    try {
        //connexion db 
        $cnx = connecter_db();
        //preparer la requete
        $rp = $cnx->prepare("select * from produit order by id desc"); //protection contre l'injection SQL 

        //exection de la requete dans la cnx 
        $rp->execute();
        //extraction fetchAll
        $resultat = $rp->fetchAll(); //liste 
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur de selection  des produits  " . $e->getMessage();
    }
}



//consulter un produit par son id 
function find($id)
{
    try {
        //connexion db 
        $cnx = connecter_db();
        //preparer la requete
        $rp = $cnx->prepare("select * from produit where id=?"); //protection contre l'injection SQL 

        //exection de la requete dans la cnx 
        $rp->execute([$id]);
        //extraction fetchAll
        $resultat = $rp->fetch(); //liste 
        return $resultat;
    } catch (PDOException $e) {
        echo "Erreur de selection  du produit ayant l'id=$id  " . $e->getMessage();
    }
}


//$info: Array ( [name] => 7070.png_860.png [type] => image/png [tmp_name] => C:\Users\HARIK\AppData\Local\Temp\php1B94.tmp [error] => 0 [size] => 240100 ) 
function uploader($infos)
{
    $nom = $infos['name'];

    $tmp = $infos['tmp_name'];
    $infos = pathinfo($nom);
    $ext = $infos['extension'];

    $new_name = md5(time() . $nom . rand(0, 99999)) . '.' . $ext;

    move_uploaded_file($tmp, "images/$new_name");
    return "images/$new_name";
}

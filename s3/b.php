<?php 
if(!isset($_POST['libelle']) || !isset($_POST['prix'])  ){
// die("erreur");
header("location:a.php?e=yes");
}
if(isset($_POST['libelle']) && isset($_POST['prix'])){
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($libelle) && isset($prix)) { ?>
<h3>Le prix du produit   <?php echo $libelle?> est <?=$prix?> DHS</h3>
<?php }?>
<?php if(isset($_GET['lib'])) {?>
    <h3>Le lib est : <?=$GET['lib']?> </h3>

<?php  }  ?>
</body>
</html>
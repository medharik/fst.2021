<?php 

// $prix=$_POST['prix'];
// $qte=$_POST['qte'];
extract($_POST);// creer des variables ayant les memes nom et valeurs des cases du tabelau
// les variables n'existent pas 
var_dump($prix);
if( !isset($prix) || !isset($qte)){
header("location:form.php?e=1");
die();
}else if(empty($prix) || empty($qte)){
    header("location:form.php?e=2");
    die();
 
}else if(!is_numeric($prix) ||  !is_numeric($qte)){
header("location:form.php?e=3");
die();
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
    
<h3 style="text-align:center;color:green"> LE TTC EST : <?=$prix*$qte?>DHS
</h3>

</body>
</html>
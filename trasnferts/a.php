<?php 
$message="";
if(isset($_GET['e']) && $_GET['e']=='yes'){
    $message="Tous les champs sont requis!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METHODES D'ENVOI</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="alert alert-danger <?=empty($message) ? "d-none":"d-block"?>"><?=$message?></div>
<div class="container">
    <!-- form>.form-group*3>(label+input.form-control) -->
    <div class="row">
        <div class="col-6 mx-auto shadow p-2">
        <form action="b.php"  method="post">
        <div class="form-group">
        <label for="libelle">Libellé</label>
            <input type="text" class="form-control" name="libelle" id="libelle" >
        </div>
        <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" name="prix" id="prix"></div>
        <div  class="text-center" >
<button class="btn btn-sm btn-primary col-6 ">valider</button>    
        </div>
    
</form></div>
    
    
    </div>
<hr>
<a href="c.php?lib=hp&id=12" class="btn btn-warning">HP</a>
<a href="c.php?lib=dell&id=10" class="btn btn-warning">DELL</a>    

</div>
</body>
</html>
<?php 
$message="";
$classe="";
extract($_GET);// $e=$_GET['e']
if(  isset($e) ){
    $message="Erreur ";
    if($e==1){
        $message.=" veuillez renseigner les champs prix et qte";
        $classe="alert alert-warning";
    }
    if($e==2){
        $message.=" v les champs prix et qte sont requis";
        $classe="alert alert-danger";
    }
    if($e==3){
        $message.=" r les champs prix et qte doivent etre numeriques";
        $classe="alert alert-danger";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>correction tp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<!-- .container>.row>.col-md-6.mx-auto.shadow.p-2 -->
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-2 mt-3">
            <div class="<?=$classe?>"><?php  echo $message ?></div>
                <!-- form>.form-group*2>(label+input.form-control) -->
                <form action="resultat.php" method="post">
                    <div class="form-group">
                        <label for="">Prix</label>
                        <input type="text" class="form-control" name="prix">
                    </div>
                    <div class="form-group"><label for="">Quantité</label>
                    <input type="text" class="form-control" name="qte"></div>
<button class="btn btn-primary d-block mx-auto col-6">Valider</button>          
      </form> 

        </div>
    </div>
</div>
    
</body>
</html>
<?php 
define('MAX',10);
$stock=[
    ['libellé'=>'hp dv 7','prix'=>9000,'qte'=>100,
    'config'=>['processeur'=>'core i3','ram'=>rand(4,8).'GO','ecran'=>'15 pouces']],
    ['libellé'=>'dell satelite','prix'=>10000,'qte'=>10,'config'=>['processeur'=>'core i7','ram'=>rand(4,8).'GO']],
];
$stock[]=['libellé'=>'acer a4','prix'=>4000,'qte'=>1000,'config'=>['processeur'=>'core i5','ram'=>'4GO']];
for ($i=0; $i <1000 ; $i++) { 
    $stock[]=    ['libellé'=> 'produit '.$i,'prix'=>random_int(10,10000),'qte'=>rand(0,100),
    'config'=>['processeur'=>'core i'.rand(3,7),'ram'=>rand(4,8).'GO']];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les tableaux </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-light">
    <!-- table.table.table-striped>(thead>tr>th*3) -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Libellé</th>
                <th>prix</th>
                <th>quantité en stock</th>
                <th>config</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($stock as $c=>$produit   ) {

$classe="";
if($produit['qte']>0 && $produit['qte']<MAX){
$classe="warning";
}else if($produit['qte']==0){
    $classe="danger";
    
}else if($produit['qte']>=MAX){
    $classe="primary";

}else{

    die("Erreur ... ");
}
?>

                <tr>
                    <td><?=$produit['libellé']?></td>
                    <td><?=$produit['prix']?></td>
                    <td><span class="badge badge-<?=$classe?> "><?=$produit['qte']?></span></td>
                    <td>
<ul class="list-group">
    
    <?php foreach($produit['config'] as $c => $v){?>
        <li class="list-group-item"><?=$c?> : <?=$v?></li>
        <?php }?>     </td>
</ul>
                </tr>
    

<?php }?>
        </tbody>
    </table>
    </div>
    
</body>
</html>

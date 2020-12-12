<?php 
//fonction => sous programme 
//exemple : selon la quantité ; cette fonction retourne une classe de bootstrap
function class_etat_stock($qte){
    if($qte==0) echo "bg-danger text-white";
    if($qte<=10 && $qte>0) echo "bg-warning text-white";
} 
$produit1=['libelle'=>'hp dv 6','prix'=>9000,'qte'=>10,
'image'=>'images/hp.jpg',
'config'=>'core i3, Ecran 17 pouces'

];

$produit2=['libelle'=>'dell saltellite 6','prix'=>7000,
'qte'=>100,'image'=>'images/dell.jpg'

];
//$produit2['config']=['processeur'=>'core i5','ram'=>'4GO'];
$produit3=$produit1;
$produit3['libelle']='sony vaio';
$listes=[
$produit1,
$produit2,
$produit3
];
//scaffold
$images=['images/hp.jpg','images/dell.jpg'];
for ($i=0; $i <1000 ; $i++) { 

   $produit=['libelle'=>'produit '.($i+1),'prix'=>random_int(10,10000),'qte'=>random_int(0,100),
   'image'=>$images[random_int(0,1)]
];
$ram=['2Go','4Go','8Go','16Go'];
$produit['config']=['processeur'=>'core i3','ram'=>$ram[random_int(0,count($ram)-1)]];
//push
   $listes[]=$produit;

}

// echo $produit1[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRET BILAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<h3 class="text-center text-primary">Liste des produits </h3>
<table class="table table-striped">
    <tr>
        <th>Libellé</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Image</th>
        <th>Config</th>
    </tr>
    <?php foreach($listes as $p){ ?>
    <tr  class="<?php class_etat_stock($p['qte']) ?>">

        <td><?php echo $p['libelle'];?></td>
        <td><?= $p['prix'];?></td>
        <td  ><?=$p['qte']?></td>
        <td><img src="<?=$p['image']?>"
         width="200"></td>
         <td>
         <?php if(isset($p['config']) && is_array($p['config'])  ){?>
                <ul>
                        <?php foreach($p['config'] as $c=>$v) : ?>
                                <li> <?=$c?> : <?=$v?></li>
                        <?php endforeach ?>
                </ul>
         <?php }else if(!isset($p['config'])) {  ?>
            <div class="alert alert-danger">
                Configuration indisponible!
            </div>
         <?php } else {?>
         <div class="alert alert-primary">
         <?=$p['config']?>
         </div>
         <?php }?>
         </td>
    </tr>
    <?php } ?>
   
</table>


</div>
    
</body>
</html>
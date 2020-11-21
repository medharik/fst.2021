<?php 
$tab=[100,13,14,19,13,100];//array(100,13,14,19,13);
$tab[]=1;
$cpt=0;
print_r($tab);
foreach ($tab as $key => $value) {
if($value%2==0) $cpt++;
//$value%2==0 && $cpt++
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<img src="https://placehold.it/200x200" alt="">
    <ul>
        <li>Nombre des pairs <?php echo $cpt;?></li>
        <li>Nombre des impairs <?=(count($tab)-$cpt)?></li>
    </ul>
    <hr>
    <!-- table>tr*2>td*2 -->
    <table class="table table-dark">
        <tr>
            <td>Nombre</td>
            <td>Type</td>
        </tr>
<?php foreach ($tab as $c => $v) {?>
        <tr>
            <td><?=$v?></td>
            <td><?php if($v%2==0) {?>
            <span class="badge  badge-primary">PAIR</span>            <?php } else {?>
                <span class="badge  badge-danger" >Impair</span>
            <?php }?>
            </td>
        </tr>
<?php } ?>

    </table>
    <h2>Les tableaux associatifs (hash, map : key=>value)</h2>
    <?php 
    $produit1=['libellé'=>'dv 5','prix'=>5000,'qte'=>9];
    $produit2=['libellé'=>'dv 5','prix'=>5000,'qte'=>9];
    $produit3=['libellé'=>'dv 5','prix'=>5000,'qte'=>9];
$stock=[$produit1,
        $produit2,
        $produit3];
        $stock2=[
         0=>   ['libellé'=>'dell 5','prix'=>7000,'qte'=>90],
        1=>['libellé'=>'hp 5','prix'=>5000,'qte'=>9]
    ];
    echo ($stock2[0]['prix']);
   // var_dump($produit[1]);

    
    ?>
    
<table class="table table-striped col-6 mx-auto text-center ">
    <tr>
        <th>KEY</th>
        <th>VALUE</th>
    </tr>
    <?php foreach ($produit as $c => $p) {
    ?>
    <tr>
        <td><?=$c?></td>
        <td><?=$p?></td>
    </tr>
    <?php }?>
</table>

</body>
</html>
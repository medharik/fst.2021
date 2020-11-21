<?php 
$age=10;
$prenom="ALAA a $age ans";
$maj=($age>18)? 'maj':'min';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 1 </title>
</head>
<body>

<h1>Bienvenue <?php echo 'ALAA  O\'NEAL <em style="color:red">test em</em>   a $age ans';?></h1>
<h1>Bienvenue <?php echo "ALAA a m style=\"color:red\">test em</em>  $age ans";?></h1>
<h1>Bienvenue <?php echo 'ALAA a'. $age.' ans';?></h1>
<h1>Bienvenue <?php echo "ALAA a". $age." ans";?></h1>
<hr>
<?php 
$majeur=$age>18;
$col=($majeur)? 'red':'blue';
if (!$majeur) {
    echo "<p>$maj</p>";
}


?>
<h2 style="color:<?=$col?>">SALUT</h2>
<?php if($majeur) {?>
<h3 style="color:red">Majeur</h3>
<?php } else { ?>
<h3>Majeur</h3>
<?php } ?>
<?php
$trouve=false;
for ($i=1; $i <=10 && ! $trouve ; $i++) { 
    echo 'A '.$i,'<br>';
    if($i%2==0) continue;
    echo 'B '.$i,'<br>';
    if($i%3==0) break;
    echo 'C '.$i,'<br>';
    $trouve=true;
    //A 1 A 2 B2 C2 ...   
?>;;
    <!-- <p>ELEMENT <?php echo  $i?></p> -->

<?php } ?>    

</body>
</html>
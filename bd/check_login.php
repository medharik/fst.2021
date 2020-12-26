<?php
session_start();
extract($_POST); //$email, $passe
if ($login == "ali@gmail.com" && $passe == 123) {
    $_SESSION['nom'] = 'ali';
    $_SESSION['email'] = 'ali@gmail.com';
    $_SESSION['passe'] = '123';
} else {
    header("location:login.php?cn=yes");
}
var_dump($_SESSION);

<?php
include("functions.php");
verifier_acces($_POST['login'], $_POST['passe']);
header("location:index.php");

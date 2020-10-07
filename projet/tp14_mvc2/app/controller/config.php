
<!-- ----- debut config -->
<?php

if(!defined('DEBUG'))define('DEBUG', FALSE);
// Configuration de la base de données
$dsn = 'mysql:host=localhost;dbname=roberte1;charset=utf8';
$username = "roberte1";
$password = "n0ya7Drs";

// chemin absolu vers le répertoire du projet
$root = "/home/etu/roberte1/www/lo07_tp/projet/tp14_mvc2";

if (DEBUG) {
 echo ("<ul>");
 echo ("<li>root = $root</li>");
 echo ("<li>---</li>");
 echo ("<li>dsn = $dsn</li>");
 echo ("<li>username = $username</li>");
 echo ("<li>password = $password</li>");
 echo ("</ul>");
}

?>

<!-- ----- fin config -->




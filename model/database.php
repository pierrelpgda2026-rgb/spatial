<?php

$serveur = "localhost";
$port = "3306";
$user = "root";
$pwd = "";
$dbname = "spatial_db";

$connexion = mysqli_connect($serveur, $user, $pwd, $dbname, $port);

if (!$connexion) {
     echo "Erreur de connexion";
} else {
     echo "Connexion réussie";
}

?>
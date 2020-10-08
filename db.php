<?php
// Fichier de connexion réutilisable !!!
$server = "mysql:host=localhost:3306;dbname=phpsamples" ;
$username = 'root' ;
$password = '' ;
$connexion = new PDO($server, $username, $password) ;
?>
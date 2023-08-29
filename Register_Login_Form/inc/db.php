<?php 
$pdo = new PDO('mysql:dbname=foad;host=localhost', 'root', 'root'); //Connexion a la base de donnée

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // pour qu'on nous affiche les messages d'erreurs

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
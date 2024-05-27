<?php

$localhost = "localhost";
$user = 'root';
$pass = "";
$nomeBanco = '';

try{

    $pdo = new PDO("msqli:host=$host;dbnmae=$nomeBanco", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    echo 'EROO: '.$e->getMessage();
}

?>
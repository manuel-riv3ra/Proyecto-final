<?php

 //local
$host = 'localhost:3308';
$user = 'root';  // Cambia esto si tu usuario de MySQL es diferente
$password = '123456';  // Deja vacío si no tienes contraseña configurada
$dbname = 'crud_app';


//hosting
    $host = 'sql311.infinityfree.com';
    $user = 'if0_40336417';  
    $password = 'nArJTibfuw';
    $dbname = 'if0_40336417_ico';




$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>

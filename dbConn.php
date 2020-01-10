<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_dbname = 'frisabor_estagio';

try{
    $conn = new PDO('mysql:host=' .$db_host. ';dbname=' .$db_dbname. ';charset=utf8', $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $er){
    echo 'Conn error' .$er->getMessage();
    header('Location: ../problemastecnicos.php?database=' . $er->getMessage());
}
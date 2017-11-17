<?php
require 'config.php';
$con = new mysqli(host, user, pass, db);
if($con->connect_error){
    echo "Erro ao se conectarcom o banco". $con->connect_error;
}
?>
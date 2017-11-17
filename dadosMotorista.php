<?php session_start(); ?>
<?php
require 'conexao.php';
$nome = $_POST ["nome"];
$cpf = $_POST ["cpf"];
$data = $_POST ["data"];
$sexo = $_POST ["sexo"];
$carro = $_POST ["carro"];
$status = $_POST ["status"];

$insert= "INSERT INTO tb_motorista (nome_motorista, cpf_motorista, data_motorista, sexo_motorista, carro_motorista, status_motorista) 
VALUES ('$nome', '$cpf', '$data', '$sexo', '$carro', '$status');";
$query = $con->query($insert);
$_SESSION['cadsucess'] = "Cadastrado com sucesso";
header("Location: indexMotorista.php");
?>
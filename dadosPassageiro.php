<?php session_start(); ?>
<?php
require 'conexao.php';
$nome = $_POST ["nome"];
$cpf = $_POST ["cpf"];
$data = $_POST ["data"];
$sexo = $_POST ["sexo"];


$insert= "INSERT INTO tb_passageiro (nome_passageiro, cpf_passageiro, data_passageiro, sexo_passageiro, carro_passageiro, status_passageiro) 
VALUES ('$nome', '$cpf', '$data', '$sexo',);";
$query = $con->query($insert);
$_SESSION['cadsucess'] = "Cadastrado com sucesso";
header("Location: indexPassageiro.php");
?>
<?php session_start(); ?>
<?php
require 'conexao.php';
$nomem = $_POST ["nomeM"];
$nomep = $_POST ["nomeP"];
$valor = $_POST ["valor"];



$insert= "INSERT INTO tb_corrida (nome_motorista, nome_passageiro, valor_corrida) 
VALUES ('$nomem', '$nomep', '$valor');";
$query = $con->query($insert);
$_SESSION['cadsucess'] = "Cadastrado com sucesso";
header("Location: indexCorrida.php");
?>
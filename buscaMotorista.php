<?php

require "conexao.php";
$campo="%{$_POST['buscar']}%";


$busca = "SELECT * FROM tb_motorista WHERE nome_motorista LIKE ?";
$sql =$con->prepare($busca); 
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($id_motorista,$nome_motorista,$cpf_motorista,$data_motorista,$sexo_motorista,$carro_motorista,$status_motorista);

echo"
<table class='table table-striped table-dark'>
<thead>
  <tr>
    <th scope='col'>ID</th>
    <th scope='col'>Nome</th>
    <th scope='col'>CPF</th>
    <th scope='col'>Nascimento</th>
    <th scope='col'>Sexo</th>
    <th scope='col'>Carro</th>
    <th scope='col'>Status</th>
  </tr>
</thead>
<tbody>";
while ($sql->fetch()){

echo"
  <tr>
    <th scope='row'> $id_motorista </th>
    <td> $nome_motorista </td>
    <td> $cpf_motorista</td>
    <td> $data_motorista</td>
    <td> $sexo_motorista</td>
    <td> $carro_motorista</td>
    <td> $status_motorista</td>
  </tr>";
}
echo"</tbody>
</table>";

?>
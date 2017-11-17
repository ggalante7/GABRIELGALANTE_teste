<?php

require "conexao.php";
$campo="%{$_POST['buscar']}%";


$busca = "SELECT * FROM tb_passageiro WHERE nome_passageiro LIKE ?";
$sql =$con->prepare($busca); 
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($id_passageiro,$nome_passageiro,$cpf_passageiro,$data_passageiro,$sexo_passageiro,$carro_passageiro,$status_passageiro);

echo"
<table class='table table-striped table-dark'>
<thead>
  <tr>
    <th scope='col'>ID</th>
    <th scope='col'>Nome</th>
    <th scope='col'>CPF</th>
    <th scope='col'>Nascimento</th>
    <th scope='col'>Sexo</th>

  </tr>
</thead>
<tbody>";
while ($sql->fetch()){

echo"
  <tr>
    <th scope='row'> $id_passageiro </th>
    <td> $nome_passageiro </td>
    <td> $cpf_passageiro</td>
    <td> $data_passageiro</td>
    <td> $sexo_passageiro</td>
  </tr>";
}
echo"</tbody>
</table>";

?>
<?php

require "conexao.php";
$motorista=$_POST['motorista'];
$passageiro=$_POST['passageiro'];
$valor= $_POST['valor'];


$busca = "SELECT * FROM tb_corrida WHERE valor and id_motorista and id_passageiro = (?, ?, ?)";
$sql =$con->prepare($busca); 
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($id_corrida,$id_passageiro,$id_motorista,$valor_corrida);

echo"
<table class='table table-striped table-dark'>
<thead>
  <tr>
    <th scope='col'>ID Corrida</th>
    <th scope='col'>ID Motorista </th>
    <th scope='col'>ID Passageiro</th>
    <th scope='col'>Valor</th>

  </tr>
</thead>
<tbody>";
while ($sql->fetch()){

echo"
  <tr>
    <th scope='row'> $id_corrida </th>
    <td> $id_motorista </td>
    <td> $id_passageiro</td>
    <td> $valor_corrida</td>
  </tr>";
}
echo"</tbody>
</table>";

?>
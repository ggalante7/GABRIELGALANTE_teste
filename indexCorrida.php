
<?php session_start(); ?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>GABRIEL_teste</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/jquery-3.2.1.min"></script>
	<script src="js/function.js"
	<script src="js/bootstrap.min.js"></script>


</head> 

<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">GABRIELGALANTE</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
		<a class="nav-link" href="/indexPassageiro.php">Passageiro</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="/indexMotorista.php">Motorista</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="/indexCorrida.php">passageCorridairo</a>
		  </li>
		</ul>
	  </div>
	</nav>

	<div class="w800">
		<form method="post" id="corrida" action="dadoscorrida.php">
			<div class="row">

				<div class="col-md-6 mb-3 form-group">
					<label>Nome Motorista</label>
					<input type="text" class="form-control" required placeholder="Nome do motorista" id="nomeM" name="nomeM">
				</div>

				<div class="col-md-3 mb-3 form-group">
					<label>Nome passageiro</label>
					<input type="text" class="form-control" required placeholder="Nome do passageiro" id="nomeP" name="nomeP">
				</div>
				
				<div class="col-md-3 mb-3">
					<label>Valor da corrida</label>
					<input type="text" class="form-control" required placeholder="R$,00" id="valor" name="valor">
				</div>

				<div class="col-md-6 mb-3">
					<label>Modelo do carro</label>
					<input type="text" class="form-control" required placeholder="Agile 1.4 LTZ" name="carro">
				</div>

				<div class="col-md-3 mb-3">
					<label>Status</label>
					<select name="status" class="form-control">
						<option value="1">Ativo</option>
						<option value="0">Inativo</option>
					</select>
				</div>

				<div class="col-md-12 mb-3">
					<button type="button" class="botpad margem btn btn-success" onclick="limpar();">Novo</button>
					<button type="submit" class="botpad btn btn-primary" onsubmit="validar();">Salvar</button>
					<button type="button" class="botpad btn btn-danger">Excluir</button>
				</div>

			</div>

			<p class="text-center text-success">
				<?php
				if(isset($_SESSION['cadsucess'])){
					echo $_SESSION['cadsucess'];
					unset($_SESSION['cadsucess']); 
				}
				?>
			</p>

		</form>

		<div class="row">
		<form action="buscaCorrida.php"> 
		<div class="col-md-9 mb-3">
			<input type="text" class="form-control" placeholder="Pesquisar" name="pesquisar">
		</div>

		<div class="col-md-3 mb-3">
			<button type="submit" class="botpad margem btn btn-success">Pesquisar</button>
		</div>
		</form>
		<div id="resultado">
		<?php
		require "conexao.php";
		$busca = "SELECT * FROM tb_corrida";
		$sql =$con->prepare($busca); 
		$sql->execute();
		$sql->bind_result($id_corrida,$nome_corrida,$cpf_corrida,$data_corrida,$sexo_corrida,$carro_corrida,$status_corrida);

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
		</div>
	</div>
</body>
</html>


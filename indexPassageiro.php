
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
		<form method="post" id="passageiro" action="dadospassageiro.php">
			<div class="row">

				<div class="col-md-6 mb-3 form-group">
					<label>Nome</label>
					<input type="text" class="form-control" required placeholder="Nome" id="nome" name="nome">
				</div>

				<div class="col-md-3 mb-3 form-group">
					<label>CPF</label>
					<input type="text" class="form-control" required placeholder="000.000.000-0" id="cpf" name="cpf">
				</div>
				
				<div class="col-md-3 mb-3">
					<label>Data de Nascimento</label>
					<input type="date" class="form-control" required placeholder="dd/MM/YYYY" id="data" name="data">
				</div>
			
				<div class="col-md-3 mb-3">
					<label>Sexo</label>
					<select name="sexo" class="form-control">
						<option value="M">Masculino</option>
						<option value="F">Feminino</option>
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
		<form action="buscaPassageiro.php"> 
		<div class="row">
		<div class="col-md-9 mb-3">
			<input type="text" class="form-control" placeholder="Pesquisar" name="pesquisar">
		</div>

		</form>
		<div id="resultado">
		<?php
		require "conexao.php";
		$busca = "SELECT * FROM tb_passageiro";
		$sql =$con->prepare($busca); 
		$sql->execute();
		$sql->bind_result($id_passageiro,$nome_passageiro,$cpf_passageiro,$data_passageiro,$sexo_passageiro);

		echo"
		<table class='table table-striped table-dark col-md-12 mb-3'>
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
		</div>
	</div>
</body>
</html>


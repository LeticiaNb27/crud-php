<!DOCTYPE html>
<html>
	<head>
		<title>Lista de alunos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>

	<body>
		<div id="fundo-externo">
		
			<div id="menu">
				<ul>
					<li><a>Listar</a></li>
					<li><a href="index.php">Cadastrar</a></li>
				</ul>
			</div>
			<table id="tabela" border="1px">
				<tr>
					<td>NUMERO</td>
					<td>NOME</td>
					<td>SEXO</td>
					<td>EXCLUIR</td>
					<td>EDITAR</td>
				</tr>

				<?php
					include("conexao.php");

					if(@$num = $_GET['num']){
						$query = mysqli_query($con, "DELETE FROM alunos WHERE numero = $num");
						if($query){
							echo "<script>location.href='listar.php';</script>";
						}
					}

					$query = mysqli_query($con, "SELECT * FROM alunos");
					while($r = mysqli_fetch_array($query)) {

				?>
					<tr>
						<td><?php echo $r['numero']; ?></td>
						<td><?php echo $r['nome']; ?></td>
						<td><?php echo $r['sexo']; ?></td>
						<td><a href="?num=<?php echo $r['numero']; ?>" onclick="return confirm('Você realmente deseja excluir o usuario: <?php echo $r['nome']; ?>')">EXCLUIR</a></td>
						<td><a href="editar.php?num=<?php echo $r['numero']; ?>&nome=<?php echo $r['nome']?>&sexo=<?php echo $r['sexo'];?>">EDITAR</a></td>
					</tr>

				<?php } ?>
			</table>
	</div>
	</body>
</html>


<!DOCTYPE html>
<html>
	<head>
		<title>Editar o usuario: <?php echo $_GET['nome'];?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>

	<body>
		<div id="fundo-externo">
		
			<div id="menu">
				<ul>
					<li><a href="listar.php">Listar</a></li>
					<li><a href="">Cadastrar</a></li>
				</ul>
			</div>
			<form method="POST" action="salvar.php">
			  Numero:<br/> 
			  <input id="numero" type="text" name="numero" value="<?php echo $_GET['num'];?>" placeholder="Digite o novo numero"><br/>
			  Nome:<br/> 
			  <input id="nome"type="text" name="nome" value="<?php echo $_GET['nome'];?>"placeholder="Digite o novo nome"><br/>
			  Sexo:
				<input type="radio" name="sexo" value="F" <?php echo ($_GET['sexo'] == 'F') ? 'checked' : null; ?>>Feminino
				<input type="radio" name="sexo" value="M" <?php echo ($_GET['sexo'] == 'M') ? 'checked' : null; ?>/>Masculino<br>
				<input type="text" name="n" value="<?php echo $_GET['num']; ?>" hidden="true">
			  <button id="cadastrar" type="submit">Atualizar</button>
			  <button id="Limpar" type="reset">Limpar</button>
			</form>
	</div>
	</body>
</html>
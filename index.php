<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
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
			<form action="cadastrar.php" method="POST">
			  Numero:<br/> 
			  <input id="numero" type="text" name="numero" placeholder="Digite o numero"><br/>
			  Nome:<br/> 
			  <input id="nome"type="text" name="nome" placeholder="Digite o nome"><br/>
			  Sexo:
				<input type="radio" name="sexo" value="F" />Feminino
				<input type="radio" name="sexo" value="M" />Masculino
			 	<br>
			  <button id="cadastrar" type="submit">Cadastrar</button>
			  <button id="Limpar" type="reset">Limpar</button>
			</form>
	</div>
	</body>
</html>
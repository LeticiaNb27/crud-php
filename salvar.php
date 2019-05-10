<?php 
	include("conexao.php");
	@$numero = $_POST['numero'];
	@$nome = $_POST['nome'];
	@$sexo = $_POST['sexo'];
	$num = $_POST['n'];

	echo $numero;

	$query = mysqli_query($con, "UPDATE alunos SET numero=$numero, nome='$nome', sexo='$sexo' WHERE numero=$num");

	if($query){
		echo "<script>alert('O usuario foi alterado com sucesso');location.href='listar.php';</script>";
	}else{
		echo "<script>alert('Erro ao alterar o usuario');location.href='listar.php';</script>";
	}
?>
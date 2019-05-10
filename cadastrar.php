<?php
	include("conexao.php");

	$numero = $_POST['numero'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$sql = "INSERT INTO alunos(numero, nome, sexo) values($numero, '$nome', '$sexo')";
	$query = mysqli_query($con, $sql);

	if($query){
		echo "<script>alert('cadastrado com sucesso!');location.href='index.php';</script>";
	}else{
		echo "<script>alert('erro ao cadastrar!');location.href='index.php';</script>";
	}




?>
<?php

	include("../model/conecta.php");


	$nome = 'Rafa';
	$email = 'teste@teste';

	$sql = "INSERT INTO colaboradores(nome, email) VALUES(:nome, :email)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':site', $site );
	 
	$result = $stmt->execute();
	 
	echo $stmt->rowCount() . "linhas inseridas";
	
	
?>
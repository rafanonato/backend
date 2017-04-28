<?php

	function inserir($a, $b){

		$inserir=$conn->prepare("INSERT INTO colaboradores(nome, email)VALUES(:nome, :email )");
	$inserir->bindValue(":nome",$a , ":email",$b);
	$inserir->execute();

		echo $a;

	}

	function autentica($login, $pass){

		

		if ($login = ) {
			# code...
		}


	}




?>
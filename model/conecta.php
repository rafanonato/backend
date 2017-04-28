<?php

define( 'MYSQL_HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', 'root' );
define( 'MYSQL_DB_NAME', 'bd_integrado' );

// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
	 
date_default_timezone_set('America/Sao_Paulo');

// inclui o arquivo de funçõees
require "../controller/function.php"; 

/*
	try
	{
	    $conn = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );

	    //print("Conexão executada com sucesso!");
	}
	catch ( PDOException $e )
	{
	    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
	}

	*/

?>
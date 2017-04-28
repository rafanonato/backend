<?php

define( 'MYSQL_HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', 'root' );
define( 'MYSQL_DB_NAME', 'bd__integrado' );


	try
	{
	    $conn = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );

	    //print("Conexão executada com sucesso!");
	}
	catch ( PDOException $e )
	{
	    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
	}

?>
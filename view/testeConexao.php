<?php
	require "../model/conecta.php";
	require "../controller/function.php"; 

	$a = $_GET['v1'];
	$b = $_GET['v2'];


	echo soma($a, $b);
	

?>
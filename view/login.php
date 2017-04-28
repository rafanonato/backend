<?php
require "../model/conecta.php";
	
	//$PDO = db_connect();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de Registro - Funcionários</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container">

	<div class="row">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    
		    <div class="navbar-header">

			 <a href="index.php"><img src="img/logo.png" class="img-responsive"></a>

		    </div>

		  </div>
		</nav>
	</div>
	
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="usuario" class="col-sm-2 control-label">Usuário</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="usuario" placeholder="Nome de usuário">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="senha" class="col-sm-2 control-label">Senha</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="senha" placeholder="Senha">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-danger btn-block">Sign in</button>
		    </div>
		  </div>
</form>
	</div>
	<div class="col-md-2"></div>
	</div>

	

		

	
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../bootstrap/js/jquery1.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
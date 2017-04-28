<?php
require_once "../model/conecta.php";
	
	$PDO = db_connect();	

?>

<!DOCTYPE html>
<html lang="en">
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
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">

			<a href="index.php"><img src="img/logo.png" class="img-responsive"></a>
		    
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="index.php">A EMPRESA</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSSA ESTRUTURA <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>

		      <form class="navbar-form navbar-right" action="login.php" method="POST">
		      <label for="">Área Administrativa :</label>
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Login">
		          <input type="text" class="form-control" placeholder="Senha">
		        </div>
		        <button type="submit" class="btn btn-success">Acessar</button>
		      </form>
		      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>

	<div class="row">
		<div class="jumbotron">
		  <h2>Oi! Este é um sistema de controle de <span style="color: red	;">Colaboradores</span> para uma empresas de médio e pequeno porte!</h2>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dolore voluptates error placeat eveniet, saepe facilis totam eum, amet impedit necessitatibus nisi ad, ipsam. Veritatis possimus molestiae, aut doloremque sint.</p>
		  
		<p><a class="btn btn-danger btn-lg" href="cadastro.php" role="button">Novo Funcionário</a></p>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-6">
			<div class="thumbnail">
				<img src="img/adm.png" class="img-responsive" alt="">
				<h1 style="text-align: center;">RH</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque impedit repudiandae accusamus, magnam minima.</p>
				<p><button class="btn-block btn-success btn-lg" type="submit">Saiba</button></p>
			</div>
		</div>

		<div class="col-sm-6 col-md-6">
			<div class="thumbnail">
				<img src="img/adm.png" class="img-responsive" alt="">
				<h1 style="text-align: center;">Colaborador</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque impedit repudiandae accusamus, magnam minima.</p>
				<p><button class="btn-block btn-success btn-lg" type="submit">Saiba</button></p>
			</div>
		</div>
		
	</div>

	<div class="row">
		<p style="text-align: center;">Copyright | 2017 </p>
	</div>
	
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../bootstrap/js/jquery1.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
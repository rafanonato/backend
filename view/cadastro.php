<?php
require "../model/conecta.php";
	
	//$PDO = db_connect();
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$senhaConf = $_POST["senhaConfirma"];

	$sql = "INSERT INTO colaboradores(nome, email, senha, senhaConf) VALUES(:nome, :email, :senha, :senhaConfirma)";

		$stmt = $conn->prepare($sql);
			
		$stmt->bindValue( ':nome', $nome);
		$stmt->bindValue( ':email', $email);
		$stmt->bindValue( ':senha', $senha);
		$stmt->bindValue( ':senhaConfirma', $senhaConf);

		$result = $stmt->execute();
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
		    
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    
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
	
		      <form class="navbar-form navbar-right" action="#" method="POST">
		      <label for="">Área Administrativa :</label>
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Login">
		          <input type="text" class="form-control" placeholder="Senha">
		        </div>
		        <button type="submit" class="btn btn-success">Acessar</button>
		      </form>
		      
		    </div>
		  </div>
		</nav>
	</div>

	<div class="row">
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  	<span aria-hidden="true">&times;</span>
	  </button>

	  <p><?php 
	  	if (empty($nome)) {
	  		echo "Caso ainda não tem cadastro realize abaixo!";
	  	}elseif ($nome) {
	  		echo "Seu cadastro foi realizado com Sucesso! " . $nome;
	  	}
	   ?> </p>
	</div>

		<div class="jumbotron">
		  <h2>Olá novo colaborador</h2>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, consequatur. Officia minus tempora eaque consectetur numquam dignissimos porro, excepturi labore..</p>
	</div>

	<div class="col-sm-2 col-md-1"></div>
	
	<div class="col-sm-10 col-md-11">

	<form class="form-horizontal" method="POST" action="cadastro.php">
  	
  	<div class="form-group">
	    <label for="nome" class="col-sm-2 control-label">Nome: </label>
	    <div class="col-sm-10">
      		<input type="text" class="form-control" name="nome" placeholder="Insira seu nome">
    	</div>
  	</div>

  	<div class="form-group">
	    <label for="email" class="col-sm-2 control-label">e-mail: </label>
	    <div class="col-sm-10">
      		<input type="email" class="form-control" name="email" placeholder="Insira seu email">
    	</div>
  	</div>

  	<div class="form-group">
	    <label for="senha" class="col-sm-2 control-label" >Senha: </label>
	    <div class="col-sm-5 col-md-8">
      		<input type="password" class="form-control" name="senha" placeholder="Insira uma senha">
    	</div>
  	</div>

  	<div class="form-group">
	    <label for="senhaConfirma" class="col-sm-2 control-label">Confirmar Senha: </label>
	    <div class="col-sm-5 col-md-8">
      		<input type="password" class="form-control" name="senhaConfirma" placeholder="Insira novamente a senha">
    	</div>
  	</div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Aceita os Termos e Serviços. Selecionando aceita todos os termos!
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-12">
      
    </div>
  </div>
  <button type="submit" name="cadastrar" class="btn-lg btn-success btn-block">Sign in</button>
</form>

	</div>

		<div class="row">
			<p style="text-align: center; margin-top: 30px;">Copyright | 2017 </p>
		</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../bootstrap/js/jquery1.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
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

	<!-- <div class="col-sm-6 col-md-5">
		<img class="img-responsive" src="img/adm.png" alt="">
	</div>-->

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
		        <li><a href="funcionario.php">A EMPRESA</a></li>
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

		      <ul class="nav navbar-nav navbar-right">
		       	<li><a href="#">LOGOUT</a></li>
			</ul>

	
		      <!--<form class="navbar-form navbar-right" action="#" method="POST">
		      <label for="">Área Administrativa :</label>
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Login">
		          <input type="text" class="form-control" placeholder="Senha">
		        </div>
		        <button type="submit" class="btn btn-success">Acessar</button>
		      </form> -->
		      
		    </div>
		  </div>
		</nav>
	</div>

	<div class="row">

		<div class="col-sm-4 col-md-4">
			<img class="img-responsive" src="img/adm.png" alt="">
		</div>

			<div class="col-sm-8 col-md-8">
			  <h2>Oi colaborador <span style="color: red;">Nome</span>, seja bem-vindo ao Sistema Integrado!</h2>
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dolore voluptates error placeat eveniet, saepe facilis totam eum, amet impedit necessitatibus nisi ad, ipsam. </p>
			  
				<p><a class="btn btn-danger btn-block" href="#" role="button">Meus dados</a></p>
				<p><a class="btn btn-danger btn-block" href="#" role="button">Registo de ponto</a></p>
				<p><a class="btn btn-danger btn-block" href="#" role="button">Demonstratido de Pagamento</a></p>
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
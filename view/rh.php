<?php
require_once "../model/conecta.php";
	
	$PDO = db_connect();

	// SQL para contar o total de registros
	// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
	// É recomendável usar a função COUNT da SQL
	// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
	$sql_count = "SELECT COUNT(*) AS total FROM colaboradores ORDER BY id ASC";
 
	// SQL para selecionar os registros
	$sql = "SELECT id, nome FROM colaboradores ORDER BY id ASC";
 
	// conta o toal de registros
	$stmt_count = $PDO->prepare($sql_count);
	$stmt_count->execute();
	$total = $stmt_count->fetchColumn();
	 
	// seleciona os registros
	$stmt = $PDO->prepare($sql);
	$stmt->execute();	
	
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
		       	<li><a href="cadastro.php">ADD USUÁRIOS</a></li>
		       	<li><a href="#">LOGOUT</a></li>

			</ul>
		    </div>
		  </div>
		</nav>
	</div>

    <div class="row">
 
        <h2>Lista de Usuários</h2>
		
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  	<span aria-hidden="true">&times;</span>
	  </button>
	<strong>Total de usuários: <?php echo $total ?></strong> <span><strong><?php if ($total > 0): ?></strong></span>
	</div>

 
        
 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['nome'] ?></td>
                    <td>
                        <a href="form-edit.php?id=<?php echo $user['id'] ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
 
        <?php else: ?>
 
        <p>Nenhum usuário registrado</p>
 
        <?php endif; ?>
    		</div>
    	</div>
         
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../bootstrap/js/jquery1.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
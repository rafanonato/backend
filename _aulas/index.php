<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Formulario POST</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="container">
	<div class="col-md-6">

	<?php

	$n1 = $_POST["v1"];
	$n2 = $_POST["v2"];
	$n3 = $_POST["nome"];


	$n4 = $_POST["v3"];
	$n5 = $_POST["v4"];


		if ($total >= 10){
			$result2 = $n1 + $n2;
      //print("<h3>Seu número</h3> " . $total . " <h3>é maior que 10 </h3>". $n3);

		}elseif ($total < 9){
      $result1 = $n1 + $n2;
			//print("Seu numero " . $total . " é menor que 10 " . $n3 . $n4 . $n5);
		}
	?>

    <h4>O resultado é <? print($result1 . " e seu nome é " . $n3); ?>...</h4>
	     <a class="btn btn-default" href="form.html">Voltar</a>
  	</div>

  <div class="col-md-6">
    <h2>Segundo Resultado!</h2>
      <h3>O que escreveu foi: <? print($n4) ?></h3>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery1.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
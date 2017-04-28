<?php
require_once "../model/conecta.php";
	
	$PDO = db_connect();

	// SQL para contar o total de registros
	// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
	// É recomendável usar a função COUNT da SQL
	// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
	$sql_count = "SELECT COUNT(*) AS total FROM colaboradores ORDER BY nome ASC";
 
	// SQL para selecionar os registros
	$sql = "SELECT id, nome FROM colaboradores ORDER BY nome ASC";
 
	// conta o toal de registros
	$stmt_count = $PDO->prepare($sql_count);
	$stmt_count->execute();
	$total = $stmt_count->fetchColumn();
	 
	// seleciona os registros
	$stmt = $PDO->prepare($sql);
	$stmt->execute();	

?>

<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Cadastro - ULTIMATE PHP</title>
    </head>
 
    <body>
         
        <h1>Sistema de Cadastro - ULTIMATE PHP</h1>
         
        <p><a href="cadastro.php">Adicionar Usuário</a></p>
 
        <h2>Lista de Usuários</h2>
 
        <p>Total de usuários: <?php echo $total ?></p>
 
        <?php if ($total > 0): ?>
 
        <table width="50%" border="1">
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
    </body>
</html>
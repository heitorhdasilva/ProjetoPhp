<?php
	//iniciar SESSION
	session_start();
	
	//se usuário estiver logado como admin
	if($_SESSION['login'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restrito - Administrador</title>
</head>
<body>
	<h2>Página de Acesso Restrito - Administrador</h2>
	<a href="logout.php">Sair</a>
	<p>Nesta página você pode alterar as configurações de sistema.
</body>
</html>
<?php
	}else{
		echo("Acesso negado!");
			//redireciona para a página de formulário de login
		echo('<meta http-equiv="refresh" content="3;url=publico.php">');
	}
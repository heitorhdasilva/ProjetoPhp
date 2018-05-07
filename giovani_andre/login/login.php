<?php
	//iniciar a SESSION
	session_start();

	//capturando os valores que vieram pelo POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	//se usuario informado for 'admin' e senha informada for 'admin'
	if($login == 'admin' and $senha == 'admin'){
		echo("Olá, Administrador");
		//gravar as informações na SESSION
		$_SESSION['nome'] = "Administrador";
		$_SESSION['login'] = "admin";

		//redireciona para a página de acesso restrito do ADM
		echo('<meta http-equiv="refresh" content="0;url=../listaProfessores.php">');			
	}else{
		echo("Dados Inválidos");
		//redireciona para a página do formulário de login
		echo('<meta http-equiv="refresh" content="3;url=../listaProfessores.php">');
	}	
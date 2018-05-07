<?php
	//iniciar a sessão
	session_start();

	//destruir a sessão
	session_destroy();

	//redireciona para a página do formulário de login em zero segundos
	echo('<meta http-equiv="refresh" content="0;url=../listaAlunos
		.php">');
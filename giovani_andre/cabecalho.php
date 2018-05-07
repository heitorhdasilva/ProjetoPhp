<?php
	session_start();
?>	
<!DOCTYPE html>
<html>
<head>

	
	<link rel="stylesheet" type="text/css" href="css/completo.css">


	
	<title>Todos professores</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>
		<h1 id="nome_site">Agenda de tarefas</h1>
		<div id="perfil">

<?php
	//isset() - verifica se uma variável está definida
	if (isset($_SESSION['login'])){ //SE ESTIVER LOGADO
	
?>
		<!-- MENSAGEM QUANDO LOGADO -->
			<p>Usuário: Administrador</p>
			<a href="login/logout.php">Sair</a>	
		<!-- MENSAGEM QUANDO LOGADO -->	
<?php
	}else{ //SE NÃO ESTIVER LOGADO
?>
		<!-- FORM DE LOGIN -->
		<section class="ajeita">
			<form  id="login" method="post" action="login/login.php">
				<label for="login">Login</label>
				<input type="text" name="login">
				<br>
				<label for="senha">Senha</label>
				<input type="password" name="senha">
				<br>
				<input type="submit" name="enviar">
			</form>
		</section>	
		
		</div>
		<!-- FORM DE LOGIN -->
<?php 
	}
?>	


	</header>
	<div class='divider'></div>
	<!-- menu -->
	<!-- PARTE COM JS -->
	<nav class="menu">
		<a href=""><section class="item menu  ativo" id="Tab1">Próximas tarefas</section></a>
		<a href=""><section class="item menu " id="Tab2">Todas Tarefas</section></a>
		<a href="listaDisciplinas.php"><section class="item menu " id="Tab3">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu " id="Tab4">Tarefas por data</section></a>
		<a href="listaProfessores.php"><section class="item menu " id="Tab5">Professores</section></a>
		<a href="listaAlunos.php"><section class="item menu " id="Tab6">Colegas</section></a>
	</nav>
	<!--PARTE COM JS -->
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>

	
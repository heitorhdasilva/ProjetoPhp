<?php
	include("cabecalho.php");
	include("alunos.php");

	$siape = ($_GET)['cod'];

	$aluno = buscaAlunos($siape);
	?>

			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/script3.js"></script>
			<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<!-- conteudo principal -->
	<!-- Parte com JS -->
	<article class="coluna80">
		<section class="foto pequenas">
			<img  class="clicavel"  id="img1" src="<?=$aluno['foto']?>">
		</section>

		<section class="modal img1 escondido">
			<section class="fechar">X</section>
			<img src="<?=$aluno['foto']?>" class="grande">
		</section>

	<!-- Parte com JS -->

		<section class="dados">
			<p>Nome: <?=$aluno['nome'] ?></p>
			<p>Email: <?=$aluno['email'] ?></p>
			<p>Turma: <?=$aluno['turma'] ?></p>
			<p>Matrícula: <?=$aluno['matricula'] ?> </p>
		
		</section>
	</article>


<?php
	include("rodape.php");
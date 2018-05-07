<?php
	include("cabecalho.php");
	include("professores.php");
	include("disciplinas");

	$siape = ($_GET)['cod'];

	$professor = buscaProfessor($siape);
	
	?>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/script3.js"></script>
			<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<!-- conteudo principal -->
	<!-- Parte com JS -->

	<article class="coluna80">
		<section class="foto pequenas">
			<img  class="clicavel"  id="img1" src="<?=$professor['foto']?>">
		</section>

		<section class="modal img1 escondido">
			<section class="fechar">X</section>
			<img src="<?=$professor['foto']?>" class="grande">
		</section>

	<!-- Parte com JS -->


		

		<section class="dados">
			<p>Nome: <?=$professor['nome'] ?></p>
			<p>Email: <?=$professor['email'] ?></p>
			<p>Disciplinas:</p>
			<p>Sala: B7</p>

		</section>
	</article>

<?php
	include("rodape.php");

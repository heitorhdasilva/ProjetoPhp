<?php 
include("cabecalho.php");
?>
	<!-- conteudo principal -->
	<article class="coluna80">
		<section class="lista">
<?php
if(isset($_SESSION['login'])){				
?>					
	<a href="formProfessor.php">Novo Professor</a>
<?php
	}
?>
		<ul>
<?php
	include("professores.php");

	$lista = listaProfessores();
	
	foreach ($lista as $professor) {
?>
		<li><a href="detalhaProfessor.php?cod=<?=$professor['siape'] ?>">
		<?=$professor['nome'] ?></a></li>	
<?php
	}
?>
	</ul>
	</section>
   </article>	
<?php
	include("rodape.php");
?>
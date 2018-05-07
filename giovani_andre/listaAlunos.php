<?php
  include("cabecalho.php");
 include("alunos.php");

?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">

<article class="coluna80">
<!-- Parte com JS -->
<section>
		<div id="p_ajuste">.</div>

			<a class="tab ativo" id="tab1">1INFO1</a>
			<a class="tab" id="tab2">1INFO2</a>
			<a class="tab" id="tab3">1INFO3</a>
		<br>	
		<div id="p_ajuste1">.</div>

	<div id="meio">
		<section class="lista conteudo tab1" id="cont1">
		
			<ul>

	<?php	

		$lista = listaAlunosTurma('1info1');

		foreach ($lista as $aluno) {
	?>
			<li><a href="detalhaAluno.php?cod=<?=$aluno['Matricula'] ?>">
			<?=$aluno['Nome'] ?></a></li>	
	<?php
		}
	?>
			</ul>
		</section>
			<section class="lista conteudo tab2 escondido" id="cont2">
		
			<ul>
	<?php	

		$lista = listaAlunosTurma('1info2');

		foreach ($lista as $aluno) {
	?>
			<li><a href="detalhaAluno.php?cod=<?=$aluno['Matricula'] ?>">
			<?=$aluno['Nome'] ?></a></li>	
	<?php
		}
	?>
			</ul>
		</section>
		<section class="lista conteudo tab3 escondido" id="cont3">
			
			<ul>
	<?php	

		$lista = listaAlunosTurma('1info3');

		foreach ($lista as $aluno) {
	?>
			<li><a href="detalhaAluno.php?cod=<?=$aluno['Matricula'] ?>">
			<?=$aluno['Nome'] ?></a></li>	
	<?php
		}
	?>
			</ul>
		</section>
	</div>	
</article>	
</section>

<!-- Parte com JS -->

<?php
	include("rodape.php");
?>
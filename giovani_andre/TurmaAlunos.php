<?php
  include("cabecalho.php");
  include("alunos.php");	
?>
<article class="coluna80">
	<section class="lista">
		<ul>1info1
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
	<section class="lista">
		<ul>1info2
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
	<section class="lista">
		<ul>1info3
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
</article>	
<?php
	include("rodape.php");
?>
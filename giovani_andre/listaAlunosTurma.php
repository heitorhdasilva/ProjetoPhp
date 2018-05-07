<?php
  include("cabecalho.php");
 
?>
<article class="coluna80">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<section class="lista">
		<a class="tab ativo" id="tab1 ativo">Primeiro</a>
		<a class="tab" id="tab2">Segundo</a>
		<a class="tab" id="tab3">Terceiro</a>
	<section>
		<section>
			<section class="conteudo tab1" id="cont1">
				<ul>1info1
				<?php
					include("alunos.php");	

					$lista = listaAlunosTurma($1nfo1);

					foreach ($lista as $aluno) {
				?>
					<li><a href="detalhaAluno.php?cod=<?=$aluno['Matricula'] ?>">
					<?=$aluno['Nome'] ?></a></li>	
				<?php
					}
				?>
				</ul>
			</section>
		</section>
	</section>
</article>	
<?php
	include("rodape.php");
?>
<link rel="stylesheet" type="text/css" href="completo.css">
<?php
	include("cabecalho.php");
?>
	<article class="coluna80">
		<section>
<?php
if(isset($_SESSION['login'])){				
?>		
		
		<form method="POST"  action="insereProfessor.php" enctype="multipart/form-data" class="ajeita">
					<label for="siape">SIAPE</label>
					<input type="text" name="siape">
					<br>
					<label for="nome">Nome</label>
					<input type="text" name="nome">
					<br>
					<label for="email">E-mail</label>
					<input type="email" name="email">
					<br>
					<label for="foto">Foto</label>
					<input type="file" name="foto">
					<br><br>
					<input type="submit" name="Gravar" value="enviar">
		</form>
	</div>

<?php
	}else{
		echo('<meta http-equiv="refresh"content="0;url=listaProfessores.php">');
	}
?>
		</section>
	
	</article>

<?php 
	include ("rodape.php");
 ?>
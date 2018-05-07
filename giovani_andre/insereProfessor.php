<pre>
<?php

	$origem = $_FILES['foto']['tmp_name'];

	$destino = "imagens/professores/".$_FILES['foto']['name'];

	move_uploaded_file($origem, $destino);

	$siape = $_POST['siape'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$foto = $_POST['foto'];

	//linha que será escrita no arquivo CSV
	$linha = "\n".$siape.",".$nome.",".$email.",".$foto;

	//NÃO ESQUECER DE VERIFICAR AS PERMISSÕES DO ARQUIVO CSV
	//abre o arquivo
	$arquivo = fopen("dados/professores.csv", "a+");

	//escreve a linha no arquivo
	fwrite($arquivo, $linha);

	//fechar salvando o arquivo
	echo('<meta http-equiv="refresh"content="0;url=listaProfessores.php">');
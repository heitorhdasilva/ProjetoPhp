<?php

function listaAlunos($turma){
		$alunos = array();

		$dados = file("dados/alunos.csv");
		foreach ($dados as $posicao=>$linha) {
			if ($posicao != 0) {							
				$colunas = explode(",", $linha);        
						
					$aluno = array();
					$aluno['Matricula'] = $colunas[0];
					$aluno['Nome'] = $colunas[1];
					$aluno['Turma'] = $colunas[2];
					$aluno['Email'] = $colunas[3];  
					$aluno['Foto'] = $colunas[4];   
					$alunos[] = $aluno;
				
		  	}			
		}
		return $alunos;
	
}



	
			
function buscaAlunos($codigo){	
	$aluno = array();
	$dados = file("dados/alunos.csv");
			foreach ($dados as $posicao => $linha) {
				$colunas = explode(",", $linha);
				if ($colunas[0] == $codigo) {
					$aluno['matricula'] = $colunas[0];
					$aluno['nome'] = $colunas[1];
					$aluno['turma'] = $colunas[2];
				$aluno['email'] = $colunas[3];
				$aluno['foto'] = $colunas[4];
				$aluno['foto']='imagens/pessoa.jpg';
			}
		}
		return $aluno;
}

function listaALunosTurma($turma){
	$alunos = array();

		$dados = file("dados/alunos.csv");
		foreach ($dados as $posicao=>$linha) {
			if ($posicao != 0) {							
				$colunas = explode(",", $linha);        
				if( $colunas[2]==$turma){			
					$aluno = array();
					$aluno['Matricula'] = $colunas[0];
					$aluno['Nome'] = $colunas[1];
					$aluno['Turma'] = $colunas[2];
					$aluno['Email'] = $colunas[3];  
					$aluno['Foto'] = $colunas[4];   
					$alunos[] = $aluno;
				}
		  	}			
		}
		return $alunos;
}
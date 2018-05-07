<?php

//	ARQUIVO COM FUNÇÕES PARA MANIPULAÇÃO DOS DADOS DE PROFESSORES

	function buscaProfessor($codigo){
		$professor = array();
		$dados = file("dados/professores.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0] == $codigo) {
				$professor['siape'] = $colunas[0];
				$professor['nome'] = $colunas[1];
				$professor['email'] = $colunas[2];
				if(isset($colunas[3])){
					$professor['foto'] = $colunas[3];
				}else{
					$professor['foto']='imagens/pessoa.jpg';
				}
			}
		}
		

		
		return $professor;
	}
	




	function listaProfessores(){
		$professores = array();

		$dados = file("dados/professores.csv");
		foreach ($dados as $posicao=>$linha) {
			if ($posicao != 0) {							
				$colunas = explode(",", $linha);        


				$professor = array();
				$professor['siape'] = $colunas[0];
				$professor['nome'] = $colunas[1];
				$professor['email'] = $colunas[2];
				$professor['foto'] = $colunas[3];   
				$professores[] = $professor;
		  }			
		}
		return $professores;
	}


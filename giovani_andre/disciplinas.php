<?php 

	function listaDisciplinas(){
		$disciplinas=array();
		$dados = file("dados/disciplinas.csv");
		foreach ($dados as $posicao => $linha) {
			$colunas = explode(",",$linha);
			$disciplinas['codigo'] = $colunas[0];
			$disciplinas['nome'] = $colunas[1];
			$disciplina[] = $disciplinas;				
		}
		return $disciplina;
	}
	


	function buscaDisciplina($codigo){
		$disciplina = array();
		$dados = file("dados/disciplinas.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0] == $codigo) {
				$disciplina['codigo'] = $colunas[0];
				$disciplina['nome'] = $colunas[1];
				
			}
		}
		return $disciplina;
	}


	function  listaOfertas($ano, $turma){
		$dados = file("dados/ofertas.csv");
		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if (($colunas[0] == $ano) and ($colunas[1] == $turma)){
				$disciplina['ano'] = $colunas[0];
				$disciplina['turma'] = $colunas[1];			
				$disciplina['cod_disciplina'] = $colunas[2];
				$disciplina['cod_professor'] = $colunas[3];
				$disciplinas[] = $disciplina;
			}
		}
		return $disciplinas;

	}
	
?>
$(document).ready(function(){
	$(".tab").click(function(){
		var id;
		/*Pegar id de quem clicou*/
		id = $(this).attr('id');

		/*Esconder todos os conteudos*/
		$('.conteudo').addClass('escondido');
		
		/*Aparecer o conteudo relativo a tab clicada*/
		$("."+id).removeClass('escondido');

		/*Tirar o status de ativo das tabs*/
		$(".tab").removeClass('ativo');

		/*Manter somente a tab clicada como ativo*/
		$("#"+id).addClass('ativo');
	})
})
/*$(document).ready(function(){
	alert(".clicavel");
})*/
$(document).ready(function(){
	$(".clicavel").click(function(){
		$(".modal").removeClass("escondido");
	})

	$(".fechar").click(function(){
		$(".modal").addClass("escondido");
	})
})


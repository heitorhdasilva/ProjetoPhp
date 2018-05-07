$(document).ready(function(){

	 $(".listaJogos").hover(function(){
        var id;
        id = $(this).attr("id");
       $(".texto"+id).hide("fast");
    });

    $(".listaJogos").mouseover(function(){
       var id;
        id = $(this).attr("id");
       $(".texto"+id).show("fast");
    });

    $(".slide").mouseenter(function(){
        $(".boxinha").fadeIn(".twitch");
    })

    $(".boxinha").mouseleave(function(){
        $(".boxinha").fadeOut(".twitch");
    })

})

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
        $(".boxinha").toggle(".twitch");
    })

    $(".boxinha").mouseleave(function(){
        $(".boxinha").toggle(".twitch");
    })

})

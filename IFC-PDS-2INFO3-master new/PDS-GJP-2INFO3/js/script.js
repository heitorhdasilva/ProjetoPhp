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

    //parte do pub

    $("#img1").mouseenter(function(){
        $(".boxinha1").fadeIn(".twitch1");
    })

    $(".boxinha1").mouseleave(function(){
        $(".boxinha1").fadeOut(".twitch1");
    })

    //parte do lol

    $("#img2").mouseenter(function(){
        $(".boxinha2").fadeIn(".twitch2");
    })

    $(".boxinha2").mouseleave(function(){
        $(".boxinha2").fadeOut(".twitch2");
    })

    //parte do the last of us

    $("#img3").mouseenter(function(){
        $(".boxinha3").fadeIn(".twitch3");
    })

    $(".boxinha3").mouseleave(function(){
        $(".boxinha3").fadeOut(".twitch3");
    })

})

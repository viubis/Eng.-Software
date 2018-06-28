$(document).ready(function(){
    var itemCont = 1;
    $("#novaImg").click(function(){
        var novoItem = $("#item").clone();

        var novoSelect = $(novoItem).children()[3];

        $("#formulario").append(novoItem);
    });
});

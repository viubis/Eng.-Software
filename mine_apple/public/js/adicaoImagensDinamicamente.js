$(document).ready(function(){
    var itemCont = 2;
    $("#novaImg").click(function(){
        if(itemCont<4) {
            var novoItem = $("#item").clone();
            $(novoItem).attr("name", "imagem" + itemCont);

            var novoSelect = $(novoItem).children()[3];

            $("#formulario").append(novoItem);
            itemCont++;
        }
        else{
            alert("É possível cadastrar, no máximo, 3 imagens.");
        }
    });
});

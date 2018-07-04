jQuery(document).ready(function () {

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });



    $("#estados").on("change", function(){
        var idEstado = $("#estados").val();

        jQuery.ajax({
                  url: '/adiciona_carrinho',
                  dataType: "html",
                  method: 'post',
                  data: {
                     _token: $('meta[name="csrf-token"]').attr('content'),
                     id: id,
                     nome: nome,
                     quantidade: quantidade,
                     descricao: descricao,
                     preco: preco,
                     embalagem: embalagem
                  },
                  success: function(result){
                     alert("Adicionado com sucesso");
                }});
    });








});
jQuery(document).ready(function () {

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });


	$("td :submit").click(function(e){

		e.preventDefault();

		jQuery.ajax({
                  url: '/adicionar_carrinho',
                  method: 'post',
                  data: {
                     _token: $('meta[name="csrf-token"]').attr('content'),
                     id: id,
                     nome: nome,
                     quantidade: quantidade,
                     descricao: descricao,
                     preco: preco
                  },
                  success: function(){
                     alert("Adicionado com sucesso");
                }});    
	});




});
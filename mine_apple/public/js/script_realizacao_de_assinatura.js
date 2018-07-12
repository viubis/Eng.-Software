jQuery(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });



    $("#estados").on("change", function(){
        var idEstado = $("#estados").val();

        jQuery.ajax({
                  url: '/valida_cartao',
                  dataType: "html",
                  method: 'post',
                  data: {
                     _token: $('meta[name="csrf-token"]').attr('content'),
                     estado: idEstado
                  },
                  success: function(result){
                     $("#cidades").html(result);
                }});
    });

    


});
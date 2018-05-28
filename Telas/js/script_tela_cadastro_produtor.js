jQuery(document).ready(function () {

			$.getJSON('js/estados_cidades.json', function (data) {
				var items = [];
				var options = '<option value="">escolha um estado</option>';	
				$.each(data, function (key, val) {
					options += '<option value="' + val.nome + '">' + val.nome + '</option>';
				});					
				$("#estados").html(options);				
				
				$("#estados").change(function () {				
				
					var options_cidades = '';
					var str = "";					
					
					$("#estados option:selected").each(function () {
						str += $(this).text();
					});
					
					$.each(data, function (key, val) {
						if(val.nome == str) {							
							$.each(val.cidades, function (key_city, val_city) {
								options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
							});							
						}
					});
					$("#cidades").html(options_cidades);
					
				}).change();		
			
			});










    /*
        Fullscreen background
    */
    $.backstretch("images/background_tela_de_login.jpg");

    $('#top-navbar-1').on('shown.bs.collapse', function () {
        $.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function () {
        $.backstretch("resize");
    });

    /*
        Form
    */
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"], .registration-form input[type="password"], .registration-form textarea').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            }
            else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"], input[type="password"], textarea').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            }
            else {
                $(this).removeClass('input-error');
            }
        });

    });


});

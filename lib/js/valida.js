(function($) {
    $.fn.validar = function(options) {
        return this.each(function() {
            var ant = new Array();
            var cont = 0;
            $(options.div_sel).children().each(function() {
                for (var i = 0; i < $(this).get(0).attributes.length; i++) {
                    if ($(this).get(0).attributes[i].nodeName == 'obrigatorio') {
                        ant[cont] = $(this).val();
                        cont++;
                    }
                }
            });
            $(this).submit(function() {
                var erros = 0;
                var idx = 0;
                $(options.div_sel).children().each(function() {
                    for (var i = 0; i < $(this).get(0).attributes.length; i++) {
                        if ($(this).get(0).attributes[i].nodeName == 'obrigatorio') {
                            if ($(this).val() == ant[idx] && $(this).get(0).attributes[i].nodeValue != 'check')
                            {
                                $(this).addClass(options.classe);
                                erros++;
                            }
                            else
                            {
                                if ($(this).get(0).attributes[i].nodeValue == 'email')
                                {
                                    var email = $(this).val();
                                    var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                                    if (!filtro.test(email)) {
                                        $(this).addClass(options.classe);
                                        erros++;
                                    } else {
                                        $(this).removeClass(options.classe);
                                    }
                                }
                                else if ($(this).get(0).attributes[i].nodeValue == 'check')
                                {
                                    if (!$(this).is(':checked'))
                                    {
                                        $(this).addClass(options.classe);
                                        erros++;
                                    } else
                                    {
                                        $(this).removeClass(options.classe);
                                    }
                                }
                                else if ($(this).get(0).attributes[i].nodeValue == 'datanasc')
                                {
                                    var data = $(this).val();
                                    if (!validar_data(data))
                                    {
                                        $(this).addClass(options.classe);
                                        erros++;
                                    }
                                    else
                                    {
                                        $(this).removeClass(options.classe);
                                    }
                                }
                                else
                                {
                                    $(this).removeClass(options.classe);
                                }



                            }
                            idx++;
                            return true;
                        }
                    }
                });
                if (erros == 0) {
                    options.onclick_salv();
                    return false;
                } else {
                    return false;
                }
            });
        });
    };
})($);


function validar_data(data)
{
    var dta = data;
    var dia = dta.substring(0, 2);
    var mes = dta.substring(3, 5);
    var ano = dta.substring(6);
    var thedate = new Date(Date.parse(ano + '-' + mes + '-' + dia));
    if (thedate == 'Invalid Date')
    {
        return false;
    }
    else
    {
        return true;
    }
}
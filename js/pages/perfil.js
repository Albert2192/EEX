var url_post    = url_base + "perfil-data-post";
var $form       = $("#formulario");

$form.submit(function (e) {
    e.preventDefault();
    $.ajax({
        dataType: 'json',
        async: false,
        type: 'POST',
        url: url_post,
        cache: false,
        data: {
            q: 'change_pass',
            pass1: $("#Password").val(),
            pass2: $("#rePassword").val(),
        },
        beforeSend: function () {
        },
        success: function (data, status, xhr) {
            /* console.log(data); */
            if (data.status == "success") {
                $('#Password').val('');
                $('#rePassword').val('');
                mostrarAlerta(data.mensaje);
            } else {
                mostrarError(data.mensaje);
            }
        },
        error: function (jqXhr) {
            mostrarAlerta('Ocurrio un error intente de nuevo.');
            /* alertDismissJS($(jqXhr.responseText).text().trim(), "error"); */
        },
        complete: function () {
            /* $('#cargando_contenido').removeClass('active'); */
        }
    });
});

function mostrarAlerta(mensaje) {
    $('#alert_success').removeClass('hide')
    $('#alert_success').addClass('show')
    $('.message_success').text(mensaje);
    setTimeout(function () {
        $('#alert_success').addClass('hide')
        $('#alert_success').removeClass('show')
    }, 3000);
}

function mostrarError(mensaje) {
    $('#alert_danger').removeClass('hide')
    $('#alert_danger').addClass('show')
    $('.message_danger').text(mensaje);
    setTimeout(function () {
        $('#alert_danger').addClass('hide')
        $('#alert_danger').removeClass('show')
    }, 3000);
}
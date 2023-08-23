/* const url = url_base+'inc/auth.php'; */
var url = url_base+'auth';
const $form = $('#formulario');
$form.submit(function(e){
    e.preventDefault();
    $('#overlay').addClass('active');
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        cache: false,
        async: false,
        data: {q: 'login', usuario: $('#user').val(), pass: $('#pass').val()},
        beforeSend: function(){
        },
        success: function (data, textStatus, jqHRX) {
            if(data.status == 'ok'){
                setTimeout(function(){
                    location.reload();
                }, 2000)
            }else{
                setTimeout(function(){
                    $('#overlay').removeClass('active');
                    alert(data.mensaje);
                    reset();
                }, 2000)
            }
        }, 
        error: function (jqHRX) {
            alert(jqHRX.mensaje);
            $('#overlay').removeClass('active');
        },
        complete: function(data){
        }
    });
    
});

passwordVisible('#see_pass','#pass');

function alert(message){
    $('#alert_message').text(message);
    $('.alert').addClass('active');
    setTimeout(function(){
        $('.alert').removeClass('active');
    }, 3000);
}

const reset = ()=>{
    $('#user').val('');
    $('#user').focus();
    $('#pass').val('');
}

/* VISUALIZA LAS CONTRASEÑAS */
function passwordVisible(IDboton, IDcampoPassword) {
    $(IDboton).click(function () {
        if ($(IDcampoPassword).attr('type') == 'password') {
            $(IDcampoPassword).attr('type', 'text');
        } else {
            $(IDcampoPassword).attr('type', 'password');
        }
    });
}
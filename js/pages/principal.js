/* var url = url_base+'auth'; */
var url = url_base+'auth';
/* var url = url_base+'inc/auth.php'; */
$('#logout').click(function(e){
    e.preventDefault();
    $('#overlay').addClass('active');
    
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        cache: false,
        async: false,
        data: {q: 'logout'},
        beforeSend: function(){
        },
        success: function (data, textStatus, jqHRX) {
            if(data.status == 'ok'){
                $('#menu_perfil').removeClass('active');
                setTimeout(function(){
                    /* $('#overlay').removeClass('active'); */
                    location.reload();
                }, 2000);
            }else{
                $('#overlay').removeClass('active');
                alert(data.mensaje);
            }
        }, 
        error: function (jqHRX) {
            /* alert(jqHRX.mensaje); */
        },
        complete: function(data){
        }
    });
});

$('.user_container').click(function(){
    $('#menu_perfil').toggleClass('active');
});

$('.main_container').click(function(){
});

$("#configuracion").click(function (e) { 
    e.preventDefault();
    $('#menu_perfil').removeClass('active');
    /* alert('sdfasd') */
    $('#new_user').modal('show');
});
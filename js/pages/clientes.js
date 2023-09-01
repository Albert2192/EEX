var url_get     = url_base + "clientes-data";
var url_post    = url_base + "clientes-data-post";
var $tabla      = $('#tabla');
var $form       = $("#formulario");
var $modal      = $("#nuevo_cliente");

function formatterEstado(data) {
    let estado = ``;
    switch (data) {
        case "0":
            estado = `<span class="badge rounded-pill bg-warning">INACTIVO</span>`;
            break;
        case "1":
            estado = `<span class="badge rounded-pill bg-success">ACTIVO</span>`;
            break;
    }
    return estado;
}

/* BOTONES DE TABLA PALLET ACCION QR SQLSERVER */
window.accionesTabla = {
    'click .editar': function (e, value, row, index) {
        /* alert(row.cliente_id); */
        editarCliente(row)
    },
    'click .eliminar': function (e, value, row, index) {
        /* eliminarCliente(row.cliente_id) */
        alertaDesicion(row);
    },
    'click .cambiar_estado': function (e, value, row, index) {
        actualizarCliente(row.cliente_id, row.estado)
    },
}

function iconosTabla(value, row, index) {
    return `<div style="display: flex; justify-content: center; gap: 3px;">
                <button type="button" onclick="javascript:void(0)" class="btn btn-warning btn-sm cambiar_estado" title="Estado"><i class="fa fa-refresh"></i></button>
                <button type="button" onclick="javascript:void(0)" class="btn btn-danger btn-sm eliminar" title="Eliminar"><i class="fa fa-trash"></i></button>
                <button type="button" onclick="javascript:void(0)" class="btn btn-info btn-sm editar" title="Editar"><i class="fa fa-chevron-circle-right"></i></button>
            </div>`;
}

$tabla.bootstrapTable({
    url: url_get + '?q=ver',
    toolbar: '#toolbar',
    showExport: false,
    search: false,
    showRefresh: false,
    showToggle: false,
    showColumns: false,
    searchAlign: 'right',
    buttonsAlign: 'right',
    toolbarAlign: 'left',
    pagination: 'true',
    sidePagination: 'server',
    classes: 'table table-hover table-condensed-xs',
    striped: true,
    icons: 'icons',
    showFullscreen: false,
    mobileResponsive: false,
    sortName: "cliente_id",
    sortOrder: 'asc',
    trimOnSearch: false,
    /* loadingTemplate: cargando, */
    columns: [
        [
            { field: 'cliente_id', title: 'ID Cliente', align: 'center', valign: 'middle', sortable: false, visible: false, width: 5, widthUnit: "%", },
            { field: 'ruc_ci', title: 'R.U.C.', align: 'left', valign: 'middle', sortable: true, width: 10, widthUnit: "%", },
            { field: 'nombre_r_social', title: 'Razón Social', align: 'center', valign: 'middle', sortable: true, width: 10, widthUnit: "%", },
            { field: 'telefono', title: 'Teléfono', align: 'center', valign: 'middle', sortable: false, width: 10, widthUnit: "%", },
            { field: 'celular', title: 'Celular', align: 'center', valign: 'middle', sortable: false, width: 10, widthUnit: "%", },
            { field: 'email', title: 'E-mail', align: 'center', valign: 'middle', sortable: false, width: 10, widthUnit: "%", },
            { field: 'estado', title: 'Estado', align: 'center', valign: 'middle', sortable: false, formatter: formatterEstado, width: 10, widthUnit: "%", },
            { field: 'acciones', title: 'Acciones', align: 'center', valign: 'middle', sortable: false, events: accionesTabla, formatter: iconosTabla, width: 10, widthUnit: "%", },
        ]
    ],
}).on('dbl-click-row.bs.table', function (e, row, $element) {
    /* $('#selected_pallet').val(row.pallet);
    $('#caja_orden').val(row.Ncaja);
    $('#tabla_cajas').bootstrapTable('refresh', { url: url + '?q=ver_cajas_server&pallet=' + row.pallet }); */
});

$form.submit(function (e) {
    e.preventDefault();
    $.ajax({
        dataType: 'json',
        async: false,
        type: 'POST',
        url: url_post,
        cache: false,
        data: {
            q: $('#formulario').attr('action'),
            id: $("#id_cliente").val(),
            ruc: $("#ruc").val(),
            nombre: $("#nombre").val(),
            email: $("#email").val(),
            telefono: $("#telefono").val(),
            celular: $("#celular").val(),
            direccion: $("#direccion").val(),
            obs: $("#obs").val(),
            action: $('#formulario').attr('action'),
        },
        beforeSend: function () {
        },
        success: function (data, status, xhr) {

            if (data.status == "success") {
                $("#formulario")[0].reset();
                $("#nuevo_cliente").modal('hide');
                $tabla.bootstrapTable('refresh');
                mostrarAlerta(data.mensaje);
            } else {
                mostrarError(data.mensaje);
            }
        },
        error: function (jqXhr) {
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

$('#probar').click(function (e) {
    e.preventDefault();
    mostrarAlerta('Mensaje de prueba');
});

function editarCliente(row){
    $('#id_cliente').val(row.cliente_id);
    $('#ruc').val(row.ruc_ci);
    $('#nombre').val(row.nombre_r_social);
    $('#email').val(row.email);
    $('#telefono').val(row.telefono);
    $('#celular').val(row.celular);
    $('#direccion').val(row.direccion);
    $('#obs').val(row.obs);
    $('#guardar').addClass('d-none');
    $('#editar').removeClass('d-none');
    $('#titulo_Modal').text('Modificar Cliente');
    $('#formulario').attr('action', 'editar');
    $modal.modal('show');
}

function alertaDesicion(row){
    $('#contenedor_option').addClass('active');
    $('#cliente_eliminacion').text(row.nombre_r_social);
    $('#aceptar_eliminacion').attr("data-id", row.cliente_id);
}

function eliminarCliente(id_cliente) {
    $.ajax({
        dataType: 'json',
        async: false,
        type: 'POST',
        url: url_post,
        cache: false,
        data: { q: 'eliminar', id: id_cliente },
        beforeSend: function () {
        },
        success: function (data, status, xhr) {
            if (data.status == "success") {
                $tabla.bootstrapTable('refresh');
                $('#contenedor_option').removeClass('active');
                mostrarAlerta(data.mensaje);
            } else {
                $('#contenedor_option').removeClass('active');
                mostrarError(data.mensaje);
            }
        },
        error: function (jqXhr) {
            /* alertDismissJS($(jqXhr.responseText).text().trim(), "error"); */
        },
        complete: function () {
        }
    });
}

function actualizarCliente(id_cliente, estado) {
    $.ajax({
        dataType: 'json',
        async: false,
        type: 'POST',
        url: url_post,
        cache: false,
        data: { q: 'estado', id: id_cliente, estado: estado },
        beforeSend: function () {
        },
        success: function (data, status, xhr) {
            if (data.status == "success") {
                $tabla.bootstrapTable('refresh');
                mostrarAlerta(data.mensaje);
            } else {
                mostrarError(data.mensaje);
            }
        },
        error: function (jqXhr) {
            /* alertDismissJS($(jqXhr.responseText).text().trim(), "error"); */
        },
        complete: function () {
        }
    });
}

$("#cancelar").click(function (e) {
    e.preventDefault();
    $("#formulario")[0].reset();
});

$("#boton_cliente").click(function (e) {
    e.preventDefault();
    $("#formulario")[0].reset();
    $('#titulo_Modal').text('Agregar Cliente');
    $('#editar').addClass('d-none');
    $('#guardar').removeClass('d-none');
    $('#formulario').attr('action', 'cargar');
});

$('#cancelar_eliminacion').click(function (e) { 
    e.preventDefault();
    $('#contenedor_option').removeClass('active');
});

$('#aceptar_eliminacion').click(function (e) { 
    e.preventDefault();
    let id = $(this).attr('data-id');
    eliminarCliente(id);
});
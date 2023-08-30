var url_get = url_base + "clientes-data";
var url_post = url_base + "clientes-data-post";
const $tabla = $('#tabla');
var $form = $("#formulario");

function formatterEstado(data) {
    switch (data) {
        /* case 'DESPACHADO':
            return `<span style="text-transform: uppercase;" class="badge badge-pill badge-success">${data}</span>`;
            break;
        case 'DESPACHO':
            return `<span style="text-transform: uppercase;" class="badge badge-pill badge-info">${data}</span>`;
            break; */
        default:
            return `<span class="badge rounded-pill bg-success">ACTIVO</span>`;
    }
}

/* BOTONES DE TABLA PALLET ACCION QR SQLSERVER */
window.accionesTabla = {
    'click .editar': function (e, value, row, index) {
        /* let codigo = row.pallet;
        $("#btnDescargar").attr('data-downloadName', 'Pallet - ' + codigo);
        $('#qr_title').html('Pallet - ' + codigo);
        generarQR(codigo); */
        alert(row.cliente_id);
        /* console.log(row); */
    },
}

function iconosTabla(value, row, index) {
    return [
        `<div style="display: flex; justify-content: center; gap: 3px;">
            <button type="button" onclick="javascript:void(0)" class="btn btn-info btn-sm editar" title="Editar Pallet"><i class="fa fa-chevron-circle-right"></i></button>
        </div>`
    ].join('');
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
            { field: 'ruc_ci', title: 'R.U.C.', align: 'left', valignA: 'middle', sortable: true, width: 10, widthUnit: "%", },
            { field: 'nombre_r_social', title: 'Razón Social', align: 'center', valignA: 'middle', sortable: true, width: 10, widthUnit: "%", },
            { field: 'telefono', title: 'Teléfono', align: 'center', valignA: 'middle', sortable: true, width: 10, widthUnit: "%", },
            { field: 'celular', title: 'Celular', align: 'center', valignA: 'middle', sortable: true, width: 10, widthUnit: "%", },
            { field: 'email', title: 'E-mail', align: 'center', valignA: 'middle', sortable: true, width: 10, widthUnit: "%", },
            { field: 'estado', title: 'Estado', align: 'center', valignA: 'middle', sortable: true, formatter: formatterEstado, width: 10, widthUnit: "%", },
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
    /* console.log("enviando"); */
    $.ajax({
        dataType: 'json',
        async: false,
        type: 'POST',
        url: url_post,
        cache: false,
        data: {
            q: 'cargar',
            ruc: $("#ruc").val(),
            nombre: $("#nombre").val(),
            email: $("#email").val(),
            telefono: $("#telefono").val(),
            celular: $("#celular").val(),
            direccion: $("#direccion").val(),
            obs: $("#obs").val(),
        },
        beforeSend: function () {
            /* NProgress.start();
            $('#cargando_contenido').addClass('active'); */
        },
        success: function (data, status, xhr) {

            if(data.status == "success"){
                $("#formulario")[0].reset();
                $("#nuevo_cliente").modal('hide');
                $tabla.bootstrapTable('refresh');
            }
            /* console.log(data.rows) */
/*             setTimeout(function () {
                alertDismissJS(data.mensaje, data.status);
                $('#cargando_contenido').removeClass('active');
            }, 2000) */
        },
        error: function (jqXhr) {
            /* $('#cargando_contenido').removeClass('active');
            alertDismissJS($(jqXhr.responseText).text().trim(), "error"); */
        },
        complete: function () {
            /* $('#cargando_contenido').removeClass('active'); */
        }
    });
});
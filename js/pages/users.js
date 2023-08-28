url_listados = url_base + "inc/listados";
/* url_listados = url_base + "inc/listados.php"; */

const $select2_rol = $("#rol");

$select2_rol.select2({
    theme: "bootstrap4",
    placeholder: "Seleccione Rol",
    width: "auto",
    height: "40",
    allowClear: true,
    selectOnClose: false,
    ajax: {
        url: url_listados,
        dataType: "json",
        delay: 50,
        cache: false,
        async: true,
        data: function (params) {
            return { q: "roles", term: params.term, page: params.page || 1 };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;
            return {
                results: $.map(data.data, function (obj) {
                    return {
                        id: obj.id,
                        text: obj.rol,
                    };
                }),
                pagination: { more: params.page * 5 <= data.total_count },
            };
        },
        cache: false,
    },
});
const url_listados      = url_base + "listados";
const $select2_rol      = $("#rol");
const $select2_pais     = $("#pais");
const $select2_ciudad   = $("#ciudad");

const img       = document.getElementById('img');
const input     = document.getElementById('input');
const nombre    = document.getElementById('name');
const spinner   = document.getElementById('spinner');

input.onchange = (e)=>{
    spinner.classList.add('active');
    if(input.files[0]){
        img.src = URL.createObjectURL(input.files[0]);
        nombre.value = input.files[0].name;

    }
    setTimeout(()=>{spinner.classList.remove('active');}, 2000);
};

$select2_rol.select2({
    theme: "bootstrap4",
    placeholder: "Seleccione Rol",
    width: "auto",
    height: "40",
    allowClear: false,
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
$select2_pais.select2({
    theme: "bootstrap4",
    placeholder: "Seleccione Pais",
    width: "auto",
    height: "40",
    allowClear: false,
    selectOnClose: false,
    ajax: {
        url: url_listados,
        dataType: "json",
        delay: 50,
        cache: false,
        async: true,
        data: function (params) {
            return { q: "paises", term: params.term, page: params.page || 1 };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;
            return {
                results: $.map(data.data, function (obj) {
                    return {
                        id: obj.id,
                        text: obj.pais,
                    };
                }),
                pagination: { more: params.page * 5 <= data.total_count },
            };
        },
        cache: false,
    },
});

$select2_pais.on('change', function (e) {
    /* var data = e.params.data; */
    var pais_id = $(this).select2('data')[0].id;
    
    $select2_ciudad.val(null).trigger('change');
    $select2_ciudad.select2({
        theme: "bootstrap4",
        placeholder: "Seleccione Ciudad",
        width: "auto",
        height: "40",
        allowClear: false,
        selectOnClose: false,
        ajax: {
            url: url_listados+"?pais="+pais_id,
            dataType: "json",
            delay: 50,
            cache: false,
            async: true,
            data: function (params) {
                return { q: "ciudades", pais: pais_id, term: params.term, page: params.page || 1 };
            },
            processResults: function (data, params) {
                params.page = params.page || 1;
                return {
                    results: $.map(data.data, function (obj) {
                        return {
                            id: obj.id,
                            text: obj.ciudad,
                        };
                    }),
                    pagination: { more: params.page * 5 <= data.total_count },
                };
            },
            cache: false,
        },
    });
});

$select2_ciudad.select2({
    theme: "bootstrap4",
    placeholder: "Seleccione Ciudad",
    width: "auto",
    height: "40",
    allowClear: true,
    selectOnClose: false,
    /* ajax: {
        url: url_listados,
        dataType: "json",
        delay: 50,
        cache: false,
        async: true,
        data: function (params) {
            return { q: "paises", term: params.term, page: params.page || 1 };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;
            return {
                results: $.map(data.data, function (obj) {
                    return {
                        id: obj.id,
                        text: obj.pais,
                    };
                }),
                pagination: { more: params.page * 5 <= data.total_count },
            };
        },
        cache: false,
    }, */
});


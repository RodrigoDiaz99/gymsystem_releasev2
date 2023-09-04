$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    $("#gridProductos").bootstrapTable({
        url: getProductos,
        classes: "table-striped",
        method: "post",
        locale: "es-MX",
        contentType: "application/x-www-form-urlencoded",
        theadClasses: "text-primary", // Agrega la clase table-dark al thead
        pagination: true,
        pageSize: 10,
        striped: true,
        pagination: true,
        search: true,
        pageSize: 10,
        columns: [
            { field: "id", title: "iIDCategoria", visible: false },
            { field: "nombre_categoria", title: "Nombre", visible: true },

            {
                field: "created_at",
                title: "Fecha Creacion",

                visible: true,
            },
            {
                field: "cedicion",
                title: "Acciones",
                formatter: "accionesFormatter",
            },
        ],
        onLoadSuccess: (data) => {},
    });
    $('#inventario').change(function() {
        if(this.checked) {
            $('#camposCantidadAlertas').show();
        } else {
            $('#camposCantidadAlertas').hide();
        }
    });
    $('#formCreateProductos').submit(function(event) {
        // Validar campos manualmente si es necesario
        if ($('#inventario').is(':checked')) {
            let cantidad = $('#cantidad_product').val();
            let alertaMinima = $('#alerta_min').val();
            let alertaMaxima = $('#alerta_max').val();

            if (cantidad === '' || alertaMinima === '' || alertaMaxima === '') {
                // Mostrar mensajes de error debajo de los campos vacíos
                if (cantidad === '') {
                    $('#error-cantidad').text('Este campo es obligatorio.');
                } else {
                    $('#error-cantidad').text('');
                }

                if (alertaMinima === '') {
                    $('#error-alertaMinima').text('Este campo es obligatorio.');
                } else {
                    $('#error-alertaMinima').text('');
                }

                if (alertaMaxima === '') {
                    $('#error-alertaMaxima').text('Este campo es obligatorio.');
                } else {
                    $('#error-alertaMaxima').text('');
                }

                event.preventDefault(); // Evita que el formulario se envíe si hay campos faltantes
            } else {
                // Limpiar los mensajes de error si todos los campos están completos
                $('.error').text('');
            }
        }
    });

});
function accionesFormatter(value, row) {
    let html = "";
    const iIDCategoria = row.id;
    console.log(row);
    html += `<a rel="tooltip" title="Editar" class="btn btn-warning" href="javascript:void(0)" onclick="EditarCategoria(${iIDCategoria})"><i class="fas fa-edit"></i></a>&nbsp`;

    return html;
}
function EditarCategoria(iIDCategoria) {
    $.ajax({
        url: CategoriasUpdate,
        type: "POST",
        encoding: "UTF-8",
        async: true,
        cache: false,
        data: {
            iIDCategoria: iIDCategoria,
        },
        beforeSend: function () {
            NProgress.start();
            NProgress.set(0.4);
            Swal.fire({
                title: "Categoría",
                text: "Buscando Categoría....",
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            swal.close();
            NProgress.done();
            const iIDCategoria = data.id;
            const NombreCategoria = data.nombre_categoria;
            const url = `${categoriasEditRoute}/${iIDCategoria}`;
            // Actualiza la acción del formulario con la URL completa
            const editarCategoriaForm = $("#editarCategoriaForm");
            editarCategoriaForm.attr("action", url);
            $("#modalEdit").modal("show");
            $("#nombre_categoria_edit").val(NombreCategoria);
        },
    });
}

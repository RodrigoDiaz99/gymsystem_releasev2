$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    $("#gridCategorias").bootstrapTable({
        url: getCategorias,
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

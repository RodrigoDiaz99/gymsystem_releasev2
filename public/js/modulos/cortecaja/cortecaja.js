$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    $("#gridCorteCaja").bootstrapTable({
        url: getCorteCaja,
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
            { field: "id", title: "ID", visible: false },
            { field: "nombre_membresia", title: "Nombre", visible: true },

            {
                field: "fecha_inicio",
                title: "Fecha Inicio",
                visible: true,
            },
            {
                field: "fecha_final",
                title: "Fecha Final",
            },
            {
                field: "cantidad_inicial",
                title: "Cantidad Apertura",

            },
            {
                field: "cantidad_final",
                title: "Cantidad Apertura",

            },
            {
                field: "total_venta",
                title: "Cantidad Apertura",

            },
            {
                field: "diferencia",
                title: "Cantidad Apertura",

            },
            {
                field: "diferencia",
                title: "Cantidad Apertura",

            },

        ],
        onLoadSuccess: (data) => {},
    });





});
function accionesFormatter(value, row) {
    let html = "";
    const iIDMembresia = row.id;
    console.log(row);
    html += `<a rel="tooltip" title="Editar" class="btn btn-warning" href="javascript:void(0)" onclick="EditarMembresia(${iIDMembresia})"><i class="fas fa-edit"></i></a>&nbsp`;

    return html;
}

function EditarMembresia(iIDMembresia) {
    $.ajax({
        url: membresiasEdit,
        type: "POST",
        encoding: "UTF-8",
        async: true,
        cache: false,
        data: {
            iIDMembresia: iIDMembresia,
        },
        beforeSend: function () {
            NProgress.start();
            NProgress.set(0.4);
            Swal.fire({
                title: "Membresia",
                text: "Buscando Membresia....",
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            swal.close();
            NProgress.done();
            console.log(data)
            const iIDMembresia = data.id;
            const NombreMembresia = data.nombre_membresia;
            const Precio = data.precio;
            const DiasMembresia = data.dias_membresia;
            const DescripcionMembresia = data.descripcion_membresia;




            const url = `${membresiasUpdateroute}/${iIDMembresia}`;
            // Actualiza la acción del formulario con la URL completa
            const editarMembresiaForm = $("#editarMembresiaForm");
            editarMembresiaForm.attr("action", url);
            $("#modalEdit").modal("show");
            $("#nombre_membresia").val(NombreMembresia);
            $("#precio").val(Precio);
            $("#dias_membresia").val(DiasMembresia);
            $("#descripcion_membresia").val(DescripcionMembresia);


        },
    });
}

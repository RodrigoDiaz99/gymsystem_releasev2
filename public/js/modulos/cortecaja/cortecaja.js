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
                title: "Total Venta",

            },
            {
                field: "diferencia",
                title: "Diferencia",

            },
            {
                field: "users_id",
                title: "Usuario",

            },

        ],
        onLoadSuccess: (data) => {},
    });





});

$(function(){
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    $("#gridCategorias").bootstrapTable({
        // url: getSolicitudes,
        classes: "table-striped",
        method: "post",
        locale: "es-MX",
        contentType: "application/x-www-form-urlencoded",
        theadClasses: "text-primary", // Agrega la clase table-dark al thead
        queryParams: (p) => ({
            iIDSolicitud: $("#txtSolicitud").val(),
            iIDAnioFiscal: $("#txtAnioFiscal").val(),
        }),
        pagination: true,
        pageSize: 10,
        columns: [
            { field: "iIDSolicitud", title: "Solicitud", visible: true },
            { field: "iIDAnioFiscal", title: "Año Fiscal", visible: true },



            {
                field: "cEstatus",
                title: "Etapa",

                visible: true,
            },
            { field: "cedicion", title: "Acciones", formatter: "acciones" },
        ],
        onLoadSuccess: (data) => {

        },
    });
});

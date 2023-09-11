$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    $("#gridPrveedores").bootstrapTable({
        url: getProveedores,
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
            { field: "id", title: "iIDProveedor", visible: false },
            { field: "nombre_proveedor", title: "Nombre", visible: true },
            { field: "numero_telefono", title: "Número", visible: true },
            { field: "rfc", title: "RFC", visible: true },

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
    const iIDProveedor = row.id;
    console.log(row);
    html += `<a rel="tooltip" title="Editar" class="btn btn-warning" href="javascript:void(0)" onclick="EditarProveedor(${iIDProveedor})"><i class="fas fa-edit"></i></a>&nbsp`;

    return html;
}
function EditarProveedor(iIDProveedor) {
    $.ajax({
        url: proveedoresEdit,
        type: "POST",
        encoding: "UTF-8",
        async: true,
        cache: false,
        data: {
            iIDProveedor: iIDProveedor,
        },
        beforeSend: function () {
            NProgress.start();
            NProgress.set(0.4);
            Swal.fire({
                title: "Proveedor",
                text: "Buscando Proveedor....",
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            swal.close();
            NProgress.done();
            const iIDProveedor = data.id;
            const NombreProveedor = data.nombre_proveedor;
            const NumeroTelefono = data.numero_telefono;
            const Rfc = data.id;
            const url = `${proveedoresUpdateroute}/${iIDProveedor}`;
            // Actualiza la acción del formulario con la URL completa
            const editarProveedorForm = $("#editarProveedorForm");
            editarProveedorForm.attr("action", url);
            $("#modalEdit").modal("show");
            $("#nombre_proveedor_edit").val(NombreProveedor);
            $("#numero_telefono_edit").val(NumeroTelefono);
            $("#rfc_edit").val(Rfc);
        },
    });
}

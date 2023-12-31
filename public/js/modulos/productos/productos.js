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
            { field: "id", title: "ID", visible: true },
            { field: "nombre_producto", title: "Nombre", visible: true },

            {
                field: "inventario",
                title: "Inventario",
                formatter: "inventarioFormatter",
                visible: true,
            },
            {
                field: "codigo_barras",
                title: "Codigo",
            },
            {
                field: "cantidad_producto",
                title: "Cantidad",
                formatter: "cantidadFormatter",
            },
            {
                field: "precio_venta",
                title: "Precio Venta",

            },
            {
                field: "precio_venta",
                title: "Acciones",
                formatter: "accionesFormatter",
            },
        ],
        onLoadSuccess: (data) => {},
    });
    $("#inventario").change(function () {
        if (this.checked) {
            $("#camposCantidadAlertas").show();
            $('input[name="inventario"]').val("1");
        } else {
            $("#camposCantidadAlertas").hide();
            $('input[name="inventario"]').val("0");
        }
    });

    $("#formCreateProductos").submit(function (event) {
        // Validar campos manualmente si es necesario
        if ($("#inventario").is(":checked")) {
            let cantidad = $("#cantidad_product").val();
            let alertaMinima = $("#alerta_min").val();
            let alertaMaxima = $("#alerta_max").val();

            if (cantidad === "" || alertaMinima === "" || alertaMaxima === "") {
                // Mostrar mensajes de error debajo de los campos vacíos
                if (cantidad === "") {
                    $("#error-cantidad").text("Este campo es obligatorio.");
                } else {
                    $("#error-cantidad").text("");
                }

                if (alertaMinima === "") {
                    $("#error-alertaMinima").text("Este campo es obligatorio.");
                } else {
                    $("#error-alertaMinima").text("");
                }

                if (alertaMaxima === "") {
                    $("#error-alertaMaxima").text("Este campo es obligatorio.");
                } else {
                    $("#error-alertaMaxima").text("");
                }

                event.preventDefault(); // Evita que el formulario se envíe si hay campos faltantes
            } else {
                // Limpiar los mensajes de error si todos los campos están completos
                $(".error").text("");
            }
        }
    });
    $("#inventario_edit").change(function () {
        console.log(this.checked);
        if (this.checked) {
            $("#camposCantidadAlertas_edit").show();
            $('input[name="inventario"]').val("1");
        } else {
            console.log("entro");
            $("#camposCantidadAlertas_edit").hide();
            $("#cantidad_product_edit").val("");
            $("#alerta_min_edit").val("");
            $("#alerta_max_edit").val("");
            $('input[name="inventario"]').val("0");

        }
    });

    $("#editarProductoForm").submit(function (event) {
        // Validar campos manualmente si es necesario
        if ($("#inventario_edit").is(":checked")) {
            let cantidad = $("#cantidad_product_edit").val();
            let alertaMinima = $("#alerta_min_edit").val();
            let alertaMaxima = $("#alerta_max_edit").val();

            if (cantidad === "" || alertaMinima === "" || alertaMaxima === "") {
                // Mostrar mensajes de error debajo de los campos vacíos
                if (cantidad === "") {
                    $("#error-cantidad").text("Este campo es obligatorio.");
                } else {
                    $("#error-cantidad").text("");
                }

                if (alertaMinima === "") {
                    $("#error-alertaMinima").text("Este campo es obligatorio.");
                } else {
                    $("#error-alertaMinima").text("");
                }

                if (alertaMaxima === "") {
                    $("#error-alertaMaxima").text("Este campo es obligatorio.");
                } else {
                    $("#error-alertaMaxima").text("");
                }

                event.preventDefault(); // Evita que el formulario se envíe si hay campos faltantes
            } else {
                // Limpiar los mensajes de error si todos los campos están completos
                $(".error").text("");
            }
        }
    });
});
function accionesFormatter(value, row) {
    let html = "";
    const iIDProducto = row.id;
    console.log(row);
    html += `<a rel="tooltip" title="Editar" class="btn btn-warning" href="javascript:void(0)" onclick="EditarProducto(${iIDProducto})"><i class="fas fa-edit"></i></a>&nbsp`;

    return html;
}
function inventarioFormatter(value, row) {
    const inventario = row.inventario;

    if (inventario === 0) {
        return "No requiere";
    } else if (inventario === 1) {
        return "Sí requiere";
    } else {
        // Si el valor no es 0 ni 1, puedes manejarlo como desees.
        return "Valor desconocido";
    }
}
function cantidadFormatter(value, row) {
    const inventario = row.inventario;
    const cantidad = row.cantidad_producto;
    const estatus = row.estatus;
    if (inventario === 0) {
        return estatus;
    } else if (inventario === 1) {
        return cantidad;
    }
}
function EditarProducto(iIDProducto) {
    $.ajax({
        url: productosEdit,
        type: "POST",
        encoding: "UTF-8",
        async: true,
        cache: false,
        data: {
            iIDProducto: iIDProducto,
        },
        beforeSend: function () {
            NProgress.start();
            NProgress.set(0.4);
            Swal.fire({
                title: "Producto",
                text: "Buscando Producto....",
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            swal.close();
            NProgress.done();
            console.log(data)
            const iIDProducto = data.id;
            const NombreProducto = data.nombre_producto;
            const codigoBarras = data.codigo_barras;
            const precioVenta = data.precio_venta;
            const Inventario = data.inventario;
            const cantidadProducto = data.cantidad_producto;
            const alertaMinima = data.alerta_minima;
            const alertaMaxima = data.alerta_maxima;
            const estatus = data.estatus;
            const Proveedor = data.nombre_categoria;
            const Categoria = data.nombre_categoria;


            const url = `${productosUpdateroute}/${iIDProducto}`;
            // Actualiza la acción del formulario con la URL completa
            const editarProductoForm = $("#editarProductoForm");
            editarProductoForm.attr("action", url);
            $("#modalEdit").modal("show");
            $("#nombre_producto_edit").val(NombreProducto);
            $("#codigo_barras_edit").val(codigoBarras);
            $("#precio_venta_id").val(precioVenta);
            if(Inventario != 0){
                var checkbox = document.getElementById("inventario_edit");
                checkbox.checked = true;
                $("#camposCantidadAlertas_edit").show();
                $('input[name="inventario"]').val("1");

            }
            $("#cantidad_product_edit").val(cantidadProducto);
            $("#alerta_min_edit").val(alertaMinima);
            $("#alerta_max_edit").val(alertaMaxima);

        },
    });
}

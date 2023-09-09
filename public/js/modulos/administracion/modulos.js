$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    crearBootstrapTables();
    jQueryValidator();
});

//#region crear bootstrapTables
function crearBootstrapTables() {
    $("#gridModulos").bootstrapTable({
        url: urlGetModulos,
        classes: "table-striped",
        method: "get",
        locale: "es-MX",
        contentType: "application/x-www-form-urlencoded",
        theadClasses: "text-primary",
        pagination: true,
        striped: true,
        pagination: true,
        formatLoadingMessage: function () {
            return '<h4><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Cargando  </h4>';
        },
        search: true,
        pageSize: 10,
        columns: [
            {
                field: "id",
                title: "ID de Usuario",
                visible: false
            },
            {
                field: "nombre",
                title: "Nombre",
                visible: true
            },
            {
                field: "urlBase",
                title: "URL Base",
                visible: true
            },
            {
                field: "url",
                title: "URL completa",
                visible: true
            },


            {
                field: "cedicion",
                title: "Acciones",
                formatter: "accionesFormatter",
            },
        ],
        onLoadSuccess: (data) => {
            let roleSelect = $("#id_moduloPadre");

            $("#id_moduloPadre").empty().attr('disabled', false);

            roleSelect.append($("<option></option>").attr("value", "").text("Seleccione un módulo"));

            $.each(data, function (key, value) {
                roleSelect.append($("<option></option>").attr("value", value.id).text(value.nombre));
            });
        },
    });
}
//#endregion

//#region onEvent
$("#btnAgregarModulo").on('click', function () {

    $("#moduloModal").modal('show');
})

$("#esPadreCheck").on('change', function () {
    if ($(this).prop('checked')) {
        $("#moduloPadreSections").hide()
    } else {
        $("#moduloPadreSections").show()
    }
})
//#endregion

//#region funciones

function guardarModulo() {
    let data = {
        modulo_nombre: $("#nombre").val(),
        modulo_url: $("#url").val(),
        modulo_urlBase: $("#urlBase").val(),
        modulo_icono: $("#icon").val(),
        modulo_descripcion: $("#descripcion").val(),
        modulo_esPadre: $("#esPadreCheck").prop('checked'),
        modulo_modulo_padre: $("#id_moduloPadre").val(),
        permiso_nombre: $("#permiso_nombre").val(),
        permiso_clave: $("#clave").val(),
        permiso_descripcion: $("#permiso_descripcion").val(),
    };
    $.ajax({
        url: urlGuardarModulo,
        type: "POST",
        encoding: "UTF-8",
        cache: false,
        data: data,
        beforeSend: function () {

            Swal.fire({
                title: 'Guardando',
                text: 'Espere un momento...',
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            if (data.lSuccess) {
                $("#moduloModal").modal('hide');
                Swal.close();
                Swal.fire({
                    icon: 'success',
                    title: "¡Correcto!",
                    text: data.cMensaje,

                })
                $("#gridModulos").bootstrapTable("refresh");
            } else {
                Swal.close();
                Swal.fire({
                    icon: 'error',
                    title: "Error",
                    text: data.cMensaje,
                })
            }
        },
        error: function () {
            Swal.close();
            Swal.fire({
                icon: 'error',
                title: "Error",
                text: "Ocurrió un error no controlado. Intente de nuevo.",
            })
        }
    });
}

function getUserData(user_id) {
    $("#usuarioModal *").val('');
    $("#user_id").val('')
    $.ajax({
        url: urlGetUserData,
        type: "POST",
        encoding: "UTF-8",
        cache: false,
        data: { id: user_id },
        beforeSend: function () {
            Swal.fire({
                title: 'Obteniendo información',
                text: 'Espere un momento...',
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            if (data.lSuccess) {
                Swal.close();
                $("#usuarioForm").validate().resetForm();

                $("#user_id").val(data.user.id)
                $("#usuario").val(data.user.usuario);
                $("#nombre").val(data.user.nombre);
                $("#apellido_paterno").val(data.user.apellido_paterno);
                $("#apellido_materno").val(data.user.apellido_materno);
                $("#email").val(data.user.email);
                $("#role_id").val(data.user.roles_id)
                $("#telefono").val(data.user.telefono);
                $("#telefono_contacto").val(data.user.telefono_contacto);
                $("#ocupacion").val(data.user.ocupacion);
                $("#fecha_nacimiento").val(data.user.fecha_nacimiento);
                $("#usuarioModal").modal('show');
            } else {
                Swal.close();
                Swal.fire({
                    icon: 'error',
                    title: "Error",
                    text: data.cMensaje,
                })
            }
        },
        error: function () {
            Swal.close();
            Swal.fire({
                icon: 'error',
                title: "Error",
                text: "Ocurrió un error no controlado. Intente de nuevo.",
            })
        }
    });
}

//#endregion

//#region formatters
function accionesFormatter(value, row) {
    let html = '';

    let htmlHeader = '<div>';
    html += '<button type="button" class="btn btn-primary m-auto" onclick="getUserData(' + row.id + ')"><i class="fas fa-edit"></i></button>';
    let htmlFooter = '</div>';
    return htmlHeader + html + htmlFooter;
}



//#endregion

//#region jQueryValidator
function jQueryValidator() {
    $('#moduloForm').validate({
        errorElement: "div",
        errorClass: "invalid-feedback",
        rules: {
            nombre: {
                required: true
            },
            url: {
                required: true
            },
            urlBase: {
                required: true
            },
            descripcion: {
                required: true
            },
            id_moduloPadre: {
                required: function () {
                    return $("#esPadreCheck").prop('checked',false);
                }
            },
            permiso_nombre: {
                required: true
            },
            clave: {
                required: true
            },
            permiso_descripcion: {
                required: true
            },
        },
        highlight: function (label, element) {
            $(element).closest(".form-control").removeClass("is-valid").addClass("is-invalid");
            $(label).closest(".form-control").removeClass("is-valid").addClass("is-invalid");

        },
        unhighlight: function (label, element) {
            $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
            $(label).closest(".form-control").removeClass("is-invalid").addClass("is-valid");

        },

        submitHandler: function (form) {
            guardarModulo()
        }
    });

    $.extend($.validator.messages, { required: "Este campo es obligatorio" });
}
//#endregion

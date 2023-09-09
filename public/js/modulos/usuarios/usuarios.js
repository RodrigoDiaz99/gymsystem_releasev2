var permisosTree
$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    crearBootstrapTables();
    obtenerRoles();
    jQueryValidator();

    permisosTree = $('#permisosTree').tree({
        primaryKey: 'id',
        uiLibrary: 'materialdesign',
        dataSource: {
            url: urlObtenerPermisosUsuario,
            type: 'post',
            data: {
                user_id: ''
            },
            processData: true
        },
        checkboxes: true
    });
});


//#region crear bootstrapTables
function crearBootstrapTables() {
    $("#gridUsuarios").bootstrapTable({
        url: urlGetUsers,
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
                field: "apellido_paterno",
                title: "Apellido Paterno",
                visible: true
            },
            {
                field: "apellido_materno",
                title: "Apellido Materno",
                visible: true
            },
            {
                field: "role.nombre",
                title: "Rol",
                visible: true
            },

            {
                field: "cedicion",
                title: "Acciones",
                formatter: "accionesFormatter",
            },
        ],
        onLoadSuccess: (data) => { },
    });
}
//#endregion

//#region onEvent
$("#btnAgregarUsuarios").on('click', function () {
    $("#usuarioModal *").val('');
    $("#user_id").val('')
    $("#usuarioModal").modal('show');
})
//#endregion

//#region funciones

function saveUser() {
    let data = {
        user_id: $("#user_id").val(),
        usuario: $("#usuario").val(),
        role_id: $("#role_id").val(),
        nombre: $("#nombre").val(),
        apellido_paterno: $("#apellido_paterno").val(),
        apellido_materno: $("#apellido_materno").val(),
        email: $("#email").val(),
        telefono: $("#telefono").val(),
        telefono_contacto: $("#telefono_contacto").val(),
        fecha_nacimiento: $("#fecha_nacimiento").val(),
        ocupacion: $("#ocupacion").val()
    };

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

function obtenerRoles() {
    let roleSelect = $("#role_id");
    $.ajax({
        url: urlGetRoles,
        type: "get",
        encoding: "UTF-8",
        cache: false,
        beforeSend: function () {
            roleSelect.empty().attr('disabled', true).append($("<option></option>").attr("value", "").text("Cargando..."));
        },
        success: function (data) {
            $("#role_id").empty().attr('disabled', false);

            roleSelect.append($("<option></option>").attr("value", "").text("Seleccione un rol"));

            $.each(data, function (key, value) {
                roleSelect.append($("<option></option>").attr("value", value.id).text(value.nombre));
            });
        },
    });
}

function getPermisosUsuario(id) {

    permisosTree.reload({ user_id: id });
    $("#permisosModal").modal("show");


}
//#endregion

//#region formatters
function accionesFormatter(value, row) {
    let html = '';

    let htmlHeader = '<div>';
    html += '<button type="button" class="btn btn-primary m-auto" onclick="getUserData(' + row.id + ')"><i class="fas fa-edit"></i></button>';
    html += '<button type="button" class="btn btn-primary m-auto" onclick="getPermisosUsuario(' + row.id + ')"><i class="fas fa-edit"></i></button>';
    let htmlFooter = '</div>';
    return htmlHeader + html + htmlFooter;
}



//#endregion

//#region jQueryValidator
function jQueryValidator() {
    $('#usuarioForm').validate({
        errorElement: "div",
        errorClass: "invalid-feedback",
        rules: {
            usuario: {
                required: true
            },
            usuario: {
                required: true
            },
            apellido_paterno: {
                required: true
            },
            email: {
                required: true
            },
            telefono: {
                required: true
            },
            fecha_nacimiento: {
                required: true
            }
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
            saveUser()
        }
    });

    $.extend($.validator.messages, { required: "Este campo es obligatorio" });
}
//#endregion

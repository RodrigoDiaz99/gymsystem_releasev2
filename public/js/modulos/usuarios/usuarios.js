$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    crearBootstrapTables();

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
        pageSize: 10,
        striped: true,
        pagination: true,
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
    obtenerRoles();
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
    $.ajax({
        url: urlSaveUser,
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
                $("#usuarioModal").modal('hide');
                Swal.close();
                Swal.fire({
                    icon: 'success',
                    title: "¡Correcto!",
                    text: data.cMensaje,

                })
                $("#gridUsuarios").bootstrapTable("refresh");
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

function limpiarModal() {

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
//#endregion

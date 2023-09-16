var tree
$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    crearBootstrapTables();
    jQueryValidator();
    tree = $('#permisosTree').tree({
        primaryKey: 'id',
        uiLibrary: 'materialdesign',
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
                field: "usuario",
                title: "Usuario",
                visible: true
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

    $("#usuarioModal *").val('');
    $("#user_id").val('')
    $("#modoUsuario").val("crear")
    $("#usuarioModal").modal('show');
})

$("#nombre, #apellido_paterno").on("focusout", function () {
    if ($("#modoUsuario").val() == "crear") {
        let nombre = $("#nombre").val();
        let apellido_paterno = $("#apellido_paterno").val();
        let usuario = "";
        let input_usuario = $("#usuario");

        // Dividir el nombre por espacios en blanco y tomar el primer nombre
        let nombres = nombre.split(' ');
        let primerNombre = nombres[0];

        // Dividir el apellido por espacios en blanco y tomar el primer apellido
        let apellidos = apellido_paterno.split(' ');
        let primerApellido = apellidos[0];

        if (primerNombre != '' && primerApellido != '') {
            usuario = primerNombre + '.' + primerApellido + '#';
            input_usuario.val(usuario.toLowerCase());
        } else {
            input_usuario.val('');
        }
    }

})

$("#permisosModal").on("hide.bs.modal", function () {
    $("#users_id_permisos").val('');
})


//#endregion

//#region funciones

$("#btnGuardarPermisos").on('click', function () {

    if ($("#users_id_permisos").val() <= 0 || $("#users_id_permisos").val() == '') {
        return false;
    }
    var todosNodos = tree.getCheckedNodes();
    var nodosValidos = [];

    todosNodos.forEach(function (node) {
        console.log(node);
        if (node > 0) {
            nodosValidos.push(node);
        }
    });

    let data = {
        id_permisos: nodosValidos,
        id_users: $("#users_id_permisos").val()
    }

    $.ajax({
        url: urlGuardarPermisos,
        type: "POST",
        data: data,
        beforeSend: function () {
            Swal.fire({
                title: 'Guardando información',
                text: 'Espere un momento...',
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            if (data.lSuccess) {
                Swal.close();
                $("#permisosModal").modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: "¡Correcto!",
                    text: data.cMensaje,

                })
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
})


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
                    html: data.cMensaje,

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

function errorPermisos() {
    Swal.fire({
        icon: 'error',
        title: "Error",
        text: "Por defecto, los administradores tienen todos los permisos, por lo cual no se puede modificar.",
    })
}

function getUserData(user_id) {
    $("#usuarioModal *").val('');
    $("#user_id").val('')
    $("#modoUsuario").val("editar")

    obtenerRoles();

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


function getPermisosUsuario(id, nombre) {
    $("#users_id_permisos").val(id);
    $.ajax({
        url: urlGetPermisos,
        type: 'post',
        data: {
            user_id: id
        },
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
            swal.close()
            tree.render(data)
            $("#nombreUsuario").text(nombre)
            $("#permisosModal").modal("show");
        },
        error: function (error) {
            console.error("Error loading data:", error);
        }
    });



}
//#endregion

//#region formatters
function accionesFormatter(value, row) {
    let html = '';
    let nombre = row.nombre + ' ' + row.apellido_paterno + ' ' + row.apellido_materno;
    let htmlHeader = '<div>';
    html += '<button type="button" class="btn btn-primary my-auto mx-1" onclick="getUserData(' + row.id + ')"><i class="fas fa-edit"></i></button>';

    if (row.role.nombre != "Administrador") {
        html += '<button type="button" class="btn btn-primary my-auto mx-1" onclick="getPermisosUsuario(' + row.id + ',\'' + nombre + '\')"><i class="fas fa-key"></i></button>';
    }
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
            role_id: {
                required: true
            },
            nombre: {
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

$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });

});

//#region onEvent
$("#btnAgregarUsuarios").on('click', function () {
    obtenerRoles();
    $("#usuarioModal").modal('show');
})
//#endregion

//#region funciones
function limpiarModal() {

}

function obtenerRoles() {
    $.ajax({
        url: urlGetRoles,
        type: "get",
        encoding: "UTF-8",
        cache: false,
        success: function (data) {
            $.each(data, function (key, value) {
                $('#role_id')
                    .append($("<option></option>")
                        .attr("value", value.id)
                        .text(value.nombre));
            });
        },
    });
}
//#endregion

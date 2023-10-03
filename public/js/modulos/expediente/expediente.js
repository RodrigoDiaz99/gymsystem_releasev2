$(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=csrf-token]").attr("content"),
        },
    });
    const $searchUser = $("#search_user");

    $searchUser.select2({
        width: "100%",
        placeholder: "Seleccione una Opcion",
        language: {
            noResults: () => "No hay resultado",
            searching: () => "Buscando..",
        },
    });
    $("#search_user").on("select2:select", function () {
        getdatos_select();
    });
    $("#asdad").select2({
        tags: "true",
        placeholder: "Select an option",
        allowClear: true
      });
      $(".js-example-responsive").select2({
        width: 'resolve' // need to override the changed default
    });
    $("#fase_dos").hide();
    $("#siguiente_fase_dos").click(function(){
        $("#fase_uno").fadeOut("fast");
        $("#fase_dos").fadeIn("fast");

      });
      $("#anterior_fase_uno").click(function(){
        $("#fase_dos").fadeOut("fast");
        $("#fase_uno").fadeIn("fast");

      });

      $(".fecha-cirugia-checkbox").on("change", function() {
        var id = $(this).attr("id");
        var campoFecha = $("#fechaCirugia" + id);

        if ($(this).is(":checked")) {
          campoFecha.css("display", "block");
        } else {
          campoFecha.css("display", "none");
        }
      });

});
function getdatos_select(e) {
    const a = document.getElementById("search_user").value;
    $("#users_id").val(a);
    const user_id = $("#users_id").val();

    $.ajaxSetup({
        async: true,
        cache: false
    });

    $.ajax({
        url: get_user,
        type: "post",
        dataType: "json",
        data: {
            user_id
        },
        beforeSend: function () {
            Swal.fire({
                icon: "success",
                title: "Datos del cliente",
                text: "Obteniendo la información, Espere Por Favor...",
            });
        },
        success: function (data) {
            if (data) {
                const { name, email, phone, ocupation, born, age } = data;
                $("#name").val(name);
                $("#email").val(email);
                $("#phone").val(phone);
                $("#ocupation").val(ocupation);
                $("#born").val(born);
                $("#age").val(age);
                $("#collapseIdentificacion").collapse("show");
                Swal.fire({
                    icon: "success",
                    title: "Clientes",
                    text: "Se encontraron los datos de manera exitosa",
                    showConfirmButton: true,
                    confirmButtonClass: "btn btn-primary btn-round",
                    confirmButtonText: "Aceptar",
                    buttonsStyling: false,
                });
            } else {
                Swal.fire({
                    icon: "info",
                    title: "Clientes",
                    text: "Lo siento no pude obtener los datos de ese cliente",
                    showConfirmButton: true,
                    confirmButtonClass: "btn btn-primary btn-round",
                    confirmButtonText: "Aceptar",
                    buttonsStyling: false,
                });
            }
        },
    });
}

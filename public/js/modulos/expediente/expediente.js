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
    $("#groupCesarea").hide();
    $("#groupExtirpacion").hide();
    $("#groupEmbarazos").hide();
    $("#groupAbortos").hide();
    $("#groupApendice").hide();
    $("#groupVesicula").hide();
    $("#groupHernias").hide();
    $("#groupSenos").hide();
    $("#groupRiñon").hide();
    $("#groupOtro").hide();
    $(".js-example-responsive").select2({
        width: "resolve", // need to override the changed default
    });
    $("#fase_dos").hide();

    $("#fase_tres").hide();
    $("#btn_fase_tres").hide();
    $("#siguiente_fase_dos").click(function () {
        if ($("#form_expediente").valid()) {
            $("#fase_uno").fadeOut("fast");
            $("#fase_dos").fadeIn("fast");
            $("#btn_fase_tres").hide();
        }
    });
    $("#anterior_fase_uno").click(function () {
        $("#fase_dos").fadeOut("fast");
        $("#fase_uno").fadeIn("fast");
        $("#btn_fase_tres").hide();

    });

    $("#siguiente_fase_tres").click(function () {
        if ($("#form_expediente").valid()) {
            $("#fase_dos").fadeOut("fast");
            $("#fase_tres").fadeIn("fast");
            $("#btn_fase_tres").show();
        }
    });
    $("#anterior_fase_dos").click(function () {
        $("#fase_tres").fadeOut("fast");
        $("#fase_dos").fadeIn("fast");
        $("#btn_fase_tres").hide();
    });

    $(".fecha-cirugia-checkbox").on("change", function () {
        var id = $(this).attr("id");
        var campoFecha = $("#fechaCirugia" + id);

        if ($(this).is(":checked")) {
            campoFecha.css("display", "block");
        } else {
            campoFecha.css("display", "none");
        }
    });
    $("#medicamentos").tokenfield();
    $("#camera_area").hide();

    $("#path").change(function () {
        showImgs("path", "dataImagenes");
        let filesize = $("path")[0].files[0].size;

        let sizekiloByte = parseInt(filesize / 1024);
        if (sizekiloByte > 2018) {
            swal({
                title: "Error",
                text: "El archivo es mayor a 2MB",
                type: "warning",
                showConfirmButton: true,
                confirmButtonClass: "btn btn-success btn-round",
                confirmButtonText: "Aceptar",
                buttonsStyling: false,
            });
            document.getElementById("path").value = "";
            $("#btnRemoverImg").hide();
        } else {
            //  var hayArchivos = document.getElementById("fPDF").files.length > 0;
            $("#btnRemoverImg").show();
        }
    });
    $("#cesarea").change(function () {
        if (this.checked) {
            $("#groupCesarea").show();
        } else {
            $("#groupCesarea").hide();
            $('input[name="cesarea"]').val("0");
        }
    });
    $("#extirpacion_matriz").change(function () {
        if (this.checked) {
            $("#groupExtirpacion").show();
        } else {
            $("#groupExtirpacion").hide();
            $('input[name="extirpacion_matriz"]').val("0");
        }
    });
    $("#embarazo").change(function () {
        if (this.checked) {
            $("#groupEmbarazos").show();
        } else {
            $("#groupEmbarazos").hide();
            $('input[name="embarazo"]').val("0");
        }
    });
    $("#abortos").change(function () {
        if (this.checked) {
            $("#groupAbortos").show();
        } else {
            $("#groupAbortos").hide();
            $('input[name="abortos"]').val("0");
        }
    });
    $("#extirpacion_apendice").change(function () {
        if (this.checked) {
            $("#groupApendice").show();
        } else {
            $("#groupApendice").hide();
            $('input[name="extirpacion_apendice"]').val("0");
        }
    });
    $("#hernias").change(function () {
        if (this.checked) {
            $("#groupHernias").show();
        } else {
            $("#groupHernias").hide();
            $('input[name="hernias"]').val("0");
        }
    });
    $("#extirpacion_senos").change(function () {
        if (this.checked) {
            $("#groupSenos").show();
        } else {
            $("#groupSenos").hide();
            $('input[name="extirpacion_senos"]').val("0");
        }
    });
    $("#piedras_riñon").change(function () {
        if (this.checked) {
            $("#groupRiñon").show();
        } else {
            $("#groupRiñon").hide();
            $('input[name="piedras_riñon"]').val("0");
        }
    });
    $("#otro").change(function () {
        if (this.checked) {
            $("#groupOtro").show();
        } else {
            $("#groupOtro").hide();
            $('input[name="otro"]').val("0");
        }
    });
    $("#extirpacion_vesicula").change(function () {
        if (this.checked) {
            $("#groupVesicula").show();
        } else {
            $("#groupVesicula").hide();
            $('input[name="extirpacion_vesicula"]').val("0");
        }
    });
    $("#form_expediente").validate({
        errorElement: "div",
        errorClass: "invalid-feedback",
        rules: {
            tipo_dieta: {
                required: true,
            },
            search_user: {
                required: true,
            },
            ocupacion: {
                required: true,
            },
            nombre: {
                required: true,
            },

            apellido_paterno: {
                required: true,
            },
            apellido_materno: {
                required: true,
            },
            edad: {
                required: true,
            },

            telefono: {
                required: true,
            },
            fecha_nacimiento: {
                required: true,
            },
            nombre_contacto: {
                required: true,
            },
            servicio_medico: {
                required: true,
            },
            numero_comidas: {
                required: true,
            },
            ayunos: {
                required: true,
            },
            sueño: {
                required: true,
            },
            micciones_dia: {
                required: true,
            },
            micciones_noche: {
                required: true,
            },
            evacuaciones: {
                required: true,
            },

            tabaco: {
                required: true,
            },
            alcohol: {
                required: true,
            },
            fecha_visita: {
                required: true,
            },
            talla_ropa: {
                required: true,
            },

            altura: {
                required: true,
            },
            peso: {
                required: true,
            },
            cuello: {
                required: true,
            },
            busto: {
                required: true,
            },
            cintura: {
                required: true,
            },
            cadera: {
                required: true,
            },
            brazo_der: {
                required: true,
            },
            brazo_izq: {
                required: true,
            },
            pierna_der: {
                required: true,
            },
            pierna_izq: {
                required: true,
            },
            observaciones: {
                required: true,
            },
            alimentos_no_agradables: {
                required: true,
            },
            alergia_alimentos: {
                required: true,
            },
            path: {
                required: true,
            },
            brazo_der: {
                required: true,
            },
            brazo_der: {
                required: true,
            },
        },
        highlight: function (label, element) {
            $(element)
                .closest(".form-control")
                .removeClass("is-valid")
                .addClass("is-invalid");
            $(label)
                .closest(".form-control")
                .removeClass("is-valid")
                .addClass("is-invalid");
        },
        unhighlight: function (label, element) {
            $(element)
                .closest(".form-control")
                .removeClass("is-invalid")
                .addClass("is-valid");
            $(label)
                .closest(".form-control")
                .removeClass("is-invalid")
                .addClass("is-valid");
        },

        submitHandler: function (form) {
            if ($("#form_expediente").valid()) {
                // Si la validación es exitosa, puedes hacer algo aquí, como mostrar un mensaje o continuar con el envío del formulario.
                form.submit(); // Esto enviará el formulario si es válido.
            }
        },
    });
    // Cambiar el idioma de los mensajes de error a español
    $.extend($.validator.messages, {
        required: "Este campo es obligatorio.",
        // Aquí puedes personalizar otros mensajes de error según tus necesidades
    });
     // Escucha cambios en los radio buttons
     $("input[name='ayunos']").change(function() {
        var selectedOption = $("input[name='ayunos']:checked").val();

        // Si se selecciona "Horas", establece el campo como obligatorio
        if (selectedOption === "Horas") {
            $("#horas_ayuno").rules("add", {
                required: true,
                messages: {
                    required: "Este campo es obligatorio si selecciona 'Horas'."
                }
            });
        } else {
            // Si no se selecciona "Horas", quita la regla de validación
            $("#horas_ayuno").rules("remove", "required");
        }
    });
    $("#gridExpediente").bootstrapTable({
        url: getExpediente,
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
        detailView: true,
        columns: [
            { field: "id", title: "ID", visible: false },
            { field: "usuario.nombre", title: "Nombre", visible: true },

            {
                field: "usuario.codigo_usuario",
                title: "Codigo Usuario",

                visible: true,
            },
            {
                field: "date_interview",
                title: "Fecha Entrevista",
            },

            {
                field: "precio_venta",
                title: "Acciones",
                formatter: "accionesFormatter",
            },
        ],
        onExpandRow: async (index, row, $detail) => {
            const $table = $detail.html('<table class="table table-striped table-bordered" cellspacing="0"></table>').find('table');
            await expandTable(row, $table);
          },
    });
});
function getdatos_select(e) {
    const a = document.getElementById("search_user").value;
    $("#users_id").val(a);
    const user_id = $("#users_id").val();

    $.ajaxSetup({
        async: true,
        cache: false,
    });

    $.ajax({
        url: getUsuario,
        type: "post",
        dataType: "json",
        data: {
            user_id,
        },
        beforeSend: function () {
            Swal.fire({
                icon: "success",
                title: "Datos del cliente",
                text: "Obteniendo la información, Espere Por Favor...",
                didOpen: () => {
                    swal.showLoading();
                },
            });
        },
        success: function (data) {
            if (data) {
                const {
                    nombre,
                    apellido_paterno,
                    apellido_materno,
                    email,
                    telefono,
                    ocupacion,
                    fecha_nacimiento,
                    edad,
                    nombre_contacto,
                } = data;
                $("#ocupacion").val(ocupacion);
                $("#nombre").val(nombre);
                $("#apellido_paterno").val(apellido_paterno);
                $("#apellido_materno").val(apellido_materno);
                $("#email").val(email);
                $("#telefono").val(telefono);
                $("#nombre_contacto").val(nombre_contacto);
                $("#fecha_nacimiento").val(fecha_nacimiento);
                $("#edad").val(edad);
                $("#collapseIdentificacion").collapse("show");
                Swal.fire({
                    icon: "success",
                    title: "Clientes",
                    text: "Se encontraron los datos de manera exitosa",
                    confirmButtonText: "Aceptar",
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
function open_Camera() {
    $("#camera_area").show();

    Webcam.set({
        width: 490,
        height: 350,
        image_format: "jpeg",
        jpeg_quality: 90,
    });

    Webcam.attach("#my_camera");
}

function take_snapshot() {
    let i = 1;

    let nameI = "path";
    // console.log("a");

    var archivos = document.getElementById(nameI).files;
    console.log(archivos);

    let container = new DataTransfer();
    Webcam.snap(function (data_uri) {
        $.each(archivos, function (index, archivo) {
            var reader = new FileReader();
            $("#" + "path").empty();
            if (archivo) {
                i++;

                var fileTemp;

                reader.readAsDataURL(archivo);
                reader.onloadend = function () {
                    fileTemp = reader.result;
                    var fileP = dataURLtoFile(fileTemp, archivo.name);
                    container.items.add(fileP);
                    console.log("archivoseach " + container.items.length);
                };
            }
        });

        setTimeout(() => {
            var fileC = dataURLtoFile(data_uri, "imagen" + i + ".jpeg");
            container.items.add(fileC);
            // container.items.add(document.getElementById('path').files );
            console.log("archivos " + container.items.length);
            document.querySelector("#path").files = container.files;
            showImgs("path", "dataImagenes");
        }, 100);
    });
}
function stopCamera() {
    const video = document.querySelector("video");

    // A video's MediaStream object is available through its srcObject attribute
    const mediaStream = video.srcObject;

    // Through the MediaStream, you can get the MediaStreamTracks with getTracks():
    const tracks = mediaStream.getTracks();

    // Tracks are returned as an array, so if you know you only have one, you can stop it with:
    tracks[0].stop();

    // Or stop all like so:
    tracks.forEach((track) => track.stop());

    $("#camera_area").hide();
}
function dataURLtoFile(dataurl, filename) {
    // console.log("dataurl "+dataurl+ " "+filename);

    var arr = dataurl.split(","),
        mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]),
        n = bstr.length,
        u8arr = new Uint8Array(n);

    while (n--) {
        u8arr[n] = bstr.charCodeAt(n);
    }

    return new File([u8arr], filename, { type: mime });
}

function showImgs(IDfImagenes, divDataImagenes) {
    // alert("fotos"+IDfImagenes);
    var archivos = document.getElementById(IDfImagenes).files;

    $.each(archivos, function (index, archivo) {
        $("#" + divDataImagenes).empty();
        var reader = new FileReader();
        if (archivo) {
            var html = "";
            setTimeout(function () {
                reader.readAsDataURL(archivo);
                reader.onloadend = function () {
                    html =
                        '<div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6 contenedorImagenes">' +
                        '<div class="font-icon-detail-img">' +
                        '<img class="zoom img-file-input" id="img' +
                        index +
                        '" " src="' +
                        reader.result +
                        '" height="100%" width="100%" />' +
                        '<p class="p-without-m-b-t"><span class="span-name-img">' +
                        archivo.name +
                        "</span></p>" +
                        "</div>" +
                        "</div>";
                    $("#" + divDataImagenes).append(html);
                };
            }, 100);
        }
    });

    //'<img class="zoom img-file-input" id="img' + index + '" onclick="showFancyBox($(this))" src="' + reader.result + '"/>' +
}
function expandTable(row, $detail) {
    console.log(row, "--", $detail);
    $detail.bootstrapTable({
        url: getExpedienteUsuario,
        method: "post",
        contentType: "application/x-www-form-urlencoded",
        queryParams: function (p) {
            return {
                user_id: row.users_id,
                code_user: row.usuario.codigo_usuario,
            };
        },
        detailView: true,
        icons: {
            detailOpen: "fas fa-plus",
            detailClose: "fas fa-minus",
        },
        pagination: true,
        pageSize: 10,
        columns: [
            {
                field: "id",
                title: "id",

                visible: false,
            },
            {
                field: "numero_control",
                title: "Numero Expediente",
            },
            {
                field: "cedicion",
                title: "Acciones",
                formatter: "editFormatter",
            },
        ],
        onLoadSuccess: function (data) {
            $detail.bootstrapTable("hideLoading");
        },
    });
    $detail.bootstrapTable("showLoading");
    $detail.bootstrapTable("refresh");
}

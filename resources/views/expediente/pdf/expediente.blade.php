<!doctype html>

<head>

    <style>
        .container_12 {
            margin-left: 25px;
            margin-right: 25px;

        }



        img {
            height: 7%;
            width: 17%;

            object-fit: contain;
        }

        #page tr {
            padding: 0;
            margin: 0;
        }

        hr {
            page-break-after: always;
            border: 0;
            margin: 0;
            padding: 0;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        td,
        {
        padding: 5px;
        font-size: 13px;
        font-style: normal;


        /* line-height: 1.5; */

        }


        th,
        {

        font-size: 15px;
        font-style: normal;
        line-height: 1.5;
        padding: 2px;
        width: 100px;

        }

        span,
        {

        font-size: 15px;


        }

        @page {
            margin-top: 0cm;

        }

        #trh {
            margin: 0;
            padding: 0;

        }


        #watermark {
            position: fixed;

            /**
                    Set a position in the page for your image
                    This should center it vertically
                **/
            top: 12cm;
            left: 2.7cm;

            /** Change image dimensions**/
            width: 500%;
            height: 500%;

            /** Your watermark should be behind every content**/
            z-index: 1;
            opacity: 0.3;
        }

        td[rowspan="2"] {
            border: none;
        }
    </style>
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.css"> --}}
</head>

<body style="background: white;">
    <div id="watermark">
        <img src="img/logo-remo.png" height="200%" width="200%" />
    </div>
    <div>
        <div style="position: center;">
            <header>
                <p style="text-align:center;"><img src="img/logo.jpeg" alt="logo"></p>
                <p style="text-align:center;color:magenta"><span>El Espacio que necesitas como mujer...</span></p>
                {{-- <hr style="text-align:center;color:magenta;" width="35%"> --}}
                <h3 style="text-align:center; font-family:Arial Narrow; "> Ficha de Inscripción</h3>
            </header>
        </div>
        <div id="main-content">
            <main>

                <table ALIGN="right">

                    <tr>
                        <td rowspan="2">
                            <div style="width: 200px; text-align:right;">Tipo de dieta</div>

                        </td>
                        <td>Hipocalorica (1,200 a 1,500 kcal)</td>

                        @if ($expediente->tipo_dieta == 'Hipocalorica (1,200 a 1,500 kcal)')
                            <td style="width:15px"><b style="font-size: 20px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Hipercalórica (2,800 a 3000 kcal)</td>
                        @if ($expediente->tipo_dieta == 'Hipercaloríca (2,800 a 3000 kcal)')
                            <td style="width:15px"><b style="font-size: 20px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                    </tr>
                </table>




                <h3>I. Identificación</h3>
                <table width="100%" class="table table-striped align-items-center mb-0">
                    <thead>
                        <tr>
                            <td><b>Fecha Entrevista:</b> {{ $expediente->date_interview }}</td>
                            <td><b>Profesión/Ocupación:</b> {{ $expediente->usuario->ocupacion }}</td>
                        </tr>
                        <tr>
                        <tr>
                            <td colspan="2"><b>Nombre Completo:</b> {{ $expediente->usuario->nombre }}
                                {{ $expediente->usuario->apellido_paterno }}
                                {{ $expediente->usuario->apellido_materno }}</td>
                        </tr>

                        </tr>
                        <tr>
                            <td><b>Edad:</b> {{ $expediente->usuario->edad }}</td>
                            <td><b>Número de celular:</b> {{ $expediente->usuario->telefono }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Fecha de Nacimiento:</b> {{ $expediente->usuario->fecha_nacimiento }}
                            </td>

                        </tr>
                    </thead>
                </table>




                <h3>II. Antecedentes personales en general</h3>
                <label for=""></label>
                <table Width=100% class="table table-striped align-items-center mb-0">



                    <tr>
                        <th rowspan="12">Enfermedades Crónicas</th>
                        <td>Hipertension Arterial</td>

                        @if ($expediente->enfermedadesCronicas->first()->hipertension_arterial == 1)
                            <td style="width:15px"><b style="font-size: 20px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif

                        <th rowspan="12">Enfermedades Mentales</th>
                        <td>Ansiedad</td>

                        @if ($expediente->enfermedadesMentales->first()->ansiedad == 1)
                            <td style="width:15px"><b style="font-size: 20px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif

                        <th rowspan="12">Ha presentado o presenta alguna de las siguientes condiciones físicas</th>

                        <td colspan="2">Uso de lentes para:</td>


                    </tr>
                    <tr>

                        <td>Colestererol</td>

                        @if ($expediente->enfermedadesCronicas->first()->colesterol == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Anorexia</td>

                        @if ($expediente->enfermedadesMentales->first()->anorexia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Descanso</td>

                        @if ($expediente->descanso == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>
                    <tr>

                        <td>Triglicéridos</td>

                        @if ($expediente->enfermedadesCronicas->first()->trigliceridos == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Bulimia</td>

                        @if ($expediente->enfermedadesMentales->first()->bulimia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Hipermetropía</td>

                        @if ($expediente->hipermetropia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>
                    <tr>

                        <td>Anemia</td>

                        @if ($expediente->enfermedadesCronicas->first()->anemia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Obesidad</td>

                        @if ($expediente->enfermedadesMentales->first()->obesidad == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Miopía</td>

                        @if ($expediente->miopia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>

                    <tr>

                        <td>Bronquitis</td>

                        @if ($expediente->enfermedadesCronicas->first()->bronquitis == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Epilepsia</td>

                        @if ($expediente->enfermedadesMentales->first()->epilepsia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Astigmatismo</td>

                        @if ($expediente->astigmatismo == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>
                    <tr>

                        <td>Asma</td>

                        @if ($expediente->enfermedadesCronicas->first()->asma == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Depresion</td>

                        @if ($expediente->enfermedadesMentales->first()->depresion == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Desmayos</td>

                        @if ($expediente->desmayos == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>

                    <tr>

                        <td>Convulsiones</td>

                        @if ($expediente->enfermedadesCronicas->first()->convulsiones == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Depresión posparto</td>

                        @if ($expediente->enfermedadesMentales->first()->depresion_postparto == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Mareos</td>

                        @if ($expediente->mareos == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>
                    <tr>

                        <td>Inflamación de
                            nervio ciático</td>

                        @if ($expediente->enfermedadesCronicas->first()->nervio_ciatico == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Estrés crónico</td>

                        @if ($expediente->enfermedadesMentales->first()->estres_cronico == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Hospitalizaciones</td>

                        @if ($expediente->hospitalizaciones == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>
                    <tr>

                        <td>Diabetes</td>

                        @if ($expediente->enfermedadesCronicas->first()->diabetes == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Estrés postraumático</td>

                        @if ($expediente->enfermedadesMentales->first()->estres_postraumatico == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Fracturas</td>

                        @if ($expediente->fracturas == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>
                    <tr>

                        <td>Lumbagia </td>

                        @if ($expediente->enfermedadesCronicas->first()->lumbagia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Fobías</td>

                        @if ($expediente->enfermedadesMentales->first()->fobias == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif


                        <td rowspan="3"></td>


                        <td rowspan="3"><b style="font-size: 20px;"></b></td>




                    </tr>

                    <tr>

                        <td>Arritmias
                            cardiacas </td>

                        @if ($expediente->enfermedadesCronicas->first()->arritmia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif
                        <td rowspan="2"> </td>


                        <td rowspan="2"><b style="font-size: 20px;"></b></td>



                    </tr>

                    <tr>

                        <td>Narcolepsia </td>

                        @if ($expediente->enfermedadesCronicas->first()->narcolepsia == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif




                    </tr>





                </table>
                <hr>
                <br>
                <p style="text-align:center;"><img src="img/logo.jpeg" alt="logo"></p>
                <p style="text-align:center;color:magenta"><span>El Espacio que necesitas como mujer...</span></p>
                <br>

                <table Width=100% class="table table-striped align-items-center mb-0">



                    <tr>
                        <th rowspan="12">Cirugías (causa, fecha)</th>
                        <td colspan="2">Tipo de cirugía</td>



                        <td style="width:15px">Fecha </td>



                        <th rowspan="12">Síntomas adicionales</th>
                        <td>Manchas oscuras en las axilas</td>

                        @if ($expediente->sintomasAdicionales->first()->manchas_oscura_axilas == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif




                    </tr>
                    <tr>

                        <td>Cesarea</td>

                        @if ($expediente->cirugia->first()->cesarea == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_cesarea }}</td>
                        @else
                            <td> </td>
                            <td></td>
                        @endif

                        <td>Manchas oscuras en las mejillas</td>

                        @if ($expediente->sintomasAdicionales->first()->manchas_oscura_mejillas == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif



                    </tr>
                    <tr>

                        <td>Extirpación de matriz</td>

                        @if ($expediente->cirugia->first()->extirpacion_matriz == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_extirpacion }}</td>
                        @else
                            <td></td>
                            <td> </td>
                        @endif

                        <td>Manchas oscuras en la entrepierna</td>

                        @if ($expediente->sintomasAdicionales->first()->manchas_oscura_entrepierna == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif



                    </tr>
                    <tr>

                        <td>Número de embarazos</td>

                        @if ($expediente->cirugia->first()->embarazo == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_embarazo }}</td>
                        @else
                            <td> </td>
                            <td></td>
                        @endif

                        <td>Mancha rosadas en el rostro</td>

                        @if ($expediente->sintomasAdicionales->first()->manchas_rosada_rostro == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif



                    </tr>

                    <tr>

                        <td>Abortos</td>

                        @if ($expediente->cirugia->first()->abortos == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_aborto }}</td>
                        @else
                            <td> </td>
                            <td></td>
                        @endif

                        <td>Manchas blancas cerca de la boca</td>

                        @if ($expediente->sintomasAdicionales->first()->manchas_blanca_boca == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif



                    </tr>
                    <tr>

                        <td>Extirpación de apéndice</td>

                        @if ($expediente->cirugia->first()->extirpacion_apendice == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_extirpacion_apendice }}</td>
                        @else
                            <td></td>
                            <td> </td>
                        @endif

                        <td>Manchas oscuras en el cuello</td>

                        @if ($expediente->sintomasAdicionales->first()->manchas_oscura_cuello == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif



                    </tr>

                    <tr>

                        <td>Extirpación de vesícula</td>

                        @if ($expediente->cirugia->first()->extirpacion_vesicula == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_extirpacion_vesicula }}</td>
                        @else
                            <td></td>
                            <td> </td>
                        @endif

                        <td>Síntomas de cáncer</td>

                        @if ($expediente->sintomasAdicionales->first()->sintomas_cancer == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif



                    </tr>
                    <tr>

                        <td>Hernías</td>

                        @if ($expediente->cirugia->first()->hernias == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_hernias }}</td>
                        @else
                            <td></td>
                            <td> </td>
                        @endif

                        <td>Acné</td>

                        @if ($expediente->sintomasAdicionales->first()->acne == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif



                    </tr>
                    <tr>

                        <td>Extirpacion de senos</td>

                        @if ($expediente->cirugia->first()->extirpacion_senos == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_extirpacion_senos }}</td>
                        @else
                            <td></td>
                            <td> </td>
                        @endif

                        <td>Alergias</td>

                        @if ($expediente->sintomasAdicionales->first()->alergias == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif


                    </tr>
                    <tr>

                        <td>Piedras en el riñón </td>

                        @if ($expediente->cirugia->first()->piedras_riñon == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                            <td>{{ $expediente->cirugia->first()->fecha_piedras_riñon }}</td>
                        @else
                            <td> </td>
                            <td> </td>
                        @endif


                        <td>Dolores de cabeza intensos
                            (Migraña)</td>

                        @if ($expediente->sintomasAdicionales->first()->migraña == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif






                    </tr>


                    <tr>
                        @if ($expediente->sintomasAdicionales->first()->otro == 1)
                            <td rowspan="2" colspan="3">U otro (especifique):
                                {{ $expediente->cirugia->first()->explicacion_otro }} </td>
                        @else
                            <td rowspan="2" colspan="3">U otro (especifique): </td>
                        @endif

                        <td>Golpes en la espalda</td>
                        @if ($expediente->sintomasAdicionales->first()->golpes_espalda == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>

                    <tr>

                        <td>Golpes en la cabeza</td>
                        @if ($expediente->sintomasAdicionales->first()->golpes_cabeza == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                    </tr>
                </table>

                <br>
                <table Width=100% class="table table-striped align-items-center mb-0">
                    @php
                        $cadena = $expediente->sintomasAdicionales->first()->medicamentos; // "[\"a\", \"b\", \"c\", \"d\"]"
                        $array = json_decode($cadena);
                    @endphp






                    <tr>
                        <td style="font-size: 85%"><b>Medicamentos:<b>
                                    <ul>
                                        @foreach ($array as $element)
                                            {{ $element }}
                                        @endforeach
                                    </ul>
                        </td>
                    </tr>

                </table>
                <hr>
                <p style="text-align:center;"><img src="img/logo.jpeg" alt="logo"></p>
                <p style="text-align:center;color:magenta"><span>El Espacio que necesitas como mujer...</span></p>
                <br>
                <h3>III. Hábitos psicobiológicos:</h3>
                <label for=""></label>
                <table Width=100% class="table table-striped align-items-center mb-0">



                    <tr>
                        <th rowspan="2">Alimentacion</th>
                        <td colspan="5">Número de comidas:</b></td>

                    </tr>
                    <tr>
                        @if ($expediente->habitosPsicobiologicos->first()->numero_comidas == '1')
                            <td>1 <b>x</b></td>
                        @else
                            <td>1 </td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->numero_comidas == '2')
                            <td>2 <b>x</b></td>
                        @else
                            <td>2</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->numero_comidas == '3')
                            <td>3 <b>x</b></td>
                        @else
                            <td>3</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->numero_comidas == '+4')
                            <td colspan="2">+4 <b>x</b></td>
                        @else
                            <td colspan="2">+4</td>
                        @endif








                    </tr>
                    <tr>
                        <th>Ayunos</th>
                        @if ($expediente->habitosPsicobiologicos->first()->ayunos == 'Total')
                            <td>Total <b>x</b></td>
                        @else
                            <td>Total</td>
                        @endif
                        @if ($expediente->habitosPsicobiologicos->first()->ayunos == 'Parcial')
                            <td>Parcial <b>x</b></td>
                        @else
                            <td>Parcial</td>
                        @endif
                        @if ($expediente->habitosPsicobiologicos->first()->ayunos == 'Horas')
                            <td colspan="2">Horas<b>x</b></td>
                            <td> {{ $expediente->habitosPsicobiologicos->first()->horas_ayuno }}</td>
                        @else
                            <td colspan="2">Horas</td>
                            <td></td>
                        @endif









                    </tr>
                    <tr>
                        <th rowspan="2">Sueño</th>
                        <td colspan="5">Horas habituales de descanso:</b></td>

                    </tr>
                    <tr>
                        @if ($expediente->habitosPsicobiologicos->first()->sueño == '5')
                            <td>5 <b>x</b></td>
                        @else
                            <td>5 </td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->sueño == '6')
                            <td>6 <b>x</b></td>
                        @else
                            <td>6</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->sueño == '7')
                            <td>7 <b>x</b></td>
                        @else
                            <td>7</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->sueño == '+8')
                            <td colspan="2">+8 <b>x</b></td>
                        @else
                            <td colspan="2">+8</td>
                        @endif








                    </tr>
                    <tr>
                        <th rowspan="4">Micciones (Orinar)</th>
                        <td colspan="5">Veces al día:</td>




                    </tr>

                    <tr>
                        @if ($expediente->habitosPsicobiologicos->first()->micciones_dia == '1')
                            <td>1 <b>x</b></td>
                        @else
                            <td>1 </td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->micciones_dia == '2')
                            <td>2 <b>x</b></td>
                        @else
                            <td>2</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->micciones_dia == '3')
                            <td>3 <b>x</b></td>
                        @else
                            <td>3</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->micciones_dia == '4')
                            <td>4 <b>x</b></td>
                        @else
                            <td>4</td>
                        @endif
                        @if ($expediente->habitosPsicobiologicos->first()->micciones_dia == '+5')
                            <td>+5 <b>x</b></td>
                        @else
                            <td>+5</td>
                        @endif




                    </tr>
                    <tr>

                        <td colspan="5">Veces en la noche:</td>




                    </tr>
                    <tr>
                        @if ($expediente->habitosPsicobiologicos->first()->micciones_noche == '0')
                            <td>0 <b>x</b></td>
                        @else
                            <td>0 </td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->micciones_noche == '1')
                            <td>1 <b>x</b></td>
                        @else
                            <td>1</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->micciones_noche == '2')
                            <td>2 <b>x</b></td>
                        @else
                            <td>2</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->micciones_noche == '3')
                            <td>3 <b>x</b></td>
                        @else
                            <td>3</td>
                        @endif
                        @if ($expediente->habitosPsicobiologicos->first()->micciones_noche == '+4')
                            <td>+4 <b>x</b></td>
                        @else
                            <td>+4</td>
                        @endif
                    </tr>
                    <tr>
                        <th rowspan="2">Evacuaciones
                            (Defecar)</th>
                        <td colspan="5">Veces durante el día: </td>




                    </tr>
                    <tr>

                        @if ($expediente->habitosPsicobiologicos->first()->evacuaciones == '0')
                            <td>0 <b>x</b></td>
                        @else
                            <td>0 </td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->evacuaciones == '1')
                            <td>1 <b>x</b></td>
                        @else
                            <td>1</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->evacuaciones == '2')
                            <td>2 <b>x</b></td>
                        @else
                            <td>2</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->evacuaciones == '3')
                            <td>3 <b>x</b></td>
                        @else
                            <td>3</td>
                        @endif
                        @if ($expediente->habitosPsicobiologicos->first()->evacuaciones == '+4')
                            <td>+4 <b>x</b></td>
                        @else
                            <td>+4</td>
                        @endif

                    </tr>
                </table>
                <br>


                <table Width=100% class="table table-striped align-items-center mb-0">




                    <tr>
                        <th rowspan="2">Tabaco</th>
                        <td colspan="5">Número de cigarros al día
                            /semana</td>

                    </tr>

                    <tr>
                        @if ($expediente->habitosPsicobiologicos->first()->tabaco == '1')
                            <td>1 <b>x</b></td>
                        @else
                            <td>1 </td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->tabaco == '2')
                            <td>2 <b>x</b></td>
                        @else
                            <td>2</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->tabaco == '3')
                            <td>3 <b>x</b></td>
                        @else
                            <td>3</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->tabaco == '4')
                            <td>4 <b>x</b></td>
                        @else
                            <td>4</td>
                        @endif
                        @if ($expediente->habitosPsicobiologicos->first()->tabaco == '+5')
                            <td>+5 <b>x</b></td>
                        @else
                            <td>+5</td>
                        @endif
                    </tr>


                    <tr>
                        <th rowspan="2">Alcohol
                        </th>
                        <td colspan="5">Número de cerveza o alcohol al
                            día/ semana </td>

                    </tr>
                    <tr>
                        @if ($expediente->habitosPsicobiologicos->first()->alcohol == '1')
                            <td>1 <b>x</b></td>
                        @else
                            <td>1 </td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->alcohol == '2')
                            <td>2 <b>x</b></td>
                        @else
                            <td>2</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->alcohol == '3')
                            <td>3 <b>x</b></td>
                        @else
                            <td>3</td>
                        @endif

                        @if ($expediente->habitosPsicobiologicos->first()->alcohol == '4')
                            <td>4 <b>x</b></td>
                        @else
                            <td>4</td>
                        @endif
                        @if ($expediente->habitosPsicobiologicos->first()->tabaco == '+5')
                            <td>+5 <b>x</b></td>
                        @else
                            <td>+5</td>
                        @endif

                    </tr>

                </table>
                <br>
                <hr>
                <p style="text-align:center;"><img src="img/logo.jpeg" alt="logo"></p>
                <p style="text-align:center;color:magenta"><span>El Espacio que necesitas como mujer...</span></p>

                <br>
                <h3>IX. Control Peso:</h3>
                <br>

                <table class="table table-striped align-items-center mb-0">

                    <tr>
                        <td With="6"><b>Concepto:</td>
                        <td With=10px><b style="font-size: 10px;">Primera Cita:</td>
                        @if ($getExpedienteCount > 1)
                            @for ($i = 1; $i < $getExpedienteCount; $i++)
                                <td With="6"><b>Mes
                                        {{ $i }} :</td>
                            @endfor

                        @endif


                    </tr>
                    <tr>

                        <td id="trh">
                            <div>

                                <table class="table table-striped align-items-center mb-0">

                                    <tr>
                                        <td height="15"><b>Fecha</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Talla de ropa</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Altura</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Peso</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Cuello</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Busto/Pecho</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Cintura</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Cadera</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Brazo der.</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Brazo izq</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Pierna der</td>
                                    </tr>
                                    <tr>
                                        <td height="15"><b>Pierna izq</td>
                                    </tr>


                                </table>
                            </div>
                        </td>



                        @foreach ($getExpediente as $data)
                            @foreach ($data->controlPeso as $controlPeso)
                                <div>
                                    <table class="table table-striped align-items-center mb-0">

                                        <tr>
                                            <td height="15">{{ $controlPeso->fecha_visita }}</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->talla_ropa }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->altura }} M</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->peso }} kg</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->cuello }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->busto }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->cintura }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->cadera }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->brazo_der }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->brazo_izq }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->pierna_der }} cm</td>
                                        </tr>
                                        <tr>
                                            <td height="15">{{ $controlPeso->pierna_izq }} cm</td>
                                        </tr>


                                    </table>
                                </div>
                            @endforeach
                        @endforeach





                    </tr>
                </table>
                <br>

                <table>
                    @foreach ($getExpediente as $data)
                        @foreach ($data->controlPeso as $controlPeso)
                            <tr>
                                <td>
                                    <span> <b>Observaciones: </b>{{ $controlPeso->observaciones }}</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span> <b> Alimentos que no le agradan consumir:
                                        </b>{{ $controlPeso->alimentos_no_agradables }}</span>
                                </td>

                            </tr>
                            <tr>
                                <span> <b>
                                        Alergia a alimentos:
                                    </b>{{ $controlPeso->alergia_alimentos }}</span>

                            </tr>
                        @endforeach
                    @endforeach

                </table>
                <br>
                <table Width=100% class="table table-striped align-items-center mb-0">



                    <tr>






                        <td>Creatina</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->creatina == 1)
                            )
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Betalanina</td>s

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->betalanina == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Colágeno </td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->colageno == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>ITRAVIL</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->itravil == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Herbalife</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->herbalife == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif




                    </tr>
                    <tr>

                        <td>Proteína</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->proteina == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>Animal Pak</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->animal_pak == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif
                        <td>Aminoácidos</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->aminoacidos == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Redotex</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->redotex == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Omnilife</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->omnilife == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif



                    </tr>
                    <tr>

                        <td>HMB</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->hmb == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif

                        <td>L-Carnitina</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->lcarnitina == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif
                        <td>BCA´s</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->bca == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Acxion</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->acxion == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Cromasol</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->cromasol == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif


                    </tr>
                    <tr>

                        <td>Testrol</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->testrol == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td></td>
                        @endif

                        <td>CLA</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->cla == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif
                        <td>Glutamina</td>

                        @if (
                            $expediente->suplemento &&
                                $expediente->suplemento->first() &&
                                $expediente->suplemento &&
                                $expediente->suplemento->first() &&
                                $expediente->suplemento->first()->glutamina == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Té Divina</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->te_divina == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Farmasi</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->farmasi == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif



                    </tr>

                    <tr>

                        <td>B-NOX</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->bnox == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td></td>
                        @endif

                        <td>Taurina</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->taurina == 1)
                            <td><b style="font-size: 20px;">x</b></td>
                        @else
                            <td> </td>
                        @endif
                        <td>Leucina</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->leucina == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Piñalim</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->piñalim == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif
                        <td>Otros</td>

                        @if ($expediente->suplemento && $expediente->suplemento->first() && $expediente->suplemento->first()->otros == 1)
                            <td style="width:10px"><b style="font-size: 15px;">x</b></td>
                        @else
                            <td style="width:15px"> </td>
                        @endif



                    </tr>

                </table>

                <hr>
                <p style="text-align:center;"><img src="img/logo.jpeg" alt="logo"></p>
                <p style="text-align:center;color:magenta"><span>El Espacio que necesitas como mujer...</span></p>

                <div style="font-size: 20px; font-family:Arial Narrow;color:black; margin:10px 60px">
                    <p style="text-align:center;"><span><b>REGLAMENTO</b> </span></p>

                    <span>1. El usuario autoriza el uso de datos para su expediente, informacion que será de uso
                        confidencial conforme a la Ley General de Protección de Datos Personales.</span>
                    <br>
                    <span>2. En caso de destrucción accidental de artículos deportivos, el gimnasio “Spacio Fems”
                        hará una valoración para tomar las medidas necesarias para la reposición.</span>
                    <br>
                    <span>3. No se hacen reembolsos por pagos de visita, semana, mes o anualidad, aún cuando se
                        trate de una terminación anticipada.</span>
                    <br>
                    <span>4. El gimnasio “Spacio Fems” se compromete a informar a tiempo sobre reparaciones
                        preventivas o correctivas, razones por las cuales se inhabilite las salas para
                        entrenar.</span>
                    <br>
                    <span>5. El gimnasio “Spacio Fems” no se hace responsable por objetos perdidos ni extraviados,
                        así como de las pérdidas o daños en las pertenencias del usuario.</span>
                    <br>
                    <span>6. El usuario autoriza que se le envien comunicados vía telefono celular de las
                        promociones, modificaciones o circunstancias relacionadas al gimnasio.</span>
                    <br>
                    <span>7. El gimnasio “ Spacio Fems” no se hace responsable por accidentes o lesiones dentro y/o
                        fuera de las instalaciones.</span>
                        <br>
                        <span>8. En caso de venir con un menor de edad el gimnasio “Spacio Fems” no se hace
                            responsable de lesiones, caídas o accidentes ocasionadas al menor.</span>
                </div>
                <div style="font-size: 20px; font-family:Arial Narrow;color:black;">
                    <span>Leído el presente reglamento y enteradas las partes del contenido y alcances de todas y
                        cada una de las reglas que en el mismo se precisan, acepto las condiciones para realizar los
                        ejercicios y engrenamientos.</span>
                    <br>
                    <br>
                    <span>Este informe es realizado en Mérida Yucatán, el día {{ date('Y-m-d H:i:s') }}, en las
                        instalaciones ubicadas en la Calle 84 número 815 entre 129 y 131 de la Colonia San Antonio
                        Xluch, C.P. 97297</span>
                </div>
                <br>
                <div style="font-size: 20px; font-family:Arial Narrow;color:black;">
                    <table Width=100% style="border: hidden" class="table align-items-center mb-0">
                        <tr style="border: hidden">
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black; text-align:center;">
                                "EL USUARIO"</td>
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black; text-align:center;">
                                "EL GIMNASIO"</td>
                        </tr>
                        <tr style="border: hidden">
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:blue; text-align:center;">
                                {{ $expediente->usuario->nombre }}   {{ $expediente->usuario->apellido_paterno }}   {{ $expediente->usuario->apellido_materno }}</td>
                        </tr>
                        <tr style="border: hidden">
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                                ____________________</td>
                            <td></td>
                        </tr>
                        <tr style="border: hidden">
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                                Nombre Completo</td>
                            <td></td>
                        </tr>
                        <tr style="border: hidden">
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                            </td>
                            <td></td>
                        </tr>
                        <tr style="border: hidden">
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                            </td>
                            <td></td>
                        </tr>
                        <td
                            style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                            ______________________________</td>
                        <td
                            style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                            ______________________________</td>
                        <tr>
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                                Firma</td>
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                                PSIC. ABIGAIL CETINA BALAM</td>
                        <tr>
                            <td></td>
                            <td
                                style="border: hidden; font-size: 20px; font-family:Arial Narrow;color:black;text-align:center;">
                                ADMINISTRACIÓN</td>
                        </tr>
                        </tr>
                    </table>




            </main>
            {{-- @include('layouts.footer') --}}
        </div>

    </div>



</body>


</html>

@extends('layouts.app')
@section('title', 'Expedientes')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        </div>
    </div>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Ficha de Inscripcion</h6>
                    </div>
                    <form action="{{ route('expediente.store') }}" enctype="multipart/form-data" id="form_expediente">
                        @csrf
                        <div class="card-body p-3" id="fase_uno">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Tipo de Dieta</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="row form-check">
                                        <span>
                                            Hipocalorica (1,200 a 1,500 kcal)
                                            <input type="radio" class="form-check-input" name="tipo_dieta"
                                                value="hipocalorica">
                                        </span>
                                    </div>
                                    <div class="row form-check">
                                        <span>
                                            Hipercaloríca (2,800 a 3000 kcal)
                                            <input type="radio" class="form-check-input" name="tipo_dieta"
                                                value="hipercalorica">
                                        </span>
                                    </div>

                                </div>
                            </div>

                            <h6 for="">I. Identificacion</h6>
                            <select id='search_user' name="search_user" class="form-control">
                                <option value="">Seleccione una Opcion</option>

                                @foreach ($user as $row)
                                    <option value="{{ $row->id }}">{{ $row->nombre }} - {{ $row->codigo_usuario }}
                                    </option>
                                @endforeach

                            </select>
                            <input type="text" id="users_id" name="users_id" value="" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="text-primary">Profesión/Ocupación</label>
                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="text" name="ocupacion">
                                    </div>

                                </div>


                            </div>
                            <div class="row">
                                <label class="text-primary">Nombre Completo</label>
                                <div class="col-md">

                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="text" name="nombre" placeholder="Nombre (S)"
                                            id="nombre">
                                    </div>

                                </div>
                                <div class="col-md">

                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="text" name="apellido_paterno"
                                            id="apellido_paterno" placeholder="Apellido Paterno">
                                    </div>

                                </div>
                                <div class="col-md">

                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="text" name="apellido_materno"
                                            id="apellido_materno" placeholder="Apellido Materno">
                                    </div>

                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <label class="text-primary">Edad</label>
                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="text" name="edad" id="edad">
                                    </div>

                                </div>
                                <div class="col-md">
                                    <label class="text-primary">Número de Celular</label>
                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="text" name="telefono" id="telefono">
                                    </div>

                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="text-primary">Fecha Nacimiento</label>
                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="date" id="fecha_nacimiento"
                                            name="fecha_nacimiento" />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <label class="text-primary">En caso de accidente avisar a:</label>
                                    <div class="input-group input-group-alternative">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                            </svg>
                                        </span>
                                        <input class="form-control" type="text" name="nombre_contacto"
                                            id="nombre_contacto">
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <label class="text-primary" for="tipo_servicio_medico">Tipo de servicio médico</label>
                                <div class="col-md">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="servicio_medico"
                                            value="IMSS">
                                        <label class="form-check-label" for="servicio_medico">IMSS</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="servicio_medico"
                                            value="ISSSTE">
                                        <label class="form-check-label" for="servicio_medico">ISSSTE</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="servicio_medico"
                                            value="Hospital O'horán">
                                        <label class="form-check-label" for="servicio_medico">Hospital
                                            O'horán</label>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="servicio_medico"
                                            value="CRUZ ROJA">
                                        <label class="form-check-label" for="servicio_medico">CRUZ ROJA</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="servicio_medico"
                                            value="Aseguradora Particular">
                                        <label class="form-check-label" for="servicio_medico">Aseguradora
                                            Particular</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="servicio_medico"
                                            value="Aseguradora Particular">
                                        <label class="form-check-label" for="servicio_medico">Médico
                                            Particular</label>
                                    </div>
                                </div>

                            </div>
                            <h6 for="">II. Antecedentes personales en general</h6>
                            <div class="row">
                                <div class="col-md">
                                    <label class="text-primary">Enfermedades Crónicas</label>
                                    <select class="js-example-responsive form-control" multiple="multiple"
                                        id="enfermedades_cronicas" style="width: 100%" name="enfermedades_cronicas[]">
                                        <option value="hipertension_arterial">Hipertension arterial</option>
                                        <option value="colesterol">Colesterol</option>
                                        <option value="trigliceridos">Triglicéridos</option>
                                        <option value="anemia">Anemia</option>
                                        <option value="bronquitis">Bronquitis</option>
                                        <option value="asma">Asma</option>
                                        <option value="convulsiones">Convulsiones</option>
                                        <option value="nervio_ciatico">Inflamación de nervio ciático</option>
                                        <option value="diabetes">Diabetes</option>
                                        <option value="lumbagia">Lumbagia</option>
                                        <option value="arritmia">Arritmias cardiacas</option>
                                        <option value="narcolepsia">Narcolepsia</option>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <label class="text-primary">Enfermedades mentales</label>
                                    <select class="js-example-responsive form-control" multiple="multiple"
                                        id="enfermedades_mentales" name="enfermedades_mentales[]" style="width: 100%">
                                        <option value="ansiedad">Ansiedad</option>
                                        <option value="anorexia">Anorexia</option>
                                        <option value="bulimia">Bulimia</option>
                                        <option value="obesidad">Obesidad</option>
                                        <option value="epilepsia">Epilepsia</option>
                                        <option value="depresion">Depresión</option>
                                        <option value="depresion_postparto">Depresión posparto</option>
                                        <option value="estres_cronico">Estrés crónico</option>
                                        <option value="estres_postraumatico">Estrés postraumático</option>
                                        <option value="fobias">Fobías</option>

                                    </select>
                                </div>


                            </div>
                            <label for="">Ha presentado o presenta alguna de las
                                siguientes condiciones físicas:</label>
                            <div class="row">
                                <div class="col-md">
                                    <label class="text-primary">Uso de lentes para:</label>
                                    <select class="js-example-responsive form-control" multiple="multiple"
                                        id="uso_lentes" style="width: 100%" name="uso_lentes[]">
                                        <option value="descanso">Descanso</option>
                                        <option value="hipermetropia">Hipermetropía</option>
                                        <option value="miopia">Miopía</option>
                                        <option value="astigmatismo">Astigmatismo</option>


                                    </select>
                                </div>
                                <div class="col-md">
                                    <div class="row form-check">
                                        <label class="text-primary">Mas condiciones:</label>
                                        <select class="js-example-responsive form-control" multiple="multiple"
                                            id="mas_condiciones" name="mas_condiciones[]" style="width: 100%">
                                            <option value="desmayos">Desmayos</option>
                                            <option value="mareos">Mareos</option>
                                            <option value="hospitalizaciones">Hospitalizaciones</option>
                                            <option value="fracturas">Fracturas</option>


                                        </select>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary"
                                        id="siguiente_fase_dos">Siguiente</button>
                                </div>

                            </div>

                        </div>
                        @include('expediente.creates.create2')
                        @include('expediente.creates.create3')
                        <div class="row" id="btn_fase_tres">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" id="anterior_fase_dos">Anterior</button>
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary" id="btnGuardarExpediente">Guardar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/expediente/expediente.js') }}"></script>
    <script>
        let getUsuario = '{{ route('expediente.getUsuario') }}'
    </script>

@endsection

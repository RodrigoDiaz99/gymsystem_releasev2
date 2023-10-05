<div class="card-body p-3" id="fase_dos">

    <div class="row">
        <div class="col-md-6">
            <label class="text-primary">Tipo Cirugías</label>


        </div>


    </div>
    <div class="row">

        <div class="col-md-2 form-check">
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="cesarea" name="cesarea">
                    <label class="form-check-label" for="cesarea">
                        Cesarea
                    </label>
                </div>



            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="extirpacion_matriz">
                    <label class="form-check-label" for="extirpacion_matriz">
                        Extirpacion de matriz
                    </label>
                </div>


            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="embarazo" name="embarazo">
                    <label class="form-check-label" for="embarazo">
                        Embarazos
                    </label>
                </div>


            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="abortos" name="abortos">
                    <label class="form-check-label" for="abortos">
                        Abortos
                    </label>
                </div>


            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="extirpacion_apendice" id="extirpacion_apendice">
                    <label class="form-check-label" for="extirpacion_apendice">
                        Extirpación de apéndice
                    </label>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="row"  id="groupCesarea">
                <div class="input-group input-group-alternative">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_cesarea" id="fecha_cesarea">
                </div>
            </div>
            <div class="row" id="groupExtirpacion" >
                <div class="input-group input-group-alternative" >
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_extirpacion" id="fecha_extirpacion">
                </div>
            </div>
            <div class="row" id="groupEmbarazos">
                <div class="col-md">
                    <div class="input-group input-group-alternative">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                            </svg>
                        </span>
                        <input class="form-control" type="number" name="numero_embarazos" id="numero_embarazos">
                    </div>
                </div>
                <div class="col-md">
                    <div class="input-group input-group-alternative">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                            </svg>
                        </span>
                        <input class="form-control" type="date" name="fecha_embarazo" id="fecha_embarazo">
                    </div>
                </div>

            </div>
            <div class="row" id="groupAbortos" >
                <div class="input-group input-group-alternative" >
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_aborto" id="fecha_aborto">
                </div>
            </div>
            <div class="row" id="groupApendice">
                <div class="input-group input-group-alternative">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_extirpacion_apendice" id="fecha_extirpacion_apendice">
                </div>
            </div>

        </div>
        <div class="col-md-2 form-check">
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="extirpacion_vesicula" id="extirpacion_vesicula">
                    <label class="form-check-label" for="extirpacion_vesicula">
                        Extirpación de vesícula
                    </label>
                </div>

            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="hernias" name="hernias">
                    <label class="form-check-label" for="hernias">
                        Hernías
                    </label>
                </div>

            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="extirpacion_senos" name="extirpacion_senos">
                    <label class="form-check-label" for="extirpacion_senos">
                        Extirpacion de senos
                    </label>
                </div>

            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="piedras_riñon" name="piedras_riñon">
                    <label class="form-check-label" for="piedras_riñon">
                        Piedras en el riñón
                    </label>
                </div>

            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="otro" name="otro">
                    <label class="form-check-label" for="otro">
                        U otro (especifique):
                    </label>
                </div>



            </div>


        </div>
        <div class="col-md-4">
            <div class="row" >
                <div class="input-group input-group-alternative" id="groupVesicula">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_extirpacion_vesicula" id="fecha_extirpacion_vesicula">
                </div>
            </div>
            <div class="row" >
                <div class="input-group input-group-alternative" id="groupHernias">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_hernias" id="fecha_hernias">
                </div>
            </div>
            <div class="row" >
                <div class="input-group input-group-alternative" id="groupSenos">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_extirpacion_senos" id="fecha_extirpacion_senos">
                </div>
            </div>

            <div class="row" >
                <div class="input-group input-group-alternative" id="groupRiñon">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>
                    <input class="form-control" type="date" name="fecha_piedras_riñon" id="fecha_piedras_riñon">
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-alternative" id="groupOtro">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </span>

                    <textarea class="form-control" type="text" name="explicacion_otro" id="explicacion_otro" cols="30" rows="2"></textarea>
                </div>
            </div>



        </div>


    </div>
    <div class="row">
        <div class="form-group col-md">
            <label class="text-primary">Síntomas adicionales</label>




            <select class="js-example-responsive form-control selectpicker" data-style="select-with-transition"
                multiple="multiple" style="width: 100%" id="sintomas_adicionales" name="sintomas_adicionales">
                <option value="manchas_oscura_axilas">Manchas oscuras en las axilas</option>
                <option value="manchas_oscura_mejillas">Manchas oscuras en las mejillas</option>
                <option value="manchas_oscura_entrepierna">Manchas oscuras en la entrepierna</option>
                <option value="manchas_rosada_rostro">Mancha rosadas en el rostro</option>
                <option value="manchas_blanca_boca">Manchas blancas cerca de la boca</option>
                <option value="manchas_oscura_cuello">Manchas oscuras en el cuello</option>
                <option value="sintomas_cancer">Síntomas de cáncer</option>
                <option value="acne">Acné</option>
                <option value="alergias">Alergias</option>
                <option value="migraña">Dolores de cabeza intensos
                    (Migraña)</option>
                <option value="golpes_espalda">Golpes en la espalda</option>
                <option value="golpes_cabeza">Golpes en la cabeza</option>
            </select>




        </div>
    </div>
    <div class="row">
        <label class="text-primary">Medicamentos</label>
        <div class="input-group input-group-alternative">
            <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                </svg>
            </span>
            <input type="text" class="form-control" id="medicamentos" name="medicamentos"/>
        </div>

    </div>
    <h6 for="">III. Hábitos psicobiológicos</h6>
    <div class="row">
        <label for="" ><span class="text-primary">Alimentacion </span> (Número de comidas:)</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="numero_comidas" id="numero_comidas_1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    1
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="numero_comidas" id="numero_comidas_2"
                value="2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    2
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="numero_comidas" id="numero_comidas_3"
                value="3">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="numero_comidas" id="numero_comidas_4"
                value="+4">
                <label class="form-check-label" for="flexRadioDefault2">
                    +4
                </label>
            </div>
        </div>

    </div>
    <div class="row">
        <label for="" class="text-primary">Ayunos</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ayunos" id="ayunos_total" value="Total">
                <label class="form-check-label" for="ayunos_total">
                   Total
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ayunos" id="ayunos_parcial"
                    value="Parcial">
                <label class="form-check-label" for="ayunos_parcial">
                 Parcial
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ayunos" id="ayunos_horas"
                    value="Horas">
                <label class="form-check-label" for="ayunos_horas">
                Horas
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="input-group input-group-alternative">
                <span class="input-group-text">
                    Horas
                </span>
                <input class="form-control" type="number" name="horas_ayuno" id="horas_ayuno">
            </div>
        </div>


    </div>
    <div class="row">
        <label for=""><span class="text-primary">Sueño </span> (Horas habituales de descanso:)</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sueño" id="sueño_5" value="5">
                <label class="form-check-label" for="sueño_5">
               5
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sueño" id="sueño_6"
                    value="6">
                <label class="form-check-label" for="sueño_6">
                  6
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sueño" id="sueño_7"
                   value="7" >
                <label class="form-check-label" for="sueño_7">
                  7
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sueño" id="sueño_8"
                   value="+8" >
                <label class="form-check-label" for="sueño_8">
                    +8
                </label>
            </div>
        </div>

    </div>
    <label class="text-primary">Micciones (orinar)</label>
    <div class="row">
        <label for="">Veces al día:</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_dia" id="micciones_dia_1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    1
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_dia" id="micciones_dia_2"
                    value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    2
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_dia" id="micciones_dia_3"
                    value="3">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_dia" id="micciones_dia_4"
                    value="4">
                <label class="form-check-label" for="flexRadioDefault2">
                    4
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_dia" id="micciones_dia_5"
                    value="+5">
                <label class="form-check-label" for="flexRadioDefault2">
                    +5
                </label>
            </div>
        </div>

    </div>
    <div class="row">
        <label for="">Veces en la noche:</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_noche" id="micciones_noche_0">
                <label class="form-check-label" for="flexRadioDefault1">
                    0
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_noche" id="micciones_noche_1"
                    value="1">
                <label class="form-check-label" for="flexRadioDefault2">
                    1
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_noche" id="micciones_noche_2"
                    value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    2
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_noche" id="micciones_noche_3"
                    value="3">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="micciones_noche" id="micciones_noche_4"
                    value="+4">
                <label class="form-check-label" for="micciones_noche_4">
                    +4
                </label>
            </div>
        </div>

    </div>
    <div class="row">
        <label for=""><span class="text-primary">Evacuaciones</span>
            (Defecar)</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="evacuaciones" id="evacuaciones_0" value="0">
                <label class="form-check-label" for="flexRadioDefault1">
                   0
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="evacuaciones" id="evacuaciones_1"
                    value="1">
                <label class="form-check-label" for="flexRadioDefault2">
                    1
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="evacuaciones" id="evacuaciones_2"
                    value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    2
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="evacuaciones" id="evacuaciones_3"
                    value="3">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="evacuaciones" id="evacuaciones_4"
                    value="+4">
                <label class="form-check-label" for="flexRadioDefault2">
                    +4
                </label>
            </div>
        </div>

    </div>
    <div class="row">
        <label for=""><span class="text-primary">Tabaco</span> (Número de cigarros al día
            /semana)</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tabaco" id="tabaco_1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    1
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tabaco" id="tabaco_2"
                    value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    2
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tabaco" id="tabaco_3"
                    value="3">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tabaco" id="tabaco_4"
                    value="4">
                <label class="form-check-label" for="flexRadioDefault2">
                    4
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tabaco" id="tabaco_5"
                    value="+5">
                <label class="form-check-label" for="flexRadioDefault2">
                    +5
                </label>
            </div>
        </div>

    </div>
    <div class="row">
        <label for=""><span class="text-primary">Alcohol</span> (Número de cerveza o alcohol al
            día/ semana)</label>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="alcohol" id="alcohol_1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    1
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="alcohol" id="alcohol_2"
                    value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    2
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="alcohol" id="alcohol_3"
                    value="3">
                <label class="form-check-label" for="flexRadioDefault2">
                    3
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="alcohol" id="alcohol_4"
                    value="4">
                <label class="form-check-label" for="flexRadioDefault2">
                    4
                </label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="alcohol" id="alcohol_5"
                    value="+5">
                <label class="form-check-label" for="flexRadioDefault2">
                    +5
                </label>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" id="anterior_fase_uno">Anterior</button>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" id="siguiente_fase_tres">Siguiente</button>
        </div>
    </div>
</div>

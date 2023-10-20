<!-- Modal -->
<div id="moduloModal" class="modal fade" tabindex="-1" aria-labelledby="usuarioModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="tituloModal" class="modal-title">Modulo</h5>
                <button type="button" class="btn-close" data-bs-dismisss="modal" aria-label="Close"></button>
            </div>
            <form id="moduloForm" action="">
                <input id="modulo_id" type="hidden" name="modulo_id" value="">
                <input id="permiso_id" type="hidden" name="permiso_id" value="">
                <div class="modal-body">
                    @csrf
                    <h6>Información del módulo</h6>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-primary ">Nombre <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <input id="nombre" class="form-control " type="text" name="nombre" value="" placeholder="Usuarios">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-primary ">Ícono</label>
                                <div class="input-group input-group-alternative">
                                    <input id="icon" class="form-control " type="text" name="icon" value="" placeholder="fas fa-user">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-primary ">Tema</label>
                                <div class="input-group input-group-alternative">
                                    <input id="tema" class="form-control " type="text" name="tema" value="" placeholder="text-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row moduloOptions" style="display:none;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-primary ">URL Base <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group input-group-alternative">
                                        <input id="url" class="form-control " type="text" name="url" value="" placeholder="/usuarios/inicio">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="text-primary ">Descripción <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <input id="descripcion" class="form-control " type="text" name="descripcion" value="" placeholder="descripcion">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="form-check">
                                <input id="esMenu" class="form-check-input" value="esMenu" type="radio" name="tipoModulo" checked>
                                <label class="form-check-label" for="esMenu">
                                    Es menú - Módulo que actuará como menú.
                                </label>
                            </div>
                            <div class="form-check">
                                <input id="esPadre" class="form-check-input" type="radio" value="esPadre" name="tipoModulo">
                                <label class="form-check-label" for="esPadre">
                                    Es módulo padre - Módulo que NO actuará como menú.
                                </label>
                            </div>
                            <div class="form-check">
                                <input id="esSubmodulo" class="form-check-input" type="radio" value="esSubmodulo" name="tipoModulo">
                                <label class="form-check-label" for="esSubmodulo">
                                    Es submódulo - Módulo que está dentro de un menú.
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 submoduloOptions" style="display:none;">
                            <div class="form-group">
                                <label class="text-primary">Menú padre <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <select id="id_moduloPadre" class="form-control" name="id_moduloPadre">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moduloOptions" style="display:none;">
                        <hr>
                        <h6>Información del permiso</h6>
                        <hr>

                        <div class="row ">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary ">Nombre<span class="text-danger">*</span></label>
                                    <div class="input-group input-group-alternative">
                                        <input id="permiso_nombre" class="form-control " type="text" name="permiso_nombre" value=""
                                            placeholder="Permiso para acceder al módulo de usuarios">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary ">Clave identificadora<span class="text-danger">*</span></label>
                                    <div class="input-group input-group-alternative">
                                        <input id="clave" class="form-control " type="text" name="clave" value=""
                                            placeholder="MOD_USUARIOS">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-primary ">Descripcion</label>
                                    <div class="input-group input-group-alternative">
                                        <input id="permiso_descripcion" class="form-control " type="text" name="permiso_descripcion" value=""
                                            placeholder="Permiso para acceder al módulo de usuarios">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                    <button type="submit" class="btn btn-success"><strong>Guardar</strong></button>
                </div>
            </form>
        </div>
    </div>
</div>

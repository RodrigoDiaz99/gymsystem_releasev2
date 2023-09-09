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
                                    <input id="nombre" class="form-control " type="text" name="nombre" value="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-primary ">Ícono <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <input id="icon" class="form-control " type="text" name="icon" value="" placeholder="icon">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-primary ">URL Base <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group input-group-alternative">
                                        <input id="urlBase" class="form-control " type="text" name="urlBase" value="" placeholder="urlBase">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="text-primary ">Url completa <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <input id="url" class="form-control " type="text" name="url" value="" placeholder="url">
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <input id="esPadreCheck" class="form-check-input" type="checkbox" value="" checked>
                                <label class="form-check-label" for="esPadreCheck">
                                    Es padre
                                </label>
                            </div>
                        </div>
                        <div id="moduloPadreSections" class="col-md-6" style="display:none;">
                            <div class="form-group">
                                <label class="text-primary">Módulo padre <span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <select id="id_moduloPadre" class="form-control" name="id_moduloPadre">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h6>Información del permiso</h6>
                    <hr>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-primary ">Nombre<span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <input id="permiso_nombre" class="form-control " type="text" name="permiso_nombre" value=""
                                        placeholder="permiso_nombre">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-primary ">Clave identificadora<span class="text-danger">*</span></label>
                                <div class="input-group input-group-alternative">
                                    <input id="clave" class="form-control " type="text" name="clave" value="" placeholder="clave">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="text-primary ">Descripcion</label>
                                <div class="input-group input-group-alternative">
                                    <input id="permiso_descripcion" class="form-control " type="text" name="permiso_descripcion" value=""
                                        placeholder="permiso_descripcion">
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

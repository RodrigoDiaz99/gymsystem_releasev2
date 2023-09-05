<!-- Modal -->
<div id="usuarioModal" class="modal fade" tabindex="-1" aria-labelledby="usuarioModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="tituloModal" class="modal-title">Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismisss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="usuarioForm" action="" method="POST">
                    @method('post')
                    <div class="modal-body">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="text-primary ">Nombre de usuario</label>
                                    <div class="input-group input-group-alternative">
                                        <input id="usuario" class="form-control " type="text" name="usuario" value=""
                                            placeholder="Nombre de usuario">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="text-primary ">Tipo de usuario</label>
                                    <div class="input-group input-group-alternative">
                                      <select class="form-control" name="role_id" id="role_id">
                                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label class="text-primary ">Nombre(s)</label>
                                    <div class="input-group input-group-alternative">
                                        <input id="nombre" class="form-control " type="text" name="nombre" value="" placeholder="Nombre(s)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label class="text-primary ">Apellido paterno</label>
                                    <div class="input-group input-group-alternative">
                                        <input id="apellido_paterno" class="form-control " type="text" name="apellido_paterno" value=""
                                            placeholder="Apellido paterno">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label class="text-primary ">Apellido materno</label>
                                    <div class="input-group input-group-alternative">
                                        <input id="apellido_materno" class="form-control " type="text" name="apellido_materno" value=""
                                            placeholder="Apellido paterno">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-8">
                                <div class="form-group mb-4">
                                    <label class="text-primary ">Correo electrónico</label>
                                    <div class="input-group input-group-alternative">
                                        <input id="email" class="form-control " type="text" name="email" value=""
                                            placeholder="Correo electrónico">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label class="text-primary ">Teléfono</label>
                                    <div class="input-group input-group-alternative">
                                        <input id="telefono" class="form-control " type="text" name="telefono" value="" placeholder="Teléfono">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button type="button" class="btn btn-success"><strong>Guardar</strong></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

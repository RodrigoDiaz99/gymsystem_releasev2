<!-- Modal -->
<div id="permisosModal" class="modal fade" tabindex="-1" aria-labelledby="usuarioModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="tituloModal" class="modal-title">Permisos de <span id="nombreUsuario">[usuario]</span></h5>
                <button type="button" class="btn-close" data-bs-dismisss="modal" aria-label="Close"></button>
            </div>
            <input id="users_id_permisos" type="hidden" name="users_id_permisos" value="">
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div id=permisosTree></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                <button id="btnGuardarPermisos" type="button" class="btn btn-success"><strong>Guardar</strong></button>
            </div>
        </div>

    </div>
</div>

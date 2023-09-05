@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <button id="btnAgregarUsuarios" type="button" class="btn btn-icon btn-success">
                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                <span class="btn-inner--text">Agregar usuarios</span>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Usuarios</h6>
                    </div>
                    <div class="card-body p-3">
                        <table id="gridProductos" class="table align-items-center">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('usuarios.modales.usuarioModal')
@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/usuarios/usuarios.js') }}"></script>
    <script>
        let urlGetRoles = "{{ route('roles.getRoles') }}"
    </script>
@endsection

@extends('layouts.app')
@section('title', 'Módulos')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <button id="btnAgregarModulo" type="button" class="btn btn-icon btn-success">
                <span class="btn-inner--icon"><i class="fas fa-user-plus"></i> </span>
                <span class="btn-inner--text">Agregar módulo</span>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Módulos</h6>
                </div>
                <div class="card-body p-3">
                    <table id="gridModulos" class="table align-items-center">

                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('administracion.modulos.modales.moduloModal')
@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/administracion/modulos.js') }}"></script>
    <script>
        let urlGetModulos = "{{ route('administracion.getModulos') }}"
        let urlGuardarModulo = "{{ route('administracion.guardarModulo') }}"
        let urlObtenerModulo = "{{ route('administracion.obtenerModulo') }}"
    </script>
@endsection

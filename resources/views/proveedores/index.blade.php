@extends('layouts.app')
@section('title', 'Proveedores')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">

            <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">
                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                <span class="btn-inner--text">Agregar Proveedores</span>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Proveedores</h6>
                    </div>
                    <div class="card-body p-3">
                        <table class="table align-items-center" id="gridPrveedores">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('proveedores.modales.create')
@include('proveedores.modales.edit')
@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/proveedores/proveedores.js') }}"></script>
    <script>
        let getProveedores = "{{route('proveedores.getProveedores')}}";
        let proveedoresEdit = "{{route('proveedores.edit')}}";
        let proveedoresUpdateroute = @json(route('proveedores.update', ''));
    </script>
@endsection

@extends('layouts.app')
@section('title', 'Productos')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">

            <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">
                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                <span class="btn-inner--text">Agregar Productos</span>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Productos</h6>
                    </div>
                    <div class="card-body p-3">
                        <table class="table align-items-center" id="gridProductos">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('productos.modales.create')
@include('productos.modales.edit')
@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/productos/productos.js') }}"></script>
    <script>
        let getProductos = "{{route('productos.getProductos')}}";
        let productosEdit = "{{route('productos.edit')}}";
        let productosUpdateroute = @json(route('productos.update', ''));
    </script>
@endsection

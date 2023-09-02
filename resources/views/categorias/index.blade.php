@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">

            <button type="button" class="btn btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">
                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                <span class="btn-inner--text">Agregar Categoria</span>
            </button>
        </div>

    </div>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Categorias</h6>
                    </div>
                    <div class="card-body p-3">
                        <table class="table align-items-center" id="gridCategorias">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('categorias.modales.create')
@include('categorias.modales.edit')
@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/categorias/categorias.js') }}"></script>
    <script>
        let getCategorias = "{{route('categorias.getCategorias')}}";
        let CategoriasUpdate = "{{route('categorias.update')}}";
        let categoriasEditRoute = @json(route('categorias.edit', ''));
    </script>
@endsection

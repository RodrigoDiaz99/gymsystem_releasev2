@extends('layouts.app')
@section('title', 'Expedientes')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">

            <a type="button" class="btn btn-icon btn-success" href="{{route('expediente.create')}}">
                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                <span class="btn-inner--text">Agregar Expediente</span>
            </a>
        </div>

    </div>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Expediente</h6>
                    </div>
                    <div class="card-body p-3">
                        <table class="table align-items-center" id="gridMembresias">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('membresias.modales.create')
@include('membresias.modales.edit')
@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/membresias/membresias.js') }}"></script>
    <script>
        let getMembresias = "{{route('membresias.getMembresias')}}";
        let membresiasEdit = "{{route('membresias.edit')}}";
        let membresiasUpdateroute = @json(route('membresias.update', ''));
    </script>
@endsection

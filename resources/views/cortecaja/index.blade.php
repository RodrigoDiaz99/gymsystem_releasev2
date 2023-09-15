@extends('layouts.app')
@section('title', 'Productos')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">


        </div>

    </div>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Corte de Caja</h6>
                    </div>
                    <div class="card-body p-3">
                        <table class="table align-items-center" id="gridCorteCaja">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/cortecaja/cortecaja.js') }}"></script>
    <script>
        let getCorteCaja = "{{route('corte.getCorteCaja')}}";

    </script>
@endsection

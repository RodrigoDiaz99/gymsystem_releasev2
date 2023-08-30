@extends('layouts.app')
@section('title', 'Categorias')
@section('content')



<div class="row mt-4">

    <div class="col-md">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Categorias</h6>
            </div>
            <div class="card-body p-3">
                <table class="table" id="gridCategorias">

                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/modulos/categorias/categorias.js')}}"></script>
@endsection

@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
    @include('usuarios.capas.usuariosCapa')
    @include('usuarios.modales.usuarioModal')
@endsection
@section('scripts')
    <script src="{{ asset('js/modulos/usuarios/usuarios.js') }}"></script>
    <script>
        let urlGetRoles = "{{ route('roles.getRoles') }}"
        let urlGetUsers = "{{ route('usuarios.getUsers') }}"
        let urlSaveUser = "{{ route('usuario.saveUser') }}"
    </script>
@endsection

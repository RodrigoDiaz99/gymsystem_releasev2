@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
    @include('usuarios.capas.usuariosCapa')
    @include('usuarios.modales.usuarioModal')
    @include('usuarios.modales.permisosModal')
@endsection
@section('scripts')
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/modulos/usuarios/usuarios.js') }}"></script>
    <script>
        let urlGetRoles = "{{ route('roles.getRoles') }}"
        let urlGetUsers = "{{ route('usuarios.getUsers') }}"
        let urlSaveUser = "{{ route('usuario.saveUser') }}"
        let urlGetUserData = "{{ route('usuario.getUserData') }}"
        let urlGetPermisos = "{{ route('usuario.getPermisos') }}"
    </script>
@endsection
@section('css')
    <style>
        /* Necesario para ajustar los estilos de checkbox del gijgo tree */
        #permisosTree label {
            display: inline;
        }
    </style>
@endsection

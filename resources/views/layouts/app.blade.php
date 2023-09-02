@include('layouts.head')


<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('layouts.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            @yield('content')

            @include('layouts.footer')
        </div>
    </main>
    @include('layouts.plugin')
    @include('layouts.scripts')
    @include('layouts.mensajes')
    @yield('scripts')
</body>

</html>

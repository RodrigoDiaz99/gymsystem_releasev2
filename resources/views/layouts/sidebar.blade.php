<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <img src="{{ asset('img/spacio_fems_black.png') }}"
            class="p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            alt="iconSidenav">

        <a class="navbar-brand m-0" href="{{ route('home') }}">
            <img src="{{ asset('img/spacio_fems_black.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Spacio Fem's</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inicio</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Informacion</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <div

                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-money-bill-wave text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cortes de Caja</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/billing.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-chart-bar text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Estadisticas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/sign-up.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-contract text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Bitacoras</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Productos</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('membresias.index')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-box-open text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Membresias</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('productos.index')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fab fa-product-hunt text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Productos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('categorias.index')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-list-alt text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Categorias</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Usuarios</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('usuarios.index')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('proveedores.index')}}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Proveedores</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="../pages/sign-up.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-clipboard-list text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Expedientes</span>
                </a>
            </li>

        </ul>
    </div>

</aside>

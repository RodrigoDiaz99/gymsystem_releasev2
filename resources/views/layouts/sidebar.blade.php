<aside id="sidenav-main" class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ">
    <div class="sidenav-header">
        <img src="{{ asset('img/spacio_fems_black.png') }}" class="p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            alt="iconSidenav">

        <a class="navbar-brand m-0" href="{{ route('home') }}">
            <img src="{{ asset('img/spacio_fems_black.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Spacio Fem's</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div id="sidenav-collapse-main" class="collapse navbar-collapse w-auto h-auto">
        <ul class="navbar-nav">
            @foreach ($menuData as $menuItem)
                @if ($menuItem['esMenu'] == 0)
                    <li class="nav-item">
                        <a class="nav-link " href="..{{$menuItem['url']}}">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="{{ $menuItem['icono'] }}  text-warning text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">{{ $menuItem['nombre'] }}</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">{{ $menuItem['nombre_padre'] }}</h6>
                    </li>
                    @foreach ($menuItem['submodulo'] as $submodulo)
                        <li class="nav-item">
                            <a class="nav-link " href="..{{$submodulo['url']}}">
                                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="{{ $submodulo['icono'] }} text-warning text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1">{{ $submodulo['nombre'] }}</span>
                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach

        </ul>
    </div>

</aside>

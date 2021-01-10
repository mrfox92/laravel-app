<!-- Start Sidemenu Area -->
<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('img/small-logo.png') }}" alt="image">
            {{-- <span>Fiva</span> --}}
            <span>Visitante</span>
        </a>

        <div class="burger-menu d-none d-lg-block">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>
    </div>

    <div class="sidemenu-body">
        <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
            {{-- <li class="nav-item-title">
                Main
            </li> --}}

            <li class="nav-item{{ App\Helpers\Helper::sidebarItemSelected('login') }}">
                <a class="nav-link" href="{{ route('login') }}">
                    <span class="icon"><i class="bx bx-user-circle"></i></span>
                    <span class="menu-title">{{ __('Ingresar') }}</span>
                </a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item{{ App\Helpers\Helper::sidebarItemSelected('register') }}">
                    <a class="nav-link" href="{{ route('register') }}">
                        <span class="icon"><i class="bx bxs-user-plus"></i></span>
                        <span class="menu-title">{{ __('Registrarme') }}</span>
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-home-circle'></i></span>
                    <span class="menu-title">Categorias</span>
                    <span class="badge">{{ $categories->count() }}</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    
                     @forelse ($categories as $category)
                        <li class="nav-item">
                            <a href="{{ route('categories.filter', ['category' => $category->name]) }}" class="nav-link">
                                <span class="icon"><i class='bx bx-analyse'></i></span>
                                <span class="menu-title">{{ $category->name }}</span>
                            </a>
                        </li>
                     @empty
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <span class="icon"><i class='bx bx-analyse'></i></span> --}}
                                <span class="menu-title">Todos</span>
                            </a>
                        </li>
                     @endforelse

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-map'></i></span>
                    <span class="menu-title">Regiones</span>
                    <span class="badge">{{ $regions->count() }}</span>
                </a>

                <ul class="sidemenu-nav-second-level">

                    @forelse ($regions as $region)
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <span class="icon"><i class='bx bx-analyse'></i></span> --}}
                                <span class="menu-title">{{ $region->name }}</span>
                            </a>
                        </li>
                    @empty
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <span class="icon"><i class='bx bx-analyse'></i></span> --}}
                                <span class="menu-title">Todos</span>
                            </a>
                        </li>
                    @endforelse

                </ul>
            </li>

            {{-- <li class="nav-item-title">
                Apps
            </li> --}}
            
        </ul>
    </div>
</div>
<!-- End Sidemenu Area -->
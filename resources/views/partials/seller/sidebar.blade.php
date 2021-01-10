<!-- Start Sidemenu Area -->
<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('img/small-logo.png') }}" alt="image">
            {{-- <span>Fiva</span> --}}
            <span>Vendedor</span>
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
            <li class="nav-item-title">
                Principal
            </li>

            <li class="nav-item">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-box'></i></span>
                    <span class="menu-title">Mis anuncios</span>
                    <span class="badge">{{ \App\Service::where('seller_id', auth()->user()->seller->id)->count() }}</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item">
                        <a href="{{ route('seller.services') }}" class="nav-link">
                            <span class="icon"><i class='bx bx-show-alt'></i></span>
                            <span class="menu-title">Ver Todos</span>
                        </a>    
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services.create') }}" class="nav-link">
                            <span class="icon"><i class='bx bx-layer-plus'></i></span>
                            <span class="menu-title">Agregar nuevo</span>
                        </a>    
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sellers.analytics') }}" class="nav-link">
                            <span class="icon"><i class='bx bx-line-chart'></i></span>
                            <span class="menu-title">Mis Estadísticas</span>
                        </a>    
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('sellers.chats') }}" class="nav-link">
                    <span class="icon"><i class='bx bx-message'></i></span>
                    <span class="menu-title">Chats</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('sellers.contacts') }}" class="nav-link">
                    <span class="icon"><i class='bx bxs-contact'></i></span>
                    <span class="menu-title">Contactos</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sellers.wishlist') }}" class="nav-link">
                    <span class="icon"><i class='bx bxs-heart'></i></span>
                    <span class="menu-title">Favoritos</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End Sidemenu Area -->
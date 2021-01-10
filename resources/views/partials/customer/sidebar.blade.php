<!-- Start Sidemenu Area -->
<div class="sidemenu-area">
    <div class="sidemenu-header">
        <a href="dashboard-analytics.html" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('img/small-logo.png') }}" alt="image">
            {{-- <span>Fiva</span> --}}
            <span>Consumidor</span>
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
                Main
            </li>
            <li class="nav-item mm-active">
                <a href="#" class="collapsed-nav-link nav-link" aria-expanded="false">
                    <span class="icon"><i class='bx bx-home-circle'></i></span>
                    <span class="menu-title">Dashboard</span>
                    <span class="badge">2</span>
                </a>

                <ul class="sidemenu-nav-second-level">
                    <li class="nav-item mm-active">
                        <a href="dashboard-analytics.html" class="nav-link">
                            <span class="icon"><i class='bx bx-analyse'></i></span>
                            <span class="menu-title">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-ecommerce.html" class="nav-link">
                            <span class="icon"><i class='bx bxs-shopping-bag'></i></span>
                            <span class="menu-title">eCommerce</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="app-chat.html" class="nav-link">
                    <span class="icon"><i class='bx bx-heart'></i></span>
                    <span class="menu-title">Favoritos</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="app-chat.html" class="nav-link">
                    <span class="icon"><i class='bx bx-message-alt'></i></span>
                    <span class="menu-title">Notificaciones</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="app-chat.html" class="nav-link">
                    <span class="icon"><i class='bx bx-sticker'></i></span>
                    <span class="menu-title">Mis suscripciones</span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- End Sidemenu Area -->
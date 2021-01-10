<!-- Top Navbar Area -->
<nav class="navbar top-navbar navbar-expand">
    <div class="collapse navbar-collapse" id="navbarSupportContent">
        <div class="responsive-burger-menu d-block d-lg-none">
            <span class="top-bar"></span>
            <span class="middle-bar"></span>
            <span class="bottom-bar"></span>
        </div>

        <form class="nav-search-form d-none ml-auto d-md-block">
            <label><i class='bx bx-search'></i></label>
            <input type="text" class="form-control" placeholder="Buscar...">
        </form>

        <ul class="navbar-nav right-nav align-items-center">

            <li class="nav-item message-box dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="message-btn">
                        <i class='bx bx-envelope'></i>

                        <span class="badge badge-primary">4</span>
                    </div>
                </a>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex justify-content-between align-items-center">
                        <span class="title d-inline-block">4 New Message</span>
                        <span class="clear-all-btn d-inline-block">Clear All</span>
                    </div>

                    <div class="dropdown-body">
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('img/user1.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                    <span class="d-block">Sarah Taylor</span>
                                    <p class="sub-text mb-0">UX/UI design</p>
                                </div>
                                <p class="time-text mb-0">2 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('img/user2.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                <span class="d-block">Lucy Eva</span>
                                    <p class="sub-text mb-0">Web developers</p>
                                </div>
                                <p class="time-text mb-0">5 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('img/user3.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                <span class="d-block">James Anderson</span>
                                    <p class="sub-text mb-0">Content whitter</p>
                                </div>
                                <p class="time-text mb-0">3 min ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="figure">
                                <img src="{{ asset('img/user4.jpg') }}" class="rounded-circle" alt="image">
                            </div>

                            <div class="content d-flex justify-content-between align-items-center">
                                <div class="text">
                                <span class="d-block">Steven Smith</span>
                                    <p class="sub-text mb-0">Digital marketing</p>
                                </div>
                                <p class="time-text mb-0">7 min ago</p>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <a href="#" class="dropdown-item">View All</a>
                    </div>
                </div>
            </li>

            <li class="nav-item notification-box dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="notification-btn">
                        <i class='bx bx-bell'></i>

                        <span class="badge badge-secondary">5</span>
                    </div>
                </a>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex justify-content-between align-items-center">
                        <span class="title d-inline-block">6 New Notifications</span>
                        <span class="mark-all-btn d-inline-block">Mark all as read</span>
                    </div>

                    <div class="dropdown-body">
                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-message-rounded-dots'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Just sent a new message!</span>
                                <p class="sub-text mb-0">2 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-user'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">New customer registered</span>
                                <p class="sub-text mb-0">5 sec ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-layer'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Apps are ready for update</span>
                                <p class="sub-text mb-0">3 min ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-hourglass'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Your item is shipped</span>
                                <p class="sub-text mb-0">7 min ago</p>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center">
                            <div class="icon">
                                <i class='bx bx-comment-dots'></i>
                            </div>

                            <div class="content">
                                <span class="d-block">Steven commented on your post</span>
                                <p class="sub-text mb-0">1 sec ago</p>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <a href="#" class="dropdown-item">View All</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown profile-nav-item">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="menu-profile">
                        <span class="name">Hola! {{ auth()->user()->name }}</span>
                        <img src="{{ asset('img/user1.jpg') }}" class="rounded-circle" alt="image">
                    </div>
                </a>

                <div class="dropdown-menu">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="figure mb-3">
                            <img src="{{ asset('img/user1.jpg') }}" class="rounded-circle" alt="image">
                        </div>

                        <div class="info text-center">
                            <span class="name">{{ auth()->user()->name }}</span>
                            <p class="mb-3 email">{{ auth()->user()->email }}</p>
                        </div>
                    </div>

                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-user'></i> <span>{{ __('Perfil') }}</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-envelope'></i> <span>{{ __('Mensajes') }}</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-edit-alt'></i> <span>{{ __('Editar Perfil') }}</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-cog'></i> <span>{{ __('Configuraciones') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-footer">
                        <ul class="profile-nav">
                            <li class="nav-item">
                                @include('partials.logout_form')
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- End Top Navbar Area -->
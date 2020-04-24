<a class="dropdown-item nav-link" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"
>
    <i class='bx bx-log-out'></i> <span>{{ __('Cerrar sesión') }}</span>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
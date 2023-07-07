@php
    use Illuminate\Support\Facades\Route;
    use Darryldecode\Cart\Cart;
    
@endphp
{{-- <x-head /> --}}
<nav class="navbar navbar-expand-lg p-3 sticky-top navbarCustom">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand animate__animated animate__headShake" href="{{ route('products.index') }}">Disfrazado</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 animate__animated animate__headShake">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">
                        <i class="bi bi-house-door">
                            <span class="ml-2">Inicio</span>
                        </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Todos los artículos</a>
                </li>
            </ul>
            <div class="d-flex">
                @if (Auth::check())
                    <span class="mr-2">Bienvenido {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-dropdown-link>
                    </form>
                @else
                    @if (Route::currentRouteName() != 'login')
                        <a href="{{ route('login') }}" class="mx-2 animate__animated animate__headShake"><span
                                class="btnNav">Login</span></a>
                    @endif

                    @if (Route::currentRouteName() != 'register')
                        <a href="{{ route('register') }}" class="mx-2 animate__animated animate__headShake"><span
                                class="btnNav">Registrar</span></a>
                    @endif

                @endif
            </div>
            <div class="d-flex">
                @if (\Cart::getContent()->count() > 0)
                    <a href="{{ route('cart.checkin') }}" class="btn btn-outline-dark">
                        <i class="bi-cart-fill me-1"></i>
                        Ver Carrito
                        <span class="badge bg-dark text-white ms-1 rounded-pill">
                        @else
                            <a href="#" class="btn btn-outline-dark">
                                <i class="bi-cart-fill me-1"></i>
                                Ver Carrito
                                <span class="badge bg-dark text-white ms-1 rounded-pill">
                @endif
                {{ \Cart::getContent()->count() }}
                </span>
                </a>
            </div>
        </div>
    </div>
</nav>

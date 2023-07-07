<!DOCTYPE html>
@php
    use Illuminate\Support\Facades\Route;
    use Darryldecode\Cart\Cart;
    
@endphp
<html lang="es">
<x-head />

<body>
    <header>
        <!-- Nav Bar-->
        <x-navbar />
        <!-- /Nav Bar-->

        <!-- Slider-->
        @if (\Session::has('cartSuccess'))
            <div class="alert alert-success">
                <ul>
                    <h3 class="text-success text-center">{!! \Session::get('cartSuccess') !!}</h3>
                </ul>
            </div>
        @endif
        <div class="bgcustom pt-5">
            <div id="carouselExampleDark" class="carousel carousel-dark slide container-fluid pb-5"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('/images/slide/01.jpg') }}" class="d-block img-fluid mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/images/slide/02.jpg') }}" class="d-block img-fluid mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/images/slide/03.jpg') }}" class="d-block img-fluid mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/images/slide/04.jpg') }}" class="d-block img-fluid mx-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('/images/slide/05.jpg') }}" class="d-block  img-fluid mx-auto" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
        <!-- End Slider-->

        {{-- Tipo de disfraces --}}
        <div class="d-flex justify-content-center gap-4 flex-wrap mt-5">
            <div class="card div__imgcustom">
                <div>
                    Disfraces para niños
                </div>
                <a href="{{ route('infantil') }}">
                    <img class="imgcustom" src="{{ url('/images/childrenv2.jpg') }}"
                        alt="Imagen de disfraces infantiles" />
                </a>
            </div>
            <div class="card div__imgcustom">
                <div>
                    Disfraces para mujeres
                </div>
                <a href="{{ route('mujer') }}">
                    <img class="imgcustom" src="{{ url('/images/womenv2.jpg') }}" alt="Imagen de disfraces de mujeres">
                </a>
            </div>
            <div class="card div__imgcustom">
                <div>
                    Disfraces para hombres
                </div>
                <a href="{{ route('hombre') }}">
                    <img class="imgcustom" src="{{ url('/images/menv2.jpg') }}" alt="Imagen de disfraces de hombres">
                </a>
            </div>
        </div>
    </header>
    {{-- Tipo de disfraces --}}
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            {{-- Table --}}
            <x-table :type=$products :cart=$cart />
            {{-- /Table --}}
        </div>
    </section>
    <!-- Footer-->
    <x-footer></x-footer>
</body>

</html>

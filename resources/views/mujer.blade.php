<!DOCTYPE html>
<html lang="es">
    <x-head/>
    <body>        
        <!-- Slider-->
        <header>
            <!-- Nav Bar-->
            <x-navbar/>
            <!-- /Nav Bar-->
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                            {{-- Table --}}
            <x-table :type=$mujer :cart=$cart />
            {{-- /Table --}}
            </div>
        </section>
        <!-- Footer-->
        <x-footer></x-footer>
    </body>
</html>

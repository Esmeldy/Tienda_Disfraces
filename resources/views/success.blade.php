<!DOCTYPE html>
<html lang="es">
<x-head />

<body>
    <header>
        <!-- Nav Bar-->
        <x-navbar />
        <!-- /Nav Bar-->
    </header>
    <main class="container text-center">
        <div class="alert alert-success" role="alert">
           <span class="fs-4"> Su pedido se ha realizado correctamente... <br> Ya lo estamos preparando para su envío...</span>
        </div>
        <img src="{{ asset('images/success.gif') }}" class="img-fluid" alt="">
        <div class="mt-2">
            <span class="fs-4 text-success">Gracias por confiar en nosotros</span>
        </div>
    </main>

</body>

</html>

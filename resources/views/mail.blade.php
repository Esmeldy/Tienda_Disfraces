<!DOCTYPE html>
<html lang="es">
    <x-head/>
<body>
    <div class="card">
        <div class="card-body">
            <h1>Datos del formulario:</h1>
            <div>
                <label class="mr-2"><strong>Nombre:</strong></label> {{ $contacto['name'] }}
            </div>
            <div>
                <label class="mr-2"><strong>Nombre:</strong></label> {{ $contacto['phone'] }}
                
            </div>
            <div>
                <label class="mr-2"><strong>Nombre:</strong></label> {{ $contacto['email'] }}
            </div>
            <div>
                <label class="mr-2"><strong>Nombre:</strong></label> {{ $contacto['message'] }}
            </div>
        </div>

    </div>

</body>

</html>
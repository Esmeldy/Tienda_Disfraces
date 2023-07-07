<!DOCTYPE html>
<html lang="es">
<x-head />
<!-- Nav Bar-->
<x-navbar />
<!-- /Nav Bar-->
<body>
    <div class="container form">
        <div class="row">
            <div class="col-md-12">
                <div class="">

                    @if (session('success'))
                        <div class="alert alert-success mt-5 mt-5" role="alert">
                            <h4 class="alert-heading">Mensaje enviado correctamente!</h4>
                            <p>Nuestro equipo evaluará tu mensaje y nos pondremos con tu caso en la mayor brevedad
                                posible</p>
                            <hr>
                            <p class="mb-0 fs-4">Si quieres seguir navegando en nuestra web, puedes regresar al <a
                                    class="btn btn-secondary" href="{{ route('products.index') }}">Inicio</a></p>
                        </div>
                    @else
                        <form class="form-horizontal" method="post" action="{{ route('store') }}">
                            @csrf
                            <fieldset>
                                <legend class="text-center header">Déjanos un mensaje:</legend>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-user bigicon"></i></span>
                                    <div class="col-md-8 mx-auto">
                                        <input id="name" name="name" type="text" placeholder="Nombre"
                                            class="form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-envelope-o bigicon"></i></span>
                                    <div class="col-md-8 mx-auto">
                                        <input id="email" name="email" type="email"
                                            placeholder="Correo electrónico" class="form-control">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-phone-square bigicon"></i></span>
                                    <div class="col-md-8 mx-auto">
                                        <input id="phone" name="phone" type="text" placeholder="Teléfono"
                                            class="form-control">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"><i
                                            class="fa fa-pencil-square-o bigicon"></i></span>
                                    <div class="col-md-8 mx-auto">
                                        <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje aquí..." rows="4"></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 text-center  mt-5">
                                        <button type="submit"
                                            class="btn btn-cm-primary btnNav">Enviar</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>

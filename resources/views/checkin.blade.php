@php
    use Illuminate\Support\Facades\Route;
    use Darryldecode\Cart\Cart;
    
@endphp
<x-head />
<x-navbar />
<div class="table-responsive col-6 mx-auto customTable pt-5">
    <table class="table table-striped">
        <h1 class="text-success-emphasis text-center mt-3">Datos del pedido</h1>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <h3 class="text-success text-center">{!! \Session::get('success') !!}</h3>
                </ul>
            </div>
        @endif
        @if (count(\Cart::getContent()) > 0)
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            @foreach ($pedidos as $value)
                <tbody>
                    <form action="{{ route('removeitem', $value->id) }}" method="post">
                        @csrf
                        <tr>
                            <input type="hidden" name="id" value="{{ $value->id }}">
                            <td scope="row">{{ $value->name }}</td>
                            <td>{{ $value->quantity }}</td>
                            <td class="col-1">{{ $value->price }}</td>
                            <td> <button type="submit" class="border-0"><i class="bi bi-trash"></i></button> </td>
                        </tr>
                    </form>
                </tbody>
            @endforeach
        @else
            <div class="mb-5">
                <div class="card">
                    <div class="card-body bg-warning p-5  rounded">
                        <h3 class="text-center">Ningún pedido añadido al carrito</h3>
                    </div>
                </div>
                <div class="row mt-4">
                    <a class="btn btn-success fs-4" href="{{ route('products.index') }}">Ir al Inicio</a>
                </div>
            </div>
        @endif
    </table>

    @if (count(\Cart::getContent()) > 0)
        <div class="d-grid gap-5 d-md-flex justify-content-md-between">

            <div class="">
                <a href="{{ route('products.index') }}" class="btn btn-info">Seguir comprando</a>
            </div>
            <div class="">
                <form action="{{ route('cart.checkout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success px-5">Realizar Pedido</button>

                </form>
            </div>
        </div>
    @endif

</div>
<x-footer />

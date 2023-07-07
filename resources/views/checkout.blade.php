@php
    use Illuminate\Support\Facades\Route;
    use Darryldecode\Cart\Cart;
    
@endphp
<x-head />
<x-navbar />
<div class="table-responsive col-6 mx-auto customTable pt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @foreach ($pedidos as $value)
                <tr>
                    <th scope="row">{{ $value->name }}</th>
                    {{-- <td><input type="number" name="quantity" value="{{ $value->quantity }}"></td> --}}
                    <td class="col-3">{{ $value->quantity }}</td>
                    <td class="col-1">{{ $value->price }}</td>
                    <td>{{ $priceTotal = $value->price * $value->quantity }}</td>
                    @php
                        $total += $priceTotal;
                    @endphp
                </tr>
                
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <td class="col-12">
                    <h4>Total pedido</h4>
                </td>
                <td class="col"></td>
                <td class="col"></td>
                <td class="col">
                    <h5>{{ $total }}</h5>
                </td>
            </tr>
        </tfoot>
    </table>
    <div class="d-grid gap-5 d-md-flex justify-content-md-between">

        <div class="">
            <form action="{{ route('cart.clear') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-info">Cancelar pedido</a>
            </form>
        </div>
        <div class="">
            @if (Auth::check())
                <form action="{{ route('stripePay') }}" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{ $total }}">
                    <button type="submit" class="btn btn-success px-5">Pagar</button>
                </form>
            @endif

        </div>
    </div>
</div>
<x-footer />

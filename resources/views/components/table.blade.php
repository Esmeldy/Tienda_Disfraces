<div class="row justify-content-center">

    @foreach ($type as $item)
        <div class="card p-0 mx-2 my-2" style="width: 18rem;">
            <!-- Imagen de Producto-->
            <img src="{{ $item->image }}" class="imgCustom img-fluid">
            <!-- Detalles del producto-->
            <div class="card-body mb-auto">
                <h5 class="card-title">{{ $item->description }}</h5>
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                </div>
                <div class="row">
                    <span class="badge text-bg-light px-5 py-2">{{ $item->price }}€</span>
                </div>
                <!-- Product actions-->
                <div class="py-2 mx-1 border-top-0 bg-transparent">
                    <div class="card-text">
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="price" value="{{ $item->price }}">
                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                @if ($cart->where('id', $item->id)->count())
                                    <span class="col-4 mx-auto text-bg-secondary rounded py-2 fs-6">Añadido</span>
                                @else
                                    <div class="d-flex justify-content-center gap-1">
                                        <input type="number" name="quantity" value="1" class="w-25 rounded">
                                        <button type="submit" class="btn btn-outline-dark">Añadir</button>
                                    </div>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
</div>
    <div class="d-flex justify-content-center">
        {{ $type->links() }}
    </div>

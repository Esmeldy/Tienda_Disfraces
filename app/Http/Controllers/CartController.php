<?php

namespace App\Http\Controllers;


use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

class CartController extends Controller
{
    public function store(Request $request){
        $product = Product::find($request->product_id);
        \Cart::add($product->id, $product->name, $request->price, $request->quantity);
        
        return back()->with('message', 'Agregado correctamente');

    }
    public function removeItem(Request $request){
        
        \Cart::remove([
            'id' => $request->id,
        ]);
        
        return back()->with('success', 'Artículo eliminado correctamente');
    }
    public function checkin(Request $request){
        $pedidos = \Cart::getContent();

        return view('checkin', ['pedidos' => $pedidos]);
    }
    public function checkout(Request $request){
        $pedidos = \Cart::getContent();
        return view('checkout', ['pedidos' => $pedidos]);
    }
    public function clearAll(Request $request){
        \Cart::clear();
        
        return redirect('/tienda')->with('cartSuccess', 'Carrito borrado correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCollection;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductsController extends Controller
{
    protected CartCollection $cart;
    public function index()
    {
        $this->cart = \Cart::getContent();
        $offers = Offer::all();
        $products = Product::paginate(8);
        return view('index', ['products' => $products, 'offers' => $offers, 'cart' => $this->cart]);
    }
    public function products()
    {
        $this->cart = \Cart::getContent();
        $offers = Offer::all();
        $products = Product::paginate(8);
        return view('products', ['products' => $products, 'offers' => $offers, 'cart' => $this->cart]);
    }
    public function infantil()
    {
        $this->cart = \Cart::getContent();
        $infantil = DB::table('products')->where('age', 'Infantiles')->paginate(4);
        return view('infantil', ['infantil' => $infantil, 'cart' => $this->cart]);
    }
    public function hombre()
    {
        $this->cart = \Cart::getContent();
        $hombre = DB::table('products')->where('age', 'Hombre')->paginate(4);
        return view('hombre', ['hombre' => $hombre, 'cart' => $this->cart]);
    }
    public function mujer()
    {
        $this->cart = \Cart::getContent();
        $mujer = DB::table('products')->where('age', 'Mujer')->paginate(4);
        return view('mujer', ['mujer' => $mujer, 'cart' => $this->cart]);
    }
}

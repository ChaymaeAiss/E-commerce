<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        
        return view('Frontend.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $product = Produit::find($request->id);
        Cart::instance('cart')->add($product->id,$product->designation,$request->quantity,$product->prix_ht)->associate('App\Models\Produit');
        return redirect()->back()->with('message','Success ! Item has been added successfully!');
    } 
    
    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId,$request->quantity);
        return redirect()->route('cart.index');
    } 

    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }

    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }
}

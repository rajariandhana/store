<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        // dont forget to validate
        $product = Product::findOrFail($request->input('product_id'));
        Cart::add(
            $product->product_id,
            $product->name,
            $request->input('quantity'),
            $product->price,
            0,
            [
                'size'=>$request->input('Size'),
                'color'=>$request->input('Color')
            ]
        );
        return redirect('home');
    }
}

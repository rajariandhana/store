<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});
Route::get('/products', function () {
    $products = Product::get();
    dump($products);
    return view('products',
        [
            'title'=>'Products',
            'products'=> $products
        //use paginate or simplePaginate
    ]);
});

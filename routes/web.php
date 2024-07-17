<?php

use App\Models\Product;
use App\Models\Category;
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
Route::get('product/{product:product_id}',function(Product $product){
    return view('product',['title'=> $product->name,'product'=>$product]);
});
Route::get('/top',function(){
    $products = Product::where('category_id','like','top')->get();
    return view('products',['title'=> 'Top', 'products'=>$products]);
});

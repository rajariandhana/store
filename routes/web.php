<?php

use App\Http\Controllers\CartController;
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
Route::get('/bottom',function(){
    $products = Product::where('category_id','like','bottom')->get();
    return view('products',['title'=> 'Bottom', 'products'=>$products]);
});
Route::get('/footwear',function(){
    $products = Product::where('category_id','like','footwear')->get();
    return view('products',['title'=> 'Footwear', 'products'=>$products]);
});
Route::get('/other',function(){
    $products = Product::where('category_id','like','other')->get();
    return view('products',['title'=> 'Other', 'products'=>$products]);
});

Route::post('/',[CartController::class,'store'])->name('cart.store');

Route::get('/cart',function(){
    return view('cart',['title'=>'Cart','items'=>session()->all()]);
});
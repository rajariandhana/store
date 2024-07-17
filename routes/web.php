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
Route::get('products/{category:slug}',function(Category $category){
    return view('products',['title'=> 'Products in: ' . $category->name,'products'=>$category->products]);
});
Route::get('/top',function(){
    $products = Product::where('category_id','like','1')->get();
    return view('products',['title'=> 'Top', 'products'=>$products]);
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});
Route::get('/products', function () {
    return view('products',
        [
            'title'=>'Products',
            'products'=> ""
        //use paginate or simplePaginate
    ]);
});

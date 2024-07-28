<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowProduct;

Route::get('test', function () {
    return view('main2',['title'=>'test Page']);
});
Route::get('/', function () {
    return view('home',['title'=>'Home Page'])->name('home');
});
Route::get('home', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('home2', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('products', function () {
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
    return view('product',[
        'title'=> $product->name,
        'product'=>$product
    ]);
});
// Route::get('product/{product_id}',ShowProduct::class);


Route::get('top',function(){
    $products = Product::where('category_id','like','top')->get();
    return view('products',['title'=> 'Top', 'products'=>$products]);
});
Route::get('bottom',function(){
    $products = Product::where('category_id','like','bottom')->get();
    return view('products',['title'=> 'Bottom', 'products'=>$products]);
});
Route::get('footwear',function(){
    $products = Product::where('category_id','like','footwear')->get();
    return view('products',['title'=> 'Footwear', 'products'=>$products]);
});
Route::get('other',function(){
    $products = Product::where('category_id','like','other')->get();
    return view('products',['title'=> 'Other', 'products'=>$products]);
});

Route::get('cart',function(){
    return view('cart',
        [
            'title'=>'Cart',
            // 'items'=>[CartController::class,'GetItems']
        ]);
});
Route::get('cart',[CartController::class,'ShowCart']);

Route::post('/cartStore',[CartController::class,'store']);
Route::post('cartClear',[CartController::class,'Clear']);

Route::get('/checkout',[OrderController::class,'checkout']);

// Route::get('/orders',[OrderController::class,'orders']);


Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('orders', [OrderController::class, 'index'])->name('admin.orders');
        Route::get('order/{order_id}', [OrderController::class, 'showOrderProducts'])->name('admin.order-product');
    });
});





// Route::middleware(['auth:admin'])->group(function () {
//     Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
// });

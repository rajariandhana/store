<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function ShowCart(){
        return view('cart',
        [
            'title'=>'Cart',
            'items'=>self::GetItems()
        ]);
    }
    public function Clear(){
        session()->flush();
        // return redirect('cart');
    }
    public function GetItems(){
        $sess = session()->all();
        // dump($sess);
        $items=[];
        foreach($sess as $key=>$value){
            if(substr($key,0,6)!="|cart|") continue;
            $product_id = "";
            $selectedSize = "";
            $selectedColor = "";
            self::ParseKey($key,$product_id,$selectedSize,$selectedColor);
            if(self::KeyValid($key,$product_id,$selectedSize,$selectedColor)){
                $item = [];
                $product=Product::find($product_id);
                $items[]=[
                    'key'=>$key,
                    'product_id'=>$product_id,
                    'variant'=>$selectedSize." - ".$selectedColor,
                    'quantity'=>$value,
                    'product'=>$product
                ];
            }
        }
        return $items;
    }
    // public function TotalPrice(){
    //     $items = self::GetItems();
    //     $totalPrice=0;
    //     foreach($items as $item){
    //         $product=Product::find($item['product_id']);
    //         $totalPrice += $product->price * $item['quantity'];
    //     }
    //     return $totalPrice;
    // }
    // public function TotalItems(){
    //     $items = self::GetItems();
    //     $totalItems=0;
    //     foreach($items as $item){
    //         $product=Product::find($item['product_id']);
    //         $totalItems += $item['quantity'];
    //     }
    //     return $totalItems;
    // }
    public function KeyValid($key,$product_id,$selectedSize,$selectedColor){
        // |cart|xxxxxx|s:L|c:blue|
        if(substr($key,0,6)!="|cart|") return false;
        $product = Product::find($product_id);
        if($product==NULL) return false;
        if(!str_contains($product->sizes,$selectedSize)) return false;
        if(!str_contains($product->colors,$selectedColor)) return false;
        return true;
    }

    public function store($product_id,$selectedSize,$selectedColor){
        // $validated = $request->validate([
        //     'product_id'=>'required',
        //     'selectedSize'=>'required',
        //     'selectedColor'=>'required',
        // ]);
        // $product=Product::findOrFail($request->input('product_id'));
        // $product_id=$request->input('product_id');
        // $selectedSize=$request->input('selectedSize');
        // $selectedColor=$request->input('selectedColor');
        $product = Product::findOrFail($product_id);

        // dump($product_id);
        // dump($selectedSize);
        // dump($selectedColor);
        $key=self::CreateKey($product_id,$selectedSize,$selectedColor);
        // dump($key);
        if(self::KeyValid($key,$product_id,$selectedSize,$selectedColor)){
            self::IncrementItem($key);
        }
        return redirect('/cart');
    }
    public function IncrementItem($key){
        $value = session($key,0);
        $value++;
        if($value>10) session([$key=>10]);
        else session([$key=>$value]);
    }
    public function DecrementItem($key){
        $value = session($key,1);
        $value--;
        session([$key=>$value]);
        if($value==0){
            self::RemoveItem($key);
        }
    }
    public function RemoveItem($key){
        if (session()->has($key)) {
            session()->forget($key);
        }
    }
    public function setQuantity($key,$quantity){
        // dump(69);
        $product_id = "";
        $selectedSize = "";
        $selectedColor = "";
        self::ParseKey($key,$product_id,$selectedSize,$selectedColor);
        if(self::KeyValid($key,$product_id,$selectedSize,$selectedColor)){
            session([$key=>$quantity]);
        }
    }
    private function CreateKey($product_id, $selectedSize, $selectedColor){
        // $key = "|cart|".$product_id.'|'.$selectedColor.'|'.$selectedSize.'|';
        $key = "|cart|$product_id|s:$selectedSize|c:$selectedColor|";
        return $key;
    }

    private function ParseKey($s, &$product_id, &$selectedSize, &$selectedColor){
        // key: |cart|product_id|s:|c:|
        // value: quantity
        $splits = explode('|',$s);
        // dump($splits);
        $product_id=$splits[2];
        $selectedSize=$splits[3];
        $selectedColor=$splits[4];

        $selectedSize = substr($selectedSize,2);
        $selectedColor = substr($selectedColor,2);
        // dump($product_id);
        // dump($selectedSize);
        // dump($selectedColor);
    }
}

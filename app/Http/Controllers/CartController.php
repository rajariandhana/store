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
        return redirect('cart');
    }
    public function GetItems(){
        $sess = session()->all();
        dump($sess);
        $items=[];
        foreach($sess as $ses){
            $product_id = "";
            $selectedSize = "";
            $selectedColor = "";
            if(self::KeyValid(session($ses),$product_id,$selectedSize,$selectedColor)){
                $item = [];
                $item['product_id'] = $product_id;
                $item['selectedSize'] = $selectedSize;
                $item['selectedColor'] = $selectedColor;
                array_push($items,$item);
            }

        }

        return $items;
    }
    public function KeyValid($key,&$product_id,&$selectedSize,&$selectedColor){
        // |cart|xxxxxx|s:L|c:blue|
        if(!substr($key,0,6)=="|cart|") return false;
        self::ParseKey($key,$product_id,$selectedSize,$selectedColor);

        $product = Product::find($product_id);
        if($product==NULL) return false;
        if(!str_contains($product->sizes,$selectedSize)) return false;
        if(!str_contains($product->colors,$selectedColor)) return false;
        return true;
    }
    public function store(Request $request){
        // dont forget to validate
        // $product = Product::findOrFail($request->input('product_id'));
        // Cart::add(
        //     $product->product_id,
        //     $product->name,
        //     $request->input('quantity'),
        //     $product->price,
        //     0,
        //     [
        //         'size'=>$request->input('Size'),
        //         'color'=>$request->input('Color')
        //     ]
        // );
        $product=Product::findOrFail($request->input('product_id'));
        $product_id=$request->input('product_id');
        $selectedSize=$request->input('selectedSize');
        $selectedColor=$request->input('selectedColor');

        // dump($product_id);
        // dump($selectedSize);
        // dump($selectedColor);
        $key=self::CreateKey($product_id,$selectedSize,$selectedColor);
        // dump($key);
        self::IncrementItem($key);
        return redirect('/cart');

        // $parsed_product_id;
        // $parsed_selectedSize;
        // $parsed_selectedColor;
        // self::ParseKey($key, $parsed_product_id,$parsed_selectedSize,$parsed_selectedColor);
        // dump($parsed_product_id);
        // dump($parsed_selectedSize);
        // dump($parsed_selectedColor);

    }
    private function IncrementItem($key){
        $value = session($key,0);
        $value++;
        session([$key=>$value]);
    }
    private function DecrementItem($key){
        $value = session($key,1);
        $value--;
        session([$key=>$value]);
        if($value==0){
            // session()->forget($key);
        }
    }
    private function CreateKey($product_id, $selectedSize, $selectedColor){
        // $key = "|cart|".$product_id.'|'.$selectedColor.'|'.$selectedSize.'|';
        $key = "|cart|$product_id|s:$selectedSize|c:$selectedColor|";
        return $key;
    }

    private function ParseKey(string $s, &$product_id, &$selectedSize, &$selectedColor){
        // key: |cart|product_id|s:|c:|
        // value: quantity
        $splits = explode('|',$s);
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

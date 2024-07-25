<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\CartController;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
    public function checkout(){
        $cc = new CartController;
        return view('checkout',[
            'items'=>$cc->GetItems()
        ]);
    }
    public function provinces(){
        $datas = self::getData("city?province=5");
        dump($datas['rajaongkir']['results']);
    }
    public function getData($endpoint)
    {
        $response = Http::withHeaders([
            'key' => env('API_RAJA_ONGKIR'),
        ])->get("https://api.rajaongkir.com/starter/$endpoint");

        if ($response->successful()) {
            return $response->json();
            // return view('checkout', compact('datas'));
        } else {
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }
}

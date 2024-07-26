<?php

namespace App\Livewire;

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Rule;

class CustomerForm extends Component
{
    #[Rule('required|min:2|max:50')]
    public $customerName;
    #[Rule('required|min:5|email|max:255')]
    public $customerEmail;
    #[Rule('required|min:5|max:255')]
    public $customerAddress;

    public $provinces;
    public $selectedProvince=null;
    public $cities;
    public $selectedCity=null;
    public $selectedCourier=null;
    public $itemsWeight=null;
    public $deliveryOptions=null;
    public $selectedDelivery = null;
    public $deliveryCost=null;
    public $subTotal=null;
    public $totalCost=null;

    public function mount(){
        $this->provinces = $this->GetProvinces();
        $this->selectedProvince = null;
        $this->cities = null;
        $this->selectedCity = null;
        $this->selectedCourier = null;
        $this->itemsWeight = null;
        $this->deliveryOptions = null;
        $this->selectedDelivery = null;
        $this->deliveryCost = null;
        $this->subTotal=null;
        $this->totalCost=null;
    }
    public function render()
    {
        return view('livewire.customer-form');
    }

    // public function updatedSelectedProvince($province_id){
    //     dd("tes");
    //     $this->cities = $this->GetCities($province_id);
    //     $this->selectedCity = null;
    // }
    public function SelectProvince($province_id){
        // dd($province_id);
        $this->selectedProvince = $province_id;
        $this->cities = $this->GetCities($province_id);
        $this->selectedCity = null;
        $this->selectedCourier = null;
        $this->itemsWeight = null;
        $this->deliveryOptions = null;
        $this->selectedDelivery = null;
        $this->deliveryCost = null;
        $this->subTotal=null;
        $this->totalCost=null;
    }
    public function SelectCity($city_id){
        // dd($city_id);
        $this->selectedCity = $city_id;
        $this->selectedCourier = null;
        $this->itemsWeight = null;
        $this->deliveryOptions = null;
        $this->selectedDelivery = null;
        $this->deliveryCost = null;
        $this->subTotal=null;
        $this->totalCost=null;
    }
    public function SelectCourier($courier){
        $this->selectedCourier = $courier;
        $cc = new CartController;
        $this->itemsWeight = $cc->GetWeight();
        $this->deliveryOptions = null;
        $ops = $this->GetDeliveryOptions($this->selectedCity,$this->itemsWeight,$this->selectedCourier);
        $this->deliveryOptions = $ops['rajaongkir']['results'][0]['costs'];
        $this->selectedDelivery = null;
        $this->deliveryCost = null;
        $this->subTotal=null;
        $this->totalCost=null;
    }
    public function GetDeliveryOptions($city_id,$weight,$courier){
        $response = Http::withHeaders([
            // 'Content-Type' => 'application/x-www-form-urlencoded',
            'key' => env('API_ONGKIR_KEY'),
        ])->post(env('API_ONGKIR_BASE').'cost', [
            'origin' => 115,
            'destination' => $city_id,
            'weight' => $weight,
            'courier' => $courier
        ]);
            // jaksel 153, depok 115
        $fee = json_decode($response->getBody(),true);
        return $fee;
    }
    public function SelectDelivery($key){
        $this->selectedDelivery = $this->deliveryOptions[$key];
        // dd($this->selectedDelivery);
        $this->deliveryCost = $this->deliveryOptions[$key]['cost'][0]['value'];
        $cc = new CartController;
        $this->subTotal=$cc->TotalPrice();
        $this->totalCost = $this->deliveryCost+$this->subTotal;
    }

    public function GetProvinces(){
        $datas = $this->getData("province?");
        // dd($datas);
        return $datas['data']['rajaongkir']['results'];
    }
    public function GetCities($province_id){
        $datas = $this->getData("city?&province=$province_id");
        // dd($datas);
        return $datas['data']['rajaongkir']['results'];
    }
    public function getData($endpoint)
    {
        $response = Http::withHeaders([
            'key' => env('API_ONGKIR_KEY'),
        ])->get(env('API_ONGKIR_BASE')."$endpoint");

        if ($response->successful()) {
            $data =$response->json();
            return compact('data');
            // return view('checkout', compact('datas'));
        } else {
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }
    public function CreateOrder(){
        // dd("test");
        // dd($this->GenerateOrderData());
        $orderData = $this->GenerateOrderData();
        $productData = $this->GenerateProductData();
        // dump($orderData);
        // dump($productData);
        $oc = new OrderController;
        $res = $oc->CreateOrder($orderData,$productData);
        if($res=="SUCCESS"){
            $cc=new CartController;
            $cc->Clear();
            return redirect('orders');
        }
    }
    private function GenerateOrderData(){
        $validated = $this->validate();
        $orderData = [
            'name' => $this->customerName,
            'email' => $this->customerEmail,
            'province_id' => $this->selectedProvince,
            'city_id' => $this->selectedCity,
            'address' => $this->customerAddress,
            'courier' => $this->selectedCourier,
            'courierService' => $this->selectedDelivery['service'],
            'deliveryTime' => $this->selectedDelivery['cost'][0]['etd'],
            'weight' => $this->itemsWeight,
            'deliveryCost' => $this->deliveryCost,
            'subTotal' => $this->subTotal,
            'totalCost' => $this->totalCost,
            'status' => "waiting for payment"
        ];
        // dd($orderData);
        return $orderData;
    }
    private function GenerateProductData(){
        $cc = new CartController;
        return $cc->GenerateProductData();
    }
}

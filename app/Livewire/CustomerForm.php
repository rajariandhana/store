<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class CustomerForm extends Component
{
    public $provinces;
    public $cities;
    public $selectedProvince=null;
    public $selectedCity=null;

    public function mount(){
        $this->provinces = $this->GetProvinces();
        $this->selectedProvince = null;
        $this->cities = null;
        $this->selectedCity = null;
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
    }
    public function SelectCity($city_id){
        // dd($city_id);
        $this->selectedCity = $city_id;
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
            'key' => env('API_RAJA_ONGKIR'),
        ])->get("https://api.rajaongkir.com/starter/$endpoint");

        if ($response->successful()) {
            $data =$response->json();
            return compact('data');
            // return view('checkout', compact('datas'));
        } else {
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }
}

<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'email',
        'province_id',
        'city_id',
        'address',
        'courier',
        'courierService',
        'deliveryTime',
        'weight',
        'deliveryCost',
        'subTotal',
        'totalCost',
        'status'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'price', 'size', 'color')->withTimestamps();
    }
}

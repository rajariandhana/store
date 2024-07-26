<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $with = ['category_id'];
    protected $fillable = ['product_id','name','price','sizes','colors'];

    public function category_id(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
    public function orders():BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'price', 'size', 'color')->withTimestamps();
    }
}

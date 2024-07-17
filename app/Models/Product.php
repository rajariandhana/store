<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'productID';
    public $incrementing = false;
    protected $keyType = 'char';
    protected $with = ['category'];
    protected $fillable = ['productID','name','price','sizes','colors'];
    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}

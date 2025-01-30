<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariant extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'size', 'price'];

    // Relationship to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

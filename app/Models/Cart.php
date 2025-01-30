<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',       // The ID of the user adding the product to the cart
        'product_id',    // The ID of the product being added
        'size',          // The selected size of the product (if applicable)
        'quantity',      // The quantity of the product
        'price',         // The price of the product
    ];
}

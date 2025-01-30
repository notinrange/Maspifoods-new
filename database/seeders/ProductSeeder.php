<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductVariant;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::create([
            'name' => 'Garam Masala',
            'category' => 'Masala',
            'description' => 'Transform your dishes with the warm, citrusy flavor of Maspi Foods Garam Masala Powder...',
            'image_path' => 'images/products/garam_masala.png',
        ]);

        // Adding sizes with prices
        ProductVariant::insert([
            ['product_id' => $product->id, 'size' => '20g', 'price' => 1000],
            ['product_id' => $product->id, 'size' => '50g', 'price' => 2500],
            ['product_id' => $product->id, 'size' => '100g', 'price' => 5000],
            ['product_id' => $product->id, 'size' => '200g', 'price' => 10000],
            ['product_id' => $product->id, 'size' => '1Kg', 'price' => 38000],
        ]);
    }
}

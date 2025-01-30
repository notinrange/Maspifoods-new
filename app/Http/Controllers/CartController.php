<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $user = auth()->user();
        if(session()->has('id')){

            // Validate the request
            // $validatedData = $request->validate([
            //     'user_id' => $user->id ,
            //     'product_id' => 'required|string|max:255',
            //     'size' => 'required|string',
            //     'quantity' => 'required|integer',
            //     'price' => 'required|integer',
            // ]);

            // Save data to database (optional)
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $request['product_id'],
                'size' => $request['size'],
                'quantity' => $request['quantity'],
                'price' => $request['price']
            ]);

            return response()->json(['message' => 'Product added to cart'], 200);
        }
        else{
            return redirect('/login')->with('Please Login First!');
        }
    }
}

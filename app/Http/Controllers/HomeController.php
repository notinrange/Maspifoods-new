<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //Home
    public function home(){
        // Fetch all products
        $products = Product::with('variants')->paginate(4); // Include product variants (sizes and prices)

        return view('components/home', compact('products'));
    }


    //Single Product
    public function product($id = null){
        
            $product = Product::findOrFail($id);
            
            // Fetch user details
            $user = Auth::User();
            return view('products/show', compact('product','user'));
    }

    //All Products
    public function products(){
        
        // Fetch all products
        $products = Product::with('variants')->paginate(4); // Include product variants (sizes and prices)

        // Return a view with products data
        return view('products.index', compact('products'));
    }

    //About
    public function about(){
        return view('components/about',[
        ]);
    }

    //Contact
    public function contact(){
        return view('components/contact',[
        ]);
    }

    //Store Contact
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save data to database (optional)
        Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        // Redirect back with success message
        return redirect('/contact')->with('success', 'Your message has been submitted successfully!');
    }


    //Add to Cart
    public function addToCart(Request $data){
        if(session()->has('id')){
            $item = new Cart();
            $item->quantity = $data->input('quantity');
            $item->productId = $data->input('id');
            $item->customerId = session()->get('id');
            $item->save();
            return redirect()->back()->with('success', 'Product Added successfully!');
        }
        else{
            return redirect('/login')->with('Please Login First!');
        }
       
    }

    
}

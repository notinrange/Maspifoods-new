@extends('components/layout') <!-- Include your layout if available -->

@section('content')
{{-- @include('products.product') --}}
<!-- Product Container -->
<div class="max-w-6xl mx-auto p-6 md:flex bg-white shadow-lg rounded-lg mt-10">

    <!-- Product Image -->
    <div class="w-full md:w-1/2 flex justify-center">
        <img src="https://via.placeholder.com/300x400" alt="Chicken Kabab Powder"
            class="w-72 h-auto object-cover rounded-lg shadow-md">
    </div>

    <!-- Product Details -->
    <div class="w-full md:w-1/2 mt-6 md:mt-0 md:pl-10">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-500 mb-2">
            <a href="/" class="hover:underline">Home</a> /
            <a href="/products" class="hover:underline">Spices</a> /
            <span class="text-gray-600">Chicken Kabab</span>
        </nav>

        <!-- Product Details -->
        <h2 class="text-xl font-bold mt-2">{{ $product->name }}</h2>
        <p class="text-gray-600">{{ $product->category }}</p>

       <!-- Price Range -->
       <p class="text-green-600 font-bold">
        ₹{{ $product->variants->min('price') }} - ₹{{ $product->variants->max('price') }}
        </p>

        <!-- Description -->
        <p class="mt-4 text-gray-600 leading-relaxed">
            {{ $product->description }}        
        </p>

       <!-- Size Options -->
       <div class="mt-3">
        <h4 class="text-sm font-semibold mb-1">Select Size:</h4>
        <div class="flex space-x-2">
            @foreach($product->variants as $variant)
                <button 
                    class="px-3 py-1 bg-gray-200 rounded hover:bg-green-400 transition"
                    onclick="document.getElementById('price').innerText = '{{ $variant->price }}'"
                >
                    {{ $variant->size }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- Selected Price -->
    <p class="text-lg font-bold mt-3">Price: ₹<span id="price">{{ $product->variants->first()->price }}</span></p>

        <!-- Quantity and Add to Cart -->
        {{-- <form action="" >
            @csrf
            <div class="mt-6 flex items-center" x-data="{ quantity: 1 }">
                <!-- Quantity Selector -->
                <div class="flex items-center border rounded-md">
                    <button @click="if(quantity > 1) quantity--" class="px-4 py-2 bg-gray-100 hover:bg-gray-200">-</button>
                    <!-- Input Field Bound to Quantity -->
                    <input type="number" 
                    x-model="quantity" 
                    name="quantity" 
                    class="w-16 text-center border-l border-r outline-none"
                    min="1" >
                    <button @click="quantity++" class="px-4 py-2 bg-gray-100 hover:bg-gray-200">+</button>
                </div>
                
                <!-- Add to Cart Button -->
                <button type="submit" class="ml-4 px-6 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-300">
                    Add To Cart
                </button>
            </div>
        </form> --}}
        @if (session('success'))
                <div class="text-green-500">{{ session('success') }}</div>
        @endif
        <form action="/add-to-cart" method="POST" >
            @csrf
            <input type="hidden" id = "product_id" name="product_id" value="{{ $product->id }}">
            <input type="hidden" id ="price" name="price" value="{{ $product->variants->first()->price }}">
            <input type="hidden" id ="size" name="size" value="{{$variant->size}}" >
            <input type="number" id ="quantity" name="quantity" value="1" min="1">
            
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>

        <!-- SKU and Tags -->
        <div class="mt-4 text-gray-500 text-sm">
            <p>SKU: N/A</p>
            <p>Categories: <span class="text-gray-800 font-medium">Masala, Spices</span></p>
            <p>Tag: <span class="text-gray-800 font-medium">coriander powder</span></p>
        </div>

        <!-- Payment Options -->
        <div class="mt-6">
            <h3 class="text-gray-700 font-semibold mb-2">Guaranteed Safe Checkout</h3>
            <div class="flex space-x-4">
                <img src="https://via.placeholder.com/50x30" alt="Visa" class="h-6">
                <img src="https://via.placeholder.com/50x30" alt="MasterCard" class="h-6">
                <img src="https://via.placeholder.com/50x30" alt="American Express" class="h-6">
                <img src="https://via.placeholder.com/50x30" alt="Discover" class="h-6">
            </div>
        </div>
    </div>
</div>
@endsection
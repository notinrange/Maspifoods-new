
    <div class="max-w-sm mx-auto bg-white border rounded shadow-md p-4">
        <!-- product Image -->
        <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
    
        <!-- Product Details -->
        <h2 class="text-xl font-bold mt-2">{{ $product->name }}</h2>
        <p class="text-gray-600">{{ $product->category }}</p>
    
        <!-- Price Range -->
        <p class="text-green-600 font-bold">
            ₹{{ $product->variants->min('price') }} - ₹{{ $product->variants->max('price') }}
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
    
        <button class="mt-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
            <p>
              <a href="/products/{{$product->id}}">See Details</a>
            </p>
        </button>

    </div>
    

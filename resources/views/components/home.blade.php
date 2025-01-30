@extends('components/layout')
@section('content')
<section
class="relative bg-cover bg-center bg-no-repeat h-screen"
style="background-image: url('https://example.com/spices-bg.jpg');"
>
<div class="absolute inset-0 bg-black bg-opacity-50"></div>
<div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
  <h2 class="text-sm uppercase tracking-widest mb-4">Welcome to Maspi Foods</h2>
  <h1 class="text-4xl md:text-6xl font-bold mb-6">Premium Spices Brand In India</h1>
  <a
    href="/products"
    class="bg-green-600 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-green-700 flex items-center space-x-2"
  >
    <span>Shop Now</span>
    <i class="fas fa-shopping-cart"></i>
  </a>
</div>
</section>

<!-- Container -->
<div class="container mx-auto py-16 px-4">
    
    <div class="flex flex-col md:flex-row justify-center items-center text-center gap-8 p-6 max-w-5xl mx-auto">
            
        <!-- Feature 1 -->
        <div class="flex items-center gap-4">
            <div class="bg-green-500 rounded-full p-4 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div class="text-left">
                <h3 class="font-bold text-lg text-gray-800">PREMIUM QUALITY</h3>
                <p class="text-gray-600 text-sm">100% Natural & Premium Grade Product</p>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex items-center gap-4">
            <div class="bg-green-500 rounded-full p-4 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m9-4a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="text-left">
                <h3 class="font-bold text-lg text-gray-800">DELIVERED WITH CARE</h3>
                <p class="text-gray-600 text-sm">FREE Delivery Across Karnataka</p>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="flex items-center gap-4">
            <div class="bg-green-500 rounded-full p-4 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v4m0-12v4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="text-left">
                <h3 class="font-bold text-lg text-gray-800">SECURE PAYMENT</h3>
                <p class="text-gray-600 text-sm">Shop Online With Secure Payment</p>
            </div>
        </div>

    </div>
</div>

{{-- Products --}}
@include('products.products')

<section>
    <div class="container mx-auto py-16 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-center items-center mb-4">
                    <div class="bg-green-200 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 10l-6 6-6-6" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2">Growing trust, Our Spices Promise Nutritious Delight</h3>
                <p class="text-gray-600">From Nature’s Heart to Your Plate, Savor the Goodness with confidence</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-center items-center mb-4">
                    <div class="bg-green-200 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2">We are committed to unadulterated products</h3>
                <p class="text-gray-600">With all your requirements just in time. We consider your consignment as your mission statement.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-center items-center mb-4">
                    <div class="bg-green-200 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-lg font-semibold mb-2">Uncompromising quality</h3>
                <p class="text-gray-600">From farm to table, Our Spices Shell Exude Excellence. Nutrient-rich, safe, and delicious – A Premium Choice for Your Health.</p>
            </div>
        </div>
    </div>
</section>



<section
  class="relative bg-cover bg-center bg-no-repeat h-screen"
  style="background-image: url('https://example.com/turmeric-bg.jpg');"
>
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
    <h3 class="text-sm uppercase tracking-widest mb-4">Maspi Foods</h3>
    <h1 class="text-4xl md:text-6xl font-bold mb-6">Ready to taste premium Spices?</h1>
    <p class="text-sm md:text-base mb-8">
      Shop online with our exclusive range of premium spices with free delivery across India.
    </p>
    <a
      href="/products"
      class="bg-green-600 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-green-700 flex items-center space-x-2"
    >
      <span>Shop Online</span>
    </a>
  </div>
</section>


@endsection
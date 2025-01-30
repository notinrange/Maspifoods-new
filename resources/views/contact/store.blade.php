@extends('components/layout')
@section('content')

<div class="max-w-5xl mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-4xl font-bold text-gray-900 mb-8">Get In Touch</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Contact Information -->
        <div>
            <p class="text-lg font-semibold text-gray-900 mb-2">LIAISONEC FOODS PRIVATE LIMITED</p>
            <p class="text-sm text-gray-600 mb-4">LIC No. 21224198000061</p>
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="text-laravel text-2xl mr-3">📍</span>
                    <p class="text-gray-700">
                        #4651, Opp Water Tank, Shivaji Road, NR Mohalla, Mysore 570007
                    </p>
                </div>
                <div class="flex items-center">
                    <span class="text-laravel text-2xl mr-3">📞</span>
                    <p class="text-gray-700">+91-8214266777</p>
                </div>
                <div class="flex items-center">
                    <span class="text-laravel text-2xl mr-3">📧</span>
                    <p class="text-gray-700">maspifoods@gmail.com</p>
                </div>
            </div>
        </div>
        <!-- Contact Form -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-900 mb-6">Drop us a line or two</h2>
            @if (session('success'))
                <div class="text-green-500">{{ session('success') }}</div>
            @endif

            <form action="/contact" method="POST">
                @csrf <!-- Include CSRF token for security -->

                <label for="name">Name <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" class="border w-full p-2 mb-4" required>

                <label for="email">Email <span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" class="border w-full p-2 mb-4" required>

                <label for="message">Comment or Message <span class="text-red-500">*</span></label>
                <textarea id="message" name="message" class="border w-full p-2 mb-4" rows="4" required></textarea>

                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
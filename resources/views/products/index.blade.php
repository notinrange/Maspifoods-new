@extends('components/layout') <!-- Include your layout if available -->

@section('content')
<h1 class="text-3xl md:text-4xl font-extrabold text-center text-green-800 mb-6 tracking-wide">All Products</h1>
@include('products.products')

@endsection

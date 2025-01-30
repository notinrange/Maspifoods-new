<div class="container mx-auto px-4">
    

    <!-- Product Grid -->

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
        @include('products.product')
        @endforeach
    </div>


    <!-- Pagination Links -->
    <div class="mt-6 p-4">
        {{ $products->links() }} <!-- Renders pagination controls -->
    </div>
</div>
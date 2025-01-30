<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            // Attach the selected size dynamically
            document.querySelectorAll('.size-button').forEach(button => {
                button.addEventListener('click', function () {
                    document.getElementById('selected-size').value = this.dataset.size;
                });
            });
        
            // Submit form via AJAX
            document.getElementById('add-to-cart-form').addEventListener('submit', function (e) {
                e.preventDefault();
        
                const formData = new FormData(this);
        
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        </script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        
        <title>Maspi Foods</title>
</head>
<body class="mb-48">
      
    
    <!-- Navbar -->
    <nav x-data="{ open: false }" class="bg-green-800 text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold">
                <div class="bg-white text-green-800 px-3 py-1 rounded">Maspi</div>
            </a>

            <!-- Menu (Desktop) -->
            <ul class="hidden md:flex space-x-6 text-lg">
                <li><a href="{{ url('/') }}" class="hover:text-green-300">Home</a></li>
                <li><a href="{{ url('/products') }}" class="hover:text-green-300">Products</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-green-300">About</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:text-green-300">Contact</a></li>

                @auth
                <!-- <li>
                    <span class="font-bold uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
                </li> -->
                <li>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button class="hover:text-green-300">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-green-300">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>
                    <a href="/login" class="hover:text-green-300">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                </li>
                @endauth
            </ul>

            <!-- Hamburger Menu (Mobile) -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" class="md:hidden bg-green-700">
            <ul class="space-y-2 py-2 px-4">
                <li><a href="{{ url('/') }}" class="block text-white hover:text-green-300">Home</a></li>
                <li><a href="{{ url('/products') }}" class="block text-white hover:text-green-300">Products</a></li>
                <li><a href="{{ url('/about') }}" class="block text-white hover:text-green-300">About</a></li>
                <li><a href="{{ url('/contact') }}" class="block text-white hover:text-green-300">Contact</a></li>

                @auth
                <li>
                    <span class="block font-bold uppercase text-white">Welcome {{auth()->user()->name}}</span>
                </li>
                <!-- Add to Cart Button -->
                <li>
                    <form id="addToCartForm" method="POST" action="/">
                        @csrf
                        <button type="button" id="addToCartBtn"
                            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">
                            Add to Cart
                        </button>
                    </form>
                </li>
                <li>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button class="block text-white hover:text-green-300">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
                @else
            
                <li>
                    <a href="/register" class="block text-white hover:text-green-300">
                        <i class="fa-solid fa-user-plus"></i> Register
                    </a>
                </li>
                <li>
                    <a href="/login" class="block text-white hover:text-green-300">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
    
    <main>
        @yield('content')
    </main>


    <footer class="fixed bottom-0 left-0 w-full bg-green-900 text-gray-300 py-8">
        <div class="container mx-auto px-4">
            <!-- Navigation Links -->
            <div class="flex flex-col md:flex-row justify-center md:justify-between items-center space-y-2 md:space-y-0 md:space-x-2 mb-6">
                <a href="/" class="text-gray-300 hover:text-gray-100">Home</a>
                <a href="/products" class="text-gray-300 hover:text-gray-100">Products</a>
                <a href="/about" class="text-gray-300 hover:text-gray-100">About</a>
                <a href="/contact" class="text-gray-300 hover:text-gray-100">Contact</a>
                <a href="/refund-policy" class="text-gray-300 hover:text-gray-100">Refund and Returns Policy</a>
                <a href="/terms-and-condition" class="text-gray-300 hover:text-gray-100">Terms & Conditions</a>
                <a href="/privacy-policy" class="text-gray-300 hover:text-gray-100">Privacy Policy</a>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center space-x-4 mb-6">
                <a href="#" class="text-gray-300 hover:text-gray-100 text-xl">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-gray-100 text-xl">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="text-gray-300 hover:text-gray-100 text-xl">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>

            <!-- Footer Description -->
            <p class="text-center text-sm">
                © 2024 Maspi Foods – Premium Foods & Beverage Brand in India. A product of Liaisonec Foods Pvt Ltd. FSSAI LIC No. 21224198000061
            </p>
        </div>
    </footer>



    
</body>
</html>
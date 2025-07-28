<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Clothing Store - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Custom CSS for smoother image transitions and overlay */
        .hero-section {
            background-image: url('https://images.unsplash.com/photo-1543163521-1bf539cce7a8?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); /* Replace with your desired hero image */
            background-size: cover;
            background-position: center;
        }
        .category-card:hover .category-overlay {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

            <div class="flex items-center space-x-3">
                <img src="https://i.pinimg.com/1200x/27/10/7d/27107d83b79b594055e49591812a224a.jpg" alt="Logo" class="h-20 w-20">
                <h1 class="text-3xl font-semibold text-indigo-700 tracking-tight">My Clothing Store</h1>
            </div>

            <nav class="space-x-6 hidden md:flex">
                <a href="{{ route('home') }}" class="@if (Route::is('home')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Home</a>
                <a href="{{ route('shop') }}" class="@if (Route::is('shop')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Shop</a>
                <a href="{{ route('about') }}" class="@if (Route::is('about')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">About</a>
                <a href="{{ route('contact') }}" class="@if (Route::is('contact')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Contact</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        <section class="hero-section bg-cover bg-center h-[500px] flex items-center justify-center text-white relative">
            <div class="absolute inset-0 bg-black opacity-50"></div> <div class="text-center z-10 p-6">
                <h2 class="text-5xl font-extrabold mb-4 animate-fade-in-up">Discover Your Style</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto animate-fade-in-up delay-200">
                    Explore our latest collection of trendy and comfortable clothing for every occasion.
                </p>
                <a href="{{ route('shop') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 inline-block">
                    Shop New Arrivals
                </a>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Shop by Category</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="category-card relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group cursor-pointer">
                        <img src="https://as1.ftcdn.net/v2/jpg/07/40/66/04/1000_F_740660413_jMpbvqGDfKQfBfncRYnZRJT70rIRHIaX.jpg" alt="Men's Collection" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="category-overlay absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-2xl font-bold text-white mb-2">Men's Collection</h3>
                            <p class="text-white text-sm mb-4">Stylish attire for every gentleman.</p>
                            <a href="{{ route('shop', ['category' => 'men']) }}" class="bg-white text-indigo-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">View All</a>
                        </div>
                    </div>
                    <div class="category-card relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group cursor-pointer">
                        <img src="https://cdn.vectorstock.com/i/750p/83/25/women-icon-logo-modern-flat-design-paintbrush-vector-50108325.avif" alt="Women's Collection" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="category-overlay absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-2xl font-bold text-white mb-2">Women's Collection</h3>
                            <p class="text-white text-sm mb-4">Elegance and comfort for her.</p>
                            <a href="{{ route('shop', ['category' => 'women']) }}" class="bg-white text-indigo-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">View All</a>
                        </div>
                    </div>
                    <div class="category-card relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group cursor-pointer">
                        <img src="https://images.seeklogo.com/logo-png/37/1/kids-logo-png_seeklogo-373205.png" alt="Kids' Collection" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="category-overlay absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-2xl font-bold text-white mb-2">Kids' Collection</h3>
                            <p class="text-white text-sm mb-4">Fun and fashionable for the little ones.</p>
                            <a href="{{ route('shop', ['category' => 'kids']) }}" class="bg-white text-indigo-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">View All</a>
                        </div>
                    </div>
                    <div class="category-card relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group cursor-pointer">
                        <img src="https://logo.com/image-cdn/images/kts928pd/production/a268e55f12c046325873596aa5e90ff6ec29aa6e-731x731.png?w=512&q=72&fm=webp" alt="Accessories" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="category-overlay absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-2xl font-bold text-white mb-2">Accessories</h3>
                            <p class="text-white text-sm mb-4">Complete your look with our accessories.</p>
                            <a href="{{ route('shop', ['category' => 'accessories']) }}" class="bg-white text-indigo-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Our Latest Arrivals</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                    <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                        <div class="w-full h-72 bg-white flex items-center justify-center">
                            <img class="max-h-full max-w-full object-contain" src="https://cdn.pixabay.com/photo/2016/03/16/21/43/t-shirt-1261820_1280.png" alt="T-shirt">
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Casual Cotton T-shirt</h2>
                                <p class="text-gray-600 text-sm mt-1 mb-2">Comfortable and stylish for daily wear.</p>
                            </div>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-lg font-semibold text-green-600">$24.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                        <div class="w-full h-72 bg-white flex items-center justify-center">
                            <img class="max-h-full max-w-full object-contain" src="https://www.air-force.com/media/catalog/product/cache/cf26d88f340d099e8645dec4084bc7a6/g/e/gem0707_804_front_grijs_1_1.jpg" alt="Hoodie">
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Airforce Hoodie </h2>
                                <p class="text-gray-600 text-sm mt-1 mb-2"> The garment is made of 100% organic cotton, making it very breathable and comfortable.</p>
                            </div>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-lg font-semibold text-green-600">$115.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                        <div class="w-full h-72 bg-white flex items-center justify-center">
                            <img class="max-h-full max-w-full object-contain" src="https://static-01.daraz.com.np/p/a566a0d3883cbb01dd17c57ea185f3f4.jpg" alt="Sweater">
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">Ástmar merino mens Nordic knit sweater</h2>
                                <p class="text-gray-600 text-sm mt-1 mb-2"> The super soft and cozy Ástmar summer wool sweater is made from 100% merino wool and features a traditional Icelandic "lopapeysa"-inspired pattern.</p>
                            </div>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-lg font-semibold text-green-600">$138.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                     <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                        <div class="w-full h-72 bg-white flex items-center justify-center">
                            <img class="max-h-full max-w-full object-contain" src="https://fanaacs.com/wp-content/uploads/2025/06/Travis-Scott-Home-PV-1.jpg" alt="Barca Jersey">
                        </div>
                        <div class="p-4 flex flex-col flex-grow justify-between">
                            <div>
                                <h2 class="text-xl font-bold text-gray-800">FC Barcelona x Travis Scott Limited Edition Match Home 2024/25 Jersey</h2>
                                <p class="text-gray-600 text-sm mt-1 mb-2">Introducing the exclusive FC Barcelona x Travis Scott Limited Edition Match Home 2024/25 Jersey in Blue/Scarlet—a groundbreaking collaboration that seamlessly blends football heritage with contemporary streetwear culture. </p>
                            </div>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-lg font-semibold text-green-600">$889.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="{{ route('shop') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 inline-block">
                        View All Products
                    </a>
                </div>
            </div>
        </section>

        <section class="py-16 bg-blue-600 text-white">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">What Our Customers Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white text-gray-800 p-8 rounded-lg shadow-lg">
                        <p class="italic text-lg mb-4">"Absolutely love the quality and style of clothes from My Clothing Store! Fast shipping and excellent customer service."</p>
                        <p class="font-semibold">- Jane Doe</p>
                    </div>
                    <div class="bg-white text-gray-800 p-8 rounded-lg shadow-lg">
                        <p class="italic text-lg mb-4">"Finally found a store that perfectly blends comfort and trend. My new favorite place to shop!"</p>
                        <p class="font-semibold">- John Smith</p>
                    </div>
                </div>
                <p class="mt-12 text-lg">Ready to experience the difference?</p>
                <a href="{{ route('contact') }}" class="mt-4 bg-white text-blue-600 hover:bg-gray-200 font-bold py-3 px-8 rounded-full text-lg transition duration-300 inline-block">
                    Contact Us
                </a>
            </div>
        </section>

    </main>

    <footer class="bg-gray-800 text-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-xl font-semibold mb-4">My Clothing Store</h2>
                <p>Your go-to place for stylish and affordable fashion.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-4">Contact Us</h2>
                <p>📍 Kathmandu, Nepal</p>
                <p>📞 +977-9800000000</p>
                <p>✉️ support@myclothingstore.com</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-4">Quick Links</h2>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('shop') }}" class="hover:text-white">Shop</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-900 text-center text-sm py-4">
            © {{ date('Y') }} My Clothing Store. All rights reserved.
        </div>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Clothing Store - About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Custom CSS - specific to About Us hero */
        .about-hero-section {
            background-image: url('https://images.unsplash.com/photo-1517457375823-ce782e4b3065?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); /* A more general, aspirational image for About Us */
            background-size: cover;
            background-position: center;
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
        <section class="about-hero-section bg-cover bg-center h-[350px] flex items-center justify-center text-white relative">
            <div class="absolute inset-0 bg-black opacity-60"></div> <div class="text-center z-10 p-6">
                <h1 class="text-5xl font-extrabold mb-4 animate-fade-in-up">About My Clothing Store</h1>
                <p class="text-xl max-w-2xl mx-auto animate-fade-in-up delay-200">
                    Your destination for quality fashion and exceptional style.
                </p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Story & Mission</h2>
                    <p class="text-gray-700 text-lg leading-relaxed mb-4">
                        Founded in 2023 in the heart of Kathmandu, My Clothing Store began with a simple vision: to make fashion accessible, sustainable, and truly expressive. We believe that clothing is more than just fabric; it's a reflection of who you are and how you feel.
                    </p>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Our mission is to empower individuals to express their unique style with confidence, offering a curated selection of high-quality, ethically sourced, and trend-setting apparel. We are committed to providing an exceptional shopping experience, from Browse our collections to receiving your perfect outfit.
                    </p>
                </div>
                <div>
                    <img src="https://live.staticflickr.com/4574/38323738064_9f3da63964_b.jpg" alt="Our Story" class="rounded-lg shadow-xl w-full h-auto object-cover">
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Our Core Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-hand-holding-heart text-indigo-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">Quality & Craftsmanship</h3>
                        <p class="text-gray-600">We meticulously select materials and collaborate with skilled artisans to ensure every piece meets our high standards.</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-leaf text-indigo-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">Sustainability</h3>
                        <p class="text-gray-600">Committed to eco-friendly practices, from sourcing to packaging, minimizing our environmental footprint.</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-people-arrows text-indigo-600 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">Customer Focus</h3>
                        <p class="text-gray-600">Your satisfaction is our priority. We listen, adapt, and strive to exceed your expectations with every interaction.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Meet Our Team</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <img src="https://cdn1.intermiami.news/uploads/52/2024/12/GettyImages-1450131991-1140x760.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-semibold text-gray-800">Lionel Messi</h3>
                        <p class="text-indigo-600 text-sm mb-2">Founder & CEO</p>
                        <p class="text-gray-600 text-sm">Passionate about fashion and empowering self-expression.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <img src="https://e0.365dm.com/23/04/2048x1152/skysports-kevin-de-bruyne-man-city_6134459.jpg?20230426201810" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-semibold text-gray-800">Kevin De Bruyne</h3>
                        <p class="text-indigo-600 text-sm mb-2">Head Designer</p>
                        <p class="text-gray-600 text-sm">Bringing the latest trends and innovative designs to life.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <img src="https://www.fcbarcelona.com/photo-resources/2025/01/30/265f7945-c7b3-4420-801c-b38ae0a2431a/_MGA5907.jpg?width=1200&height=750" alt="Team Member 3" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-semibold text-gray-800">Lamine Yamal</h3>
                        <p class="text-indigo-600 text-sm mb-2">Customer Relations Manager</p>
                        <p class="text-gray-600 text-sm">Ensuring every customer has a delightful experience.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <img src="https://www.thetimes.com/imageserver/image/%2Fmethode%2Ftimes%2Fprod%2Fweb%2Fbin%2F70ef4601-d3c8-4400-8fd6-776530bbea67.jpg?crop=2295%2C2869%2C1004%2C0" alt="Team Member 4" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-xl font-semibold text-gray-800">Viktor Gyökeres</h3>
                        <p class="text-indigo-600 text-sm mb-2">Logistics Coordinator</p>
                        <p class="text-gray-600 text-sm">Making sure your orders arrive quickly and safely.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-blue-600 text-white">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Join Our Community</h2>
                <p class="text-lg mb-8 max-w-2xl mx-auto">
                    Be part of the My Clothing Store family and stay updated on new arrivals, exclusive offers, and fashion tips.
                </p>
                <a href="{{ route('shop') }}" class="mt-4 bg-white text-blue-600 hover:bg-gray-200 font-bold py-3 px-8 rounded-full text-lg transition duration-300 inline-block">
                    Shop Now
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

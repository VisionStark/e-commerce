{{--
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
                {{-- Using the new uploaded image and making it significantly larger to attempt to make the blurry text readable --}}
                {{-- <img src="https://i.pinimg.com/736x/aa/99/37/aa993772e818abf1c550cfa9d06ceeec.jpg" alt="Hiral Jewelery Logo" class="h-32 w-36">
                <h1 class="text-3xl font-semibold text-indigo-700 tracking-tight">Hiral Jewelery</h1>
            </div>

            <nav class="space-x-6 hidden md:flex">
                <a href="{{ route('home') }}" class="@if (Route::is('home')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Home</a>
                <a href="{{ route('shop') }}" class="@if (Route::is('shop')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Shop</a>
                <a href="{{ route('about') }}" class="@if (Route::is('about')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">About</a>
                <a href="{{ route('contact') }}" class="@if (Route::is('contact')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Contact</a>
            </nav>
        </div>
    </header>

@yield('content')

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
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Clothing Store - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    {{-- Google Font - Alex Brush --}}
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
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
        /* Custom font for Hiral Jewelery title */
        .alex-brush {
            font-family: 'Alex Brush', cursive;
        }
        /* Golden color for Hiral Jewelery title */
        .text-golden {
            color: #FFD700; /* Standard golden color hex code */
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    {{-- Changed header background back to white --}}

@include('frontend.partials.header')
@yield('content')
@include('frontend.partials.footer')
</body>
</html>

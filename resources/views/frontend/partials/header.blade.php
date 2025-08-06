   <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

            <div class="flex items-center space-x-3">
                {{-- Using the new uploaded image and making it significantly larger to attempt to make the blurry text readable --}}
                <img src="https://i.pinimg.com/736x/aa/99/37/aa993772e818abf1c550cfa9d06ceeec.jpg" alt="Hiral Jewelery Logo" class="h-32 w-36">
                {{-- Applied Alex Brush font and golden color --}}
                <h1 class="text-4xl font-semibold alex-brush text-golden tracking-tight">{{$ecommerce->name}}</h1>
            </div>

            <nav class="space-x-6 hidden md:flex">
                {{-- Adjusted text colors for better visibility on white background --}}
                <a href="{{ route('home') }}" class="@if (Route::is('home')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Home</a>
                <a href="{{ route('shop1') }}" class="@if (Route::is('shop')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Shop</a>
                <a href="{{ route('about') }}" class="@if (Route::is('about')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">About</a>
                <a href="{{ route('contact1') }}" class="@if (Route::is('contact')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Contact</a>
            </nav>
        </div>
    </header>

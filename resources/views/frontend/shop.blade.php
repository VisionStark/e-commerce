<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clothing Card</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
      <a href="{{ route('contact') }}" class="@if (Route::is('about')) text-blue-600 font-semibold @else text-gray-700 @endif hover:text-blue-500 transition">Contact</a>
    </nav>
  </div>
</header>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">

  <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col"> <div class="w-full h-72 bg-white flex items-center justify-center">
      <img class="max-h-full max-w-full object-contain" src="https://cdn.pixabay.com/photo/2016/03/16/21/43/t-shirt-1261820_1280.png" alt="T-shirt">
    </div>

    <div class="p-4 flex flex-col flex-grow justify-between"> <div>
        <h2 class="text-xl font-bold text-gray-800">Casual Cotton T-shirt</h2>
        <p class="text-gray-600 text-sm mt-1 mb-2">Comfortable and stylish for daily wear.</p> </div>
      <div class="mt-auto flex items-center justify-between"> <span class="text-lg font-semibold text-green-600">$24.99</span>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
          Add to Cart
        </button>
      </div>
    </div>
  </div>

  <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
    <div class="w-full h-72 bg-gray-100 flex items-center justify-center">
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
    <div class="w-full h-72 bg-gray-100 flex items-center justify-center">
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
    <div class="w-full h-72 bg-gray-100 flex items-center justify-center">
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

  <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
    <div class="w-full h-72 bg-gray-100 flex items-center justify-center">
      <img class="max-h-full max-w-full object-contain" src="https://images-cdn.ubuy.co.in/ETYGHF56-lionel-messi-10-argentina-home-soccer.jpg" alt="Argentina Jersey">
    </div>

    <div class="p-4 flex flex-col flex-grow justify-between">
      <div>
        <h2 class="text-xl font-bold text-gray-800">Argentina World Cup Winners Jersey Authentic 22/23 Messi #10</h2>
        <p class="text-gray-600 text-sm mt-1 mb-2">Get a piece of history and celebrate Messi's iconic performance in the 2022 World Cup where Argentina beat France 4-2 on penalties, in what has been described as one of the greatest World Cup finals of all time.</p>
      </div>
      <div class="mt-auto flex items-center justify-between">
        <span class="text-lg font-semibold text-green-600">$134.99</span>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
          Add to Cart
        </button>
      </div>
    </div>
  </div>

  <div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
    <div class="w-full h-72 bg-gray-100 flex items-center justify-center">
      <img class="max-h-full max-w-full object-contain" src="https://fanaacs.com/wp-content/uploads/2025/07/Away-Black-1.png" alt="Manchester City Jersey">
    </div>

    <div class="p-4 flex flex-col flex-grow justify-between">
      <div>
        <h2 class="text-xl font-bold text-gray-800">Manchester City Away Authentic Jersey 2025/26 </h2>
        <p class="text-gray-600 text-sm mt-1 mb-2">Celebrate heritage and innovation with the Manchester City Authentic Away Jersey 2025/26. Inspired by Manchester City’s origins in Gorton, the 25/26 Away Kit reimagines the club’s first-known kit from 1884 with a bold all-black design and metallic detailing that brings the past into the present. </p>
      </div>
      <div class="mt-auto flex items-center justify-between">
        <span class="text-lg font-semibold text-green-600">$150.99</span>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
          Add to Cart
        </button>
      </div>
    </div>
  </div>
</div>

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

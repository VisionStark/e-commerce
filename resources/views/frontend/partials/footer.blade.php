 <footer class="bg-gray-800 text-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-xl font-semibold mb-4">My Clothing Store</h2>
                <p>Your go-to place for stylish and affordable fashion.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="{{$ecommerce->facebook}}" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{$ecommerce->instagram}}" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="{{$ecommerce->twitter}}" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-4">Contact Us</h2>
                <p>{{$ecommerce->address}}</p>
                <p>{{$ecommerce->phone}}</p>
                <p>{{$ecommerce->email}}</p>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-4">Quick Links</h2>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('shop1') }}" class="hover:text-white">Shop</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-900 text-center text-sm py-4">
            © {{ date('Y') }} My Clothing Store. All rights reserved.
        </div>
    </footer>

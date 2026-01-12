{{-- @extends('frontend.components.app')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
@foreach ($shop as $item)
<div class="max-w-sm bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col"> <div class="w-full h-72 bg-white flex items-center justify-center">
      <img class="max-h-full max-w-full object-contain" src="{{$item->image}}" alt="T-shirt">
    </div>

    <div class="p-4 flex flex-col flex-grow justify-between"> <div>
        <h2 class="text-xl font-bold text-gray-800">{{$item->name}}</h2>
        <p class="text-gray-600 text-sm mt-1 mb-2">{{$item->description}}</p> </div>
      <div class="mt-auto flex items-center justify-between"> <span class="text-lg font-semibold text-green-600">{{$item->price}}</span>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700 transition duration-200">
          Add to Cart
        </button>
      </div>
    </div>
  </div>

@endforeach


</div>
@endsection --}}
@extends('frontend.components.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="cartSystem()" class="p-6 space-y-6">
    <!-- Product Grid -->
    {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($shop as $item)
        @php
            // Convert price to float safely
            $price = is_numeric($item->price) ? (float)$item->price : 0.00;
        @endphp
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 flex items-center justify-center p-4 bg-gray-50">
                <img src="{{ $item->image }}" class="max-h-full max-w-full object-contain" alt="{{ $item->name }}">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">{{ $item->name }}</h3>
                <p class="text-gray-600 text-sm mt-1 line-clamp-2">{{ $item->description }}</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-lg font-semibold text-green-600">
                        ${{ number_format($price, 2) }}
                    </span>
                    <button @click="addToCart({
                        id: '{{ $item->id }}',
                        name: '{{ addslashes($item->name) }}',
                        price: {{ $price }},
                        image: '{{ $item->image }}'
                    }, $event)"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded text-sm transition-colors">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($shop as $item)

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">

            <div class="h-48 flex items-center justify-center p-4 bg-gray-50">
                <img
                    src="{{ $item->image }}"
                    class="max-h-full max-w-full object-contain"
                    alt="{{ $item->name }}"
                >
            </div>

            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">
                    {{ $item->name }}
                </h3>

                <p class="text-gray-600 text-sm mt-1 line-clamp-2">
                    {{ $item->description }}
                </p>

                <div class="mt-4 flex justify-between items-center">
                    <span class="text-lg font-semibold text-green-600">
                        ${{ number_format($item->price, 2) }}
                    </span>

                    <button
                        @click="addToCart({
                            id: {{ $item->id }},
                            name: @js($item->name),
                            price: {{ $item->price }},
                            image: @js($item->image)
                        }, $event)"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded text-sm transition-colors"
                    >
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>

    @endforeach
</div>
    <!-- Shopping Cart Modal -->
    <div x-show="showCart" x-transition class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Backdrop -->
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <!-- Modal Content -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                        Your Shopping Cart (<span x-text="cart.reduce((total, item) => total + item.quantity, 0)"></span>)
                    </h3>

                    <!-- Cart Items -->
                    <div class="divide-y divide-gray-200 max-h-96 overflow-y-auto">
                        <template x-for="(item, index) in cart" :key="index">
                            <div class="py-3 flex items-center">
                                <img :src="item.image" class="w-12 h-12 object-cover rounded mr-3" :alt="item.name">
                                <div class="flex-grow">
                                    <h4 class="font-medium text-gray-800" x-text="item.name"></h4>
                                    <div class="flex items-center mt-1">
                                        <button @click="updateQuantity(index, -1)"
                                                class="w-6 h-6 flex items-center justify-center bg-gray-100 rounded hover:bg-gray-200">
                                            -
                                        </button>
                                        <span x-text="item.quantity" class="mx-2 w-6 text-center"></span>
                                        <button @click="updateQuantity(index, 1)"
                                                class="w-6 h-6 flex items-center justify-center bg-gray-100 rounded hover:bg-gray-200">
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-4 text-right">
                                    <p class="text-gray-800 font-medium" x-text="'$' + (item.price * item.quantity).toFixed(2)"></p>
                                    <button @click="removeItem(index)"
                                            class="text-red-500 hover:text-red-700 text-xs">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Order Summary -->
                    <div class="border-t border-gray-200 mt-4 pt-4">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Subtotal</span>
                            <span x-text="'$' + subtotal.toFixed(2)" class="font-medium"></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Tax (10%)</span>
                            <span x-text="'$' + tax.toFixed(2)" class="font-medium"></span>
                        </div>
                        <div class="flex justify-between font-bold text-lg pt-2 border-t border-gray-200">
                            <span>Total</span>
                            <span x-text="'$' + total.toFixed(2)"></span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button @click="checkout" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                        Checkout
                    </button>
                    <button @click="showCart = false" type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Continue Shopping
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Toggle Button -->
    <div x-show="cart.length > 0" x-transition class="fixed bottom-6 right-6 z-40">
        <button @click="showCart = true"
                class="p-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-colors flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="ml-1" x-text="cart.reduce((total, item) => total + item.quantity, 0)"></span>
        </button>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('cartSystem', () => ({
        cart: [],
        showCart: false,

        init() {
            // Load cart from localStorage
            const savedCart = localStorage.getItem('cart');
            if (savedCart) {
                try {
                    this.cart = JSON.parse(savedCart);
                    // Ensure all prices are numbers
                    this.cart = this.cart.map(item => ({
                        ...item,
                        price: Number(item.price)
                    }));
                } catch (e) {
                    console.error('Failed to load cart', e);
                    this.cart = [];
                }
            }
        },

        addToCart(product, event) {
            // Convert price to number if it isn't already
            const numericPrice = Number(product.price);

            // Find existing item
            const existing = this.cart.find(item => item.id === product.id);

            if (existing) {
                existing.quantity++;
            } else {
                this.cart.push({
                    ...product,
                    price: numericPrice,
                    quantity: 1
                });
            }

            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(this.cart));

            // Show cart and animate button
            this.showCart = true;
            if (event?.target) {
                event.target.classList.add('animate-bounce');
                setTimeout(() => event.target.classList.remove('animate-bounce'), 500);
            }
        },

        updateQuantity(index, change) {
            this.cart[index].quantity += change;

            // Remove if quantity is 0 or less
            if (this.cart[index].quantity <= 0) {
                this.cart.splice(index, 1);
            }

            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },

        removeItem(index) {
            this.cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },

        checkout() {
            if (this.cart.length === 0) return;

            alert(`Order placed! Total: $${this.total.toFixed(2)}`);
            this.cart = [];
            localStorage.removeItem('cart');
            this.showCart = false;
        },

        get subtotal() {
            return this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },

        get tax() {
            return this.subtotal * 0.1;
        },

        get total() {
            return this.subtotal + this.tax;
        }
    }));
});
</script>

<style>
.animate-bounce {
    animation: bounce 0.5s;
}
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
</style>

@endsection

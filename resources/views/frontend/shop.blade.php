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

<!-- ✅ Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div x-data="cartApp()" class="p-6 space-y-6">

    <!-- ✅ Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($shop as $item)
        <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col justify-between">
            <div class="h-60 flex items-center justify-center">
                <img src="{{ $item->image }}" class="max-h-full object-contain" alt="{{ $item->name }}">
            </div>
            <h2 class="text-xl font-bold mt-4">{{ $item->name }}</h2>
            <p class="text-gray-600 text-sm mt-1">{{ $item->description }}</p>
            <div class="mt-auto flex justify-between items-center pt-4">
                <span class="text-green-600 font-semibold">${{ number_format((float)$item->price, 2) }}</span>
                <button
                    @click="addToCart({ id: {{ $item->id }}, name: '{{ addslashes($item->name) }}', price: {{ (float)$item->price }}, image: '{{ $item->image }}' })"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Add to Cart
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <!-- ✅ Cart Display -->
    <div class="bg-gray-100 p-6 rounded-xl shadow-md" x-show="cart.length > 0">
        <h2 class="text-2xl font-bold mb-4">🛒 Your Cart</h2>
        <template x-for="(item, index) in cart" :key="item.id">
            <div class="flex justify-between items-center py-2 border-b">
                <div class="flex items-center gap-4">
                    <img :src="item.image" class="w-12 h-12 object-cover rounded" />
                    <div>
                        <h3 class="font-semibold" x-text="item.name"></h3>
                        <p class="text-sm text-gray-500">Quantity: <span x-text="item.quantity"></span></p>
                        <p class="text-sm text-gray-600">$<span x-text="(item.price * item.quantity).toFixed(2)"></span></p>
                    </div>
                </div>
                <button @click="removeFromCart(index)" class="text-red-600 hover:underline">Remove</button>
            </div>
        </template>

        <div class="mt-4 text-lg font-semibold">
            Total Items: <span x-text="totalItems"></span><br>
            Total Price: $<span x-text="totalPrice.toFixed(2)"></span>
        </div>

        <button @click="checkout" class="mt-4 bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
            Proceed / Purchase
        </button>
    </div>
</div>

<!-- ✅ Alpine Cart App -->
<script>
function cartApp() {
    return {
        cart: [],
        addToCart(product) {
            let existing = this.cart.find(i => i.id === product.id);
            if (existing) {
                existing.quantity += 1;
            } else {
                this.cart.push({ ...product, quantity: 1 });
            }
        },
        removeFromCart(index) {
            this.cart.splice(index, 1);
        },
        get totalItems() {
            return this.cart.reduce((sum, item) => sum + item.quantity, 0);
        },
        get totalPrice() {
            return this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },
        checkout() {
            alert("Thank you for your purchase! Cart will now be cleared.");
            this.cart = [];
        }
    }
}
</script>

@endsection



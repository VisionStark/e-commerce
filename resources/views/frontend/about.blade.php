@extends('frontend.components.app')
@section('content')
    <main class="flex-grow">
        <section class="about-hero-section bg-cover bg-center h-[350px] flex items-center justify-center text-white relative">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="text-center z-10 p-6">
                <h1 class="text-5xl font-extrabold mb-4 animate-fade-in-up">About My Clothing Store</h1>
                <p class="text-xl max-w-2xl mx-auto animate-fade-in-up delay-200">
                </p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Story & Mission</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                    </p>
                </div>
                <div>
                    <img src="{{$about1->image1}}" alt="Our Story" class="rounded-lg shadow-xl w-full h-auto object-cover">
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
                @foreach ($team as $member)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 text-center">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <img src="{{$member->photo}}" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                            <h3 class="text-xl font-semibold text-gray-800">{{$member->name}}</h3>
                            <p class="text-indigo-600 text-sm mb-2">{{$member->position}}</p>
                            <p class="text-gray-600 text-sm">{{$member->description}}</p>
                        </div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="py-16 bg-blue-600 text-white">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Join Our Community</h2>
                <p class="text-lg mb-8 max-w-2xl mx-auto">
                    Be part of the My Clothing Store family and stay updated on new arrivals, exclusive offers, and fashion tips.
                </p>
                <a href="{{ route('shop1') }}" class="mt-4 bg-white text-blue-600 hover:bg-gray-200 font-bold py-3 px-8 rounded-full text-lg transition duration-300 inline-block">
                    Shop Now
                </a>
            </div>
        </section>

    </main>
@endsection


@extends('frontend.components.app')

@section('content')
<style>
    /* Custom CSS for the Hero Slider */
    .slider-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 0.5rem; /* Rounded corners for the slider */
    }
    .slider-wrapper {
        display: flex;
        transition: transform 0.8s ease-in-out; /* Smooth transition for sliding */
    }
    .slider-wrapper img {
        width: 100%;
        flex-shrink: 0; /* Prevents images from shrinking */
        height: 500px; /* Fixed height for consistency, adjust as needed */
        object-fit: cover; /* Ensures images cover the area without distortion */
        border-radius: 0.5rem; /* Rounded corners for images */
    }
    .slider-dots {
        position: absolute;
        bottom: 1rem;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 0.5rem;
        z-index: 10;
    }
    .dot {
        width: 10px;
        height: 10px;
        background-color: rgba(255, 255, 255, 0.6);
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .dot.active {
        background-color: white;
    }

    /* Existing custom CSS for category cards */
    .category-card:hover .category-overlay {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<main class="flex-grow">
    <section class="hero-section bg-gray-200 py-16 text-center relative">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6">Discover Your Style</h2>
            <p class="text-lg text-gray-600 mb-10">Discover our exquisite latest collections and find the perfect piece of jewelry for every occasion.</p>

            <div class="slider-container shadow-xl">
                <div class="slider-wrapper" id="imageSlider">
                    <img src="https://shreebalajidiamond.com.np/wp-content/uploads/2020/07/NKM8151TDJ.jpg" alt="Fashion Image 1">
                    <img src="https://ganapatijewellers.com/wp-content/uploads/2022/07/ganapati-jewellers-diamond-lightweight-ring-2078.jpg" alt="Fashion Image 2">
                    <img src="https://5.imimg.com/data5/SELLER/Default/2023/2/NF/TI/CJ/7589877/gold-color-earrings-elegant-geometric-design-minimalistic-retro-simple-earrings-hypoallergenic-500x500.jpg" alt="Fashion Image 3">
                    <img src="https://meerzah.pk/cdn/shop/files/bb-80_1.jpg?v=1720519731&width=2949" alt="Fashion Image 4">
                </div>
                <div class="slider-dots" id="sliderDots">
                </div>
            </div>

            <a href="{{ route('shop1') }}" class="mt-12 inline-block bg-indigo-600 text-white text-lg font-semibold px-8 py-3 rounded-full hover:bg-indigo-700 transition-transform transform hover:scale-105">Shop Now</a>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Shop by Category</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
                <div class="category-card relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group cursor-pointer">
                    <img src="https://www.imperialjewellery.com.au/cdn/shop/articles/what-is-considered-fine-jewellery-844853_1024x1024.jpg?v=1708409924" alt="Fine Jewelry" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="category-overlay absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-2xl font-bold text-white mb-2">Fine Jewelry</h3>
                        <p class="text-white text-sm mb-4">Timeless elegance for every moment.</p>
                        <a href="{{ route('shop1', ['category' => 'fine-jewelry']) }}" class="bg-white text-indigo-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">View All</a>
                    </div>
                </div>
                <div class="category-card relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group cursor-pointer">
                    <img src="https://www.benbridge.com/dw/image/v2/ABAW_PRD/on/demandware.static/-/Library-Sites-BBJSharedLibrary/default/dw69944e84/12204343_12204418_12204327_12204392_12204368_12204434_12204319_1600x1600.jpg?sw=769&sfrm=jpg&q=80" alt="Bridge Jewelry" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="category-overlay absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-2xl font-bold text-white mb-2">Bridge Jewelry</h3>
                        <p class="text-white text-sm mb-4">Elevated designs, crafted for everyday brilliance.</p>
                        <a href="{{ route('shop1', ['category' => 'bridge-jewelry']) }}" class="bg-white text-indigo-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">View All</a>
                    </div>
                </div>
                <div class="category-card relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group cursor-pointer">
                    <img src="https://www.christies.com/-/media/images/features/articles/2018/05/16/expert-guide-to-vintage-costume/main-image-new-alt.jpg?h=1500&iar=0&w=2400&rev=ec4729553408481089cb553ca539851a&hash=94b5e8550cd98f61872bc87c8f5e4458cb10b789" alt="Costume Jewelry" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="category-overlay absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <h3 class="text-2xl font-bold text-white mb-2">Costume Jewelry</h3>
                        <p class="text-white text-sm mb-4">Affordable glamour, endless possibilities.</p>
                        <a href="{{ route('shop1', ['category' => 'costume-jewelry']) }}" class="bg-white text-indigo-700 px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">View All</a>
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
                        <img class="max-h-full max-w-full object-contain" src="https://www.kalyanjewellers.net/images/Jewellery/Necklace/images/admah-nivara-gold-necklace.jpg" alt="T-shirt">
                    </div>
                    <div class="p-4 flex flex-col flex-grow justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Collar Necklace</h2>
                            {{-- <p class="text-gray-600 text-sm mt-1 mb-2">Comfortable and stylish for daily wear.</p> --}}
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
                        <img class="max-h-full max-w-full object-contain" src="https://www.astridandmiyu.com/cdn/shop/files/AM25-Q2PA-HUG-TXR-ILL-G.jpg?v=1742830690&width=720" alt="Hoodie">
                    </div>
                    <div class="p-4 flex flex-col flex-grow justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Molten Textured Illusion Huggies in Gold</h2>
                            {{-- <p class="text-gray-600 text-sm mt-1 mb-2"> The garment is made of 100% organic cotton, making it very breathable and comfortable.</p> --}}
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
                        <img class="max-h-full max-w-full object-contain" src="https://img.piaget.com/product-light-box-1/7ddcfd24bee2f8bd622dbd3eb81b182f0207c28a.jpg" alt="Sweater">
                    </div>
                    <div class="p-4 flex flex-col flex-grow justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Piaget Sunlight ring</h2>
                            {{-- <p class="text-gray-600 text-sm mt-1 mb-2"> The super soft and cozy Ástmar summer wool sweater is made from 100% merino wool and features a traditional Icelandic "lopapeysa"-inspired pattern.</p> --}}
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
                        <img class="max-h-full max-w-full object-contain" src="https://www.tanishq.co.in/dw/image/v2/BKCK_PRD/on/demandware.static/-/Sites-Tanishq-product-catalog/default/dwe3f9a9da/images/hi-res/51D5P1BFAAA00_1.jpg?sw=640&sh=640" alt="Barca Jersey">
                    </div>
                    <div class="p-4 flex flex-col flex-grow justify-between">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Fluid Vine Gold Bracelet</h2>
                            {{-- <p class="text-gray-600 text-sm mt-1 mb-2">Introducing the exclusive FC Barcelona x Travis Scott Limited Edition Match Home 2024/25 Jersey in Blue/Scarlet—a groundbreaking collaboration that seamlessly blends football heritage with contemporary streetwear culture. </p> --}}
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
                <a href="{{ route('shop1') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105 inline-block">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('imageSlider');
        const images = slider.querySelectorAll('img');
        const dotsContainer = document.getElementById('sliderDots');
        let currentIndex = 0;
        let slideInterval;

        // Generate dots dynamically
        images.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => showSlide(index));
            dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll('.dot');

        /**
         * Displays the slide at the given index.
         * @param {number} index The index of the slide to display.
         */
        function showSlide(index) {
            // Handle wrapping around for continuous sliding
            if (index >= images.length) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = images.length - 1;
            } else {
                currentIndex = index;
            }

            // Calculate the transform offset to show the current image
            const offset = -currentIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;

            // Update active dot indicator
            dots.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        /**
         * Starts the automatic sliding interval.
         */
        function startAutoSlide() {
            // Changed interval from 5000ms to 3000ms for faster sliding
            slideInterval = setInterval(() => showSlide(currentIndex + 1), 3000);
        }

        // Pause automatic sliding on mouse enter
        slider.closest('.slider-container').addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        // Resume automatic sliding on mouse leave
        slider.closest('.slider-container').addEventListener('mouseleave', () => {
            startAutoSlide();
        });

        // Initialize the slider and start automatic sliding
        showSlide(currentIndex);
        startAutoSlide();
    });
</script>
@endsection

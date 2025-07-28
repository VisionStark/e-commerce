<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Clothing Store - Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Custom CSS - specific to Contact Us hero */
        .contact-hero-section {
            background-image: url('https://images.unsplash.com/photo-1533227409241-11b0e0147926?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); /* A relevant background image for contact page */
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
        <section class="contact-hero-section bg-cover bg-center h-[350px] flex items-center justify-center text-white relative">
            <div class="absolute inset-0 bg-black opacity-60"></div> <div class="text-center z-10 p-6">
                <h1 class="text-5xl font-extrabold mb-4 animate-fade-in-up">Get in Touch</h1>
                <p class="text-xl max-w-2xl mx-auto animate-fade-in-up delay-200">
                    We'd love to hear from you! Reach out with any questions or feedback.
                </p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
                <div class="bg-gray-50 p-8 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-map-marker-alt text-indigo-600 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Our Location</h3>
                    <p class="text-gray-700 text-lg">Kathmandu, Bagmati Province, Nepal</p>
                    <p class="text-gray-700 text-lg">Street 123, Thamel</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-phone-alt text-indigo-600 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Call Us</h3>
                    <p class="text-gray-700 text-lg">Phone: +977-9800000000</p>
                    <p class="text-gray-700 text-lg">Mon-Fri: 9:00 AM - 6:00 PM</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-envelope text-indigo-600 text-4xl mb-4"></i>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Email Us</h3>
                    <p class="text-gray-700 text-lg">support@myclothingstore.com</p>
                    <p class="text-gray-700 text-lg">We aim to respond within 24 hours.</p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Send Us a Message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-indigo-500" placeholder="Your Name" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-indigo-500" placeholder="your@example.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-indigo-500" placeholder="Subject of your message" required>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-indigo-500 resize-y" placeholder="Your message..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-md overflow-hidden">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Find Us on the Map</h2>
                    <div class="aspect-w-16 aspect-h-9 h-full">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.013583270425!2d85.30906845!3d27.70016925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb194edc0b115b%3A0x77d120a1f9435b6c!2sThamel%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1717395020141!5m2!1sen!2snp"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg shadow-md"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-blue-600 text-white">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-6">Explore Our Collections</h2>
                <p class="text-lg mb-8 max-w-2xl mx-auto">
                    Browse our latest trends and find your perfect style today.
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
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-tiktok"></i></a>
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



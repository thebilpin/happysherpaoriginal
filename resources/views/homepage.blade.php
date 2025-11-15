<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Sherpa - Fast & Reliable Delivery Service in Australia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-purple-600 via-purple-700 to-indigo-800 text-white">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">Happy Sherpa</h1>
                <div class="space-x-4">
                    <a href="{{ route('get.login') }}" class="bg-white text-purple-600 px-6 py-2 rounded-full font-semibold hover:bg-gray-100 transition">Login</a>
                    <a href="{{ route('restaurant.register') }}" class="border-2 border-white px-6 py-2 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">Partner With Us</a>
                </div>
            </div>
        </nav>

        <div class="container mx-auto px-6 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-5xl font-bold mb-6">Your Favorite Food, Delivered Fast</h2>
                    <p class="text-xl mb-8 text-purple-100">Get delicious meals from top restaurants delivered to your door in minutes. Download the Happy Sherpa app now!</p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-black text-white px-8 py-3 rounded-lg flex items-center gap-3 hover:bg-gray-800 transition">
                            <i class="fab fa-apple text-2xl"></i>
                            <div class="text-left">
                                <div class="text-xs">Download on the</div>
                                <div class="text-lg font-semibold">App Store</div>
                            </div>
                        </a>
                        <a href="#" class="bg-black text-white px-8 py-3 rounded-lg flex items-center gap-3 hover:bg-gray-800 transition">
                            <i class="fab fa-google-play text-2xl"></i>
                            <div class="text-left">
                                <div class="text-xs">GET IT ON</div>
                                <div class="text-lg font-semibold">Google Play</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="/assets/img/phone-mockup.png" alt="Happy Sherpa App" class="relative z-10 mx-auto" style="max-height: 500px;">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-400 blur-3xl opacity-30"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">How It Works</h2>
            <p class="text-center text-gray-600 mb-16 text-lg">Fresh groceries in 4 simple steps</p>
            
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-[#F8FFF9] p-8 rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-2 hover:border-green-400 transition-all">
                    <div class="w-16 h-16 mb-6 mx-auto">
                        <svg class="w-full h-full text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Choose Your Location</h3>
                    <p class="text-gray-600 text-center">Select your delivery area and browse available products</p>
                </div>

                <div class="bg-[#F8FFF9] p-8 rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-2 hover:border-green-400 transition-all">
                    <div class="w-16 h-16 mb-6 mx-auto">
                        <svg class="w-full h-full text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Pre-Order (Mon–Thu)</h3>
                    <p class="text-gray-600 text-center">Place your order during the week for weekend delivery</p>
                </div>

                <div class="bg-[#F8FFF9] p-8 rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-2 hover:border-green-400 transition-all">
                    <div class="w-16 h-16 mb-6 mx-auto">
                        <svg class="w-full h-full text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">We Buy from Sydney Markets</h3>
                    <p class="text-gray-600 text-center">Fresh produce sourced directly from the markets</p>
                </div>

                <div class="bg-[#F8FFF9] p-8 rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-2 hover:border-green-400 transition-all">
                    <div class="w-16 h-16 mb-6 mx-auto">
                        <svg class="w-full h-full text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-center">Delivered on the Weekend</h3>
                    <p class="text-gray-600 text-center">Fresh groceries delivered to your doorstep</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Happy Sherpa Section -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">Why Choose Happy Sherpa?</h2>
            <p class="text-center text-gray-600 mb-16 text-lg">Experience the best food delivery service in Australia</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bolt text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Lightning Fast</h3>
                    <p class="text-gray-600">Get your food delivered in 30 minutes or less. Our Sherpas are always ready to bring you hot, fresh meals.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-utensils text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Wide Selection</h3>
                    <p class="text-gray-600">Choose from hundreds of restaurants and thousands of dishes. From local favorites to international cuisine.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-map-marked-alt text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Live Tracking</h3>
                    <p class="text-gray-600">Track your order in real-time from the restaurant to your doorstep. Know exactly when your food will arrive.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">How It Works</h2>
            
            <div class="grid md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white w-20 h-20 rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">1</div>
                    <h3 class="text-2xl font-bold mb-4">Choose Your Food</h3>
                    <p class="text-gray-600">Browse restaurants and menus. Select your favorite dishes and add them to your cart.</p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white w-20 h-20 rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">2</div>
                    <h3 class="text-2xl font-bold mb-4">Place Your Order</h3>
                    <p class="text-gray-600">Checkout securely and choose your delivery time. Pay with card or cash on delivery.</p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white w-20 h-20 rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">3</div>
                    <h3 class="text-2xl font-bold mb-4">Enjoy Your Meal</h3>
                    <p class="text-gray-600">Sit back and relax. Your Sherpa will deliver hot, delicious food right to your door.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">What Our Customers Say</h2>
            <p class="text-center text-gray-600 mb-16 text-lg">Trusted by families across Hunter & Canberra</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl">
                            <svg class="w-24 h-5 inline-block" fill="currentColor" viewBox="0 0 120 20">
                                <path d="M10 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M34 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M58 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M82 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M106 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Amazing quality and freshness! The produce from Happy Sherpa is always top-notch. Delivery is reliable every weekend."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center text-green-700 font-bold text-lg mr-3">SM</div>
                        <div>
                            <div class="font-semibold">Sarah Mitchell</div>
                            <div class="text-sm text-gray-500">Newcastle</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl">
                            <svg class="w-24 h-5 inline-block" fill="currentColor" viewBox="0 0 120 20">
                                <path d="M10 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M34 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M58 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M82 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M106 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Love the pre-order system! I order Monday, get fresh veggies Saturday. So convenient for our family grocery shop."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center text-green-700 font-bold text-lg mr-3">JC</div>
                        <div>
                            <div class="font-semibold">James Chen</div>
                            <div class="text-sm text-gray-500">Canberra</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl">
                            <svg class="w-24 h-5 inline-block" fill="currentColor" viewBox="0 0 120 20">
                                <path d="M10 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M34 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M58 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M82 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z M106 0l2.5 7.5h7.5l-6 4.5 2.5 7.5-6-4.5-6 4.5 2.5-7.5-6-4.5h7.5z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The Sherpas are so friendly and professional. Fresh fruits straight from Sydney Markets. Can't beat the quality!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center text-green-700 font-bold text-lg mr-3">EP</div>
                        <div>
                            <div class="font-semibold">Emma Peterson</div>
                            <div class="text-sm text-gray-500">Lake Macquarie</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-gradient-to-br from-green-50 to-blue-50 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Our Impact</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group cursor-pointer">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition backdrop-blur-sm">
                        <div class="text-5xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2">23+</div>
                        <div class="text-gray-700 text-lg font-medium">Happy Sherpas</div>
                    </div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition backdrop-blur-sm">
                        <div class="text-5xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2">65+</div>
                        <div class="text-gray-700 text-lg font-medium">Fresh Items</div>
                    </div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition backdrop-blur-sm">
                        <div class="text-5xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2">100+</div>
                        <div class="text-gray-700 text-lg font-medium">Regular Customers</div>
                    </div>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition backdrop-blur-sm">
                        <div class="text-5xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2">5k+</div>
                        <div class="text-gray-700 text-lg font-medium">Deliveries Made</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  FAQ Section (keeping existing) -->

    <!-- FAQ Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-4xl font-bold text-center mb-16">Frequently Asked Questions</h2>
            
            <div class="space-y-6">
                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                    <summary class="font-semibold text-lg">How long does delivery take?</summary>
                    <p class="mt-4 text-gray-600">Most deliveries arrive within 30-45 minutes. You can track your order in real-time through the app.</p>
                </details>

                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                    <summary class="font-semibold text-lg">What payment methods do you accept?</summary>
                    <p class="mt-4 text-gray-600">We accept all major credit cards, debit cards, and cash on delivery for your convenience.</p>
                </details>

                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                    <summary class="font-semibold text-lg">Is there a minimum order amount?</summary>
                    <p class="mt-4 text-gray-600">Minimum order amounts vary by restaurant. You can see the minimum when browsing each restaurant's menu.</p>
                </details>

                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                    <summary class="font-semibold text-lg">Can I schedule orders in advance?</summary>
                    <p class="mt-4 text-gray-600">Yes! You can schedule your order up to 7 days in advance. Perfect for planning ahead.</p>
                </details>

                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                    <summary class="font-semibold text-lg">What if there's an issue with my order?</summary>
                    <p class="mt-4 text-gray-600">Contact our 24/7 customer support through the app. We'll resolve any issues quickly and ensure you're satisfied.</p>
                </details>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative overflow-hidden py-20">
        <!-- Animated Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-400 via-pink-500 to-purple-600"></div>
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-6">Ready to Order Fresh Groceries?</h2>
                <p class="text-2xl mb-10 text-white opacity-90">Download the Happy Sherpa app and get fresh produce delivered this weekend!</p>
                <a href="#" class="inline-block bg-white text-purple-600 px-12 py-4 rounded-full text-xl font-bold hover:bg-gray-100 transition shadow-2xl hover:scale-105 transform">
                    Use App Now
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-purple-900 to-indigo-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Happy Sherpa</h3>
                    <p class="text-purple-200">Fast, reliable food delivery across Australia. Your favorite meals, delivered with a smile.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4 text-lg">Company</h4>
                    <ul class="space-y-2 text-purple-200">
                        <li><a href="#" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition">Press</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4 text-lg">Partner With Us</h4>
                    <ul class="space-y-2 text-purple-200">
                        <li><a href="{{ route('restaurant.register') }}" class="hover:text-white transition">Restaurant Partners</a></li>
                        <li><a href="{{ route('delivery.register') }}" class="hover:text-white transition">Become a Sherpa</a></li>
                        <li><a href="#" class="hover:text-white transition">Corporate Orders</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4 text-lg">Support</h4>
                    <ul class="space-y-2 text-purple-200">
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-purple-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-purple-200 mb-4 md:mb-0">© 2024 Happy Sherpa. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-2xl hover:text-purple-300 transition"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-2xl hover:text-purple-300 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-2xl hover:text-purple-300 transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-2xl hover:text-purple-300 transition"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

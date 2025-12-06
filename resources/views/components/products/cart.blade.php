<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Heading -->
        <h2 class="text-2xl text-secondary/80 mb-10">Your Shopping Cart</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Cart Items -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Cart Item -->
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 border px-4 py-3 pb-6">
                    <img src="https://www.bosch-pt.co.in/in/en/ocsmedia/260214-54/application-image/full/drill-gbm-13-re-06014775f0.png"
                        class="w-28 h-28 object-contain mx-auto sm:mx-0" />

                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-lg font-medium text-gray-800">Bosch Heavy Duty Drill Machine</h3>
                        <p class="text-sm text-gray-500 mt-1">500W Motor | 6 Months Warranty</p>
                        <p class="mt-2 text-primary font-semibold">₹3400</p>

                        <!-- Quantity -->
                        <div x-data="{ qty: 1 }"
                            class="mt-3 flex justify-center sm:justify-start items-center gap-3">
                            <span class="text-sm text-gray-700">Qty:</span>
                            <div class="flex items-center border rounded">
                                <button @click="qty = Math.max(1, qty - 1)"
                                    class="px-3 py-1 text-gray-600 hover:bg-primary/90 hover:text-white">-</button>
                                <input type="text" x-model="qty" readonly
                                    class="w-10 text-center border-x text-gray-800" />
                                <button @click="qty++"
                                    class="px-3 py-1 text-gray-600 hover:bg-primary/90 hover:text-white">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex sm:flex-col items-center sm:items-end justify-center gap-3 mt-4 sm:mt-0">
                        <button class="text-gray-500 hover:text-primary text-sm flex items-center gap-1">
                            <i class="fa-regular fa-heart"></i> Wishlist
                        </button>
                        <button class="text-primary hover:underline text-sm flex items-center gap-1">
                            <i class="fa-solid fa-trash"></i> Remove
                        </button>
                    </div>
                </div>

                <!-- Repeat Item -->
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 border px-4 py-3 pb-6">
                    <img src="https://content.misumi-ec.com/image/upload/t_product_main/v1/p/jp/product/series/223005121927/223005121927_001.jpg"
                        class="w-28 h-28 object-contain mx-auto sm:mx-0" />

                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-lg font-medium text-gray-800">Industrial Impact Wrench</h3>
                        <p class="text-sm text-gray-500 mt-1">Heavy Duty | Stainless Steel</p>
                        <p class="mt-2 text-primary font-semibold">₹7999</p>

                        <!-- Quantity -->
                        <div x-data="{ qty: 1 }"
                            class="mt-3 flex justify-center sm:justify-start items-center gap-3">
                            <span class="text-sm text-gray-700">Qty:</span>
                            <div class="flex items-center border rounded">
                                <button @click="qty = Math.max(1, qty - 1)"
                                    class="px-3 py-1 text-gray-600 hover:bg-primary/90 hover:text-white">-</button>
                                <input type="text" x-model="qty" readonly
                                    class="w-10 text-center border-x text-gray-800" />
                                <button @click="qty++"
                                    class="px-3 py-1 text-gray-600 hover:bg-primary/90 hover:text-white">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex sm:flex-col items-center sm:items-end justify-center gap-3 mt-4 sm:mt-0">
                        <button class="text-gray-500 hover:text-primary text-sm flex items-center gap-1">
                            <i class="fa-regular fa-heart"></i> Wishlist
                        </button>
                        <button class="text-primary hover:underline text-sm flex items-center gap-1">
                            <i class="fa-solid fa-trash"></i> Remove
                        </button>
                    </div>
                </div>

                <!-- Clear Cart -->
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <button class="text-primary hover:text-primary/90 transition-colors font-medium">
                            <i class="fas fa-trash mr-2"></i>Clear Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div
                class="bg-gray-50 border border-primary rounded p-6 shadow-sm 
            lg:sticky lg:top-6 self-start">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Order Summary</h3>
                <dl class="space-y-3 text-gray-700">
                    <div class="flex justify-between">
                        <dt>Subtotal</dt>
                        <dd>₹1,85,000</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt>Shipping</dt>
                        <dd>₹500</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt>Tax</dt>
                        <dd>₹2,000</dd>
                    </div>
                    <div class="flex justify-between font-semibold border-t pt-3 text-gray-900">
                        <dt>Total</dt>
                        <dd>₹1,87,500</dd>
                    </div>
                </dl>

                <a href="{{ route('checkout') }}"
                    class="block w-full mt-6 bg-primary text-white py-3 rounded shadow-md hover:bg-primary/90 transition font-medium text-center">
                    Proceed to Checkout <i class="fa-solid fa-lock ml-2"></i>
                </a>


                <a href="/" class="block mt-4 text-center text-sm text-primary hover:underline">
                    <i class="fa-solid fa-arrow-left"></i> Continue Shopping
                </a>

                <div class="mt-4">
                    <p class="text-xs text-secondary/90 text-center mb-2">We accept</p>
                    <div class="flex justify-center space-x-2">
                        <i class="fab fa-cc-visa text-blue-600 text-2xl"></i>
                        <i class="fab fa-cc-mastercard text-red-600 text-2xl"></i>
                        <i class="fab fa-cc-amex text-blue-500 text-2xl"></i>
                        <i class="fab fa-cc-paypal text-blue-700 text-2xl"></i>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <p class="text-xs text-secondary/90">
                        <i class="fas fa-shield-alt mr-1"></i>
                        Secure checkout with SSL encryption
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

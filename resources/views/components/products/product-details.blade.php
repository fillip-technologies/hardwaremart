<section class="bg-gray-50 py-10">
    <div class="w-full mx-auto px-6">

        <!-- GRID: 3 COLUMNS -->
        <div class="grid grid-cols-1 lg:grid-cols-[30rem_1fr_20rem] gap-8">


            <!-- LEFT COLUMN — IMAGE GALLERY -->
            <div class="lg:sticky lg:top-28 self-start h-fit">
                <div class="flex items-center justify-start gap-6 md:px-4">
                    <a href="{{ route('wishlist') }}" class="flex items-center gap-2 text-gray-600 hover:text-primary">
                        <i class="fa-regular fa-heart"></i> Add to Wishlist
                    </a>
                    <button class="flex items-center gap-2 text-gray-600 hover:text-primary">
                        <i class="fa-solid fa-share-nodes"></i> Share
                    </button>
                </div>

                <x-layout.product-gallery :images="[
                    'https://5.imimg.com/data5/SELLER/Default/2025/7/525312133/PV/PA/UU/190106769/glass-line-water-gyser-500x500.jpg',
                    'https://rukminim2.flixcart.com/image/480/640/xif0q/water-geyser/5/x/6/-original-imagzm7w5mhcnbqh.jpeg?q=90',
                    'https://m.media-amazon.com/images/I/61WRLYUEurL.jpg',
                    'https://4.imimg.com/data4/LS/LM/MY-2570739/water-geyser-500x500.jpg',
                ]" />


            </div>


            <!-- MIDDLE COLUMN — PRODUCT DETAILS -->
            <div class="space-y-6">

                <!-- TITLE -->
                <h1 class="text-2xl font-semibold text-slate-900 leading-tight">
                    ProTorque 10L 2000W 5-Star Instant Water Heater – Heavy Duty,
                    Fast Heating, Anti-Rust Coating (Grey, 10 L)
                </h1>

                <!-- RATING -->
                <div class="flex items-center gap-3">
                    <span class="bg-green-600 text-white text-xs px-2 py-1 rounded">
                        4.7 ★
                    </span>
                    <span class="text-slate-600 text-sm">(30 Reviews)</span>
                </div>

                <!-- PRICE SECTION -->
                <div class="space-y-1">
                    <p class="text-slate-500 text-sm">₹2,799 (Incl. of all taxes)</p>
                    <p class="text-3xl font-bold text-slate-900">₹2,372
                        <span class="text-sm font-medium text-slate-500">+ ₹427 GST</span>
                    </p>

                    <p class="text-sm text-emerald-600 font-medium">
                        MRP ₹6,659 — 57% OFF
                    </p>

                    <button
                        class="px-3 py-1 mt-2 bg-emerald-100 text-emerald-700 text-xs rounded border border-emerald-300">
                        7260 people bought this recently
                    </button>
                </div>

                <!-- OPTIONS (Capacity + Color) -->
                <div>
                    <h3 class="font-medium text-slate-800 mb-2">Tank Capacity</h3>
                    <div class="flex gap-3">
                        <button class="px-4 py-2 rounded-lg border border-sky-600 text-sky-700 font-medium">
                            10 L
                        </button>
                        <button class="px-4 py-2 rounded-lg border border-slate-300 text-slate-600">
                            6 L
                        </button>
                    </div>
                </div>

                <div>
                    <h3 class="font-medium text-slate-800 mb-2">Colour</h3>
                    <div class="flex gap-3">
                        <button class="px-4 py-2 rounded-lg border border-sky-600 text-sky-700 font-medium">
                            Grey
                        </button>
                        <button class="px-4 py-2 rounded-lg border border-slate-300 text-slate-600">
                            Ivory
                        </button>
                    </div>
                </div>

                <!-- Description -->
                <div class="bg-white p-4 border rounded">
                    <h3 class="font-medium text-slate-800 mb-2">Description</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        High-performance geyser with 2000W copper heating element,
                        5-star energy rating, advanced multi-safety system, and superior
                        anti-rust coating for long-term durability.
                    </p>
                </div>

                <!-- ABOUT THIS PRODUCT SECTION -->
                <div class="mt-10 bg-white border rounded p-6 space-y-8">

                    <!-- About Header -->
                    <h2 class="text-xl font-semibold text-slate-900 border-b pb-2">
                        About This Product
                    </h2>

                    <!-- Key Features -->
                    <div>
                        <h3 class="text-lg font-medium text-slate-800 mb-3">Key Features</h3>

                        <ul class="space-y-2 text-slate-700 text-sm">
                            <li class="flex items-center gap-2">
                                <span class="text-slate-900 text-lg">•</span>
                                <span>Safe & Durable Construction.</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-slate-900 text-lg">•</span>
                                <span>Instant Hot Water in Seconds.</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-slate-900 text-lg">•</span>
                                <span>100% ISI Marked & BIS Approved.</span>
                            </li>
                        </ul>


                    </div>

                    <!-- Product Specifications -->
                    <div x-data="{ showAll: false }">
                        <h3 class="text-lg font-medium text-slate-800 mb-3">Product Specifications</h3>

                        <div class="border rounded-lg overflow-hidden">

                            <!-- 1 -->
                            <div class="grid grid-cols-2 border-b">
                                <div class="px-4 py-3 bg-slate-50 text-slate-700 font-medium">Brand</div>
                                <div class="px-4 py-3 text-sky-600 font-medium cursor-pointer hover:underline">
                                    Longway
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="grid grid-cols-2 border-b">
                                <div class="px-4 py-3 bg-slate-50 text-slate-700 font-medium">Power Consumption</div>
                                <div class="px-4 py-3 text-slate-800">2000 W</div>
                            </div>

                            <!-- 3 -->
                            <div class="grid grid-cols-2 border-b">
                                <div class="px-4 py-3 bg-slate-50 text-slate-700 font-medium">Tank Capacity</div>
                                <div class="px-4 py-3 text-slate-800">10 L</div>
                            </div>

                            <!-- Hidden items -->
                            <div x-show="showAll" x-collapse>
                                <div class="grid grid-cols-2 border-b">
                                    <div class="px-4 py-3 bg-slate-50 text-slate-700 font-medium">Colour</div>
                                    <div class="px-4 py-3 text-slate-800">Grey</div>
                                </div>

                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-3 bg-slate-50 text-slate-700 font-medium">Extra Features</div>
                                    <div class="px-4 py-3 text-slate-800">No</div>
                                </div>
                            </div>

                        </div>

                        <!-- Button -->
                        <button @click="showAll = !showAll"
                            class="text-sky-600 text-sm mt-3 font-medium hover:underline">
                            <span x-show="!showAll">SHOW ALL SPECIFICATIONS</span>
                            <span x-show="showAll">SHOW LESS</span>
                        </button>
                    </div>


                    <!-- Product Details -->
                    <div>
                        <h3 class="text-lg font-medium text-slate-800 mb-3">Product Details</h3>

                        <p class="text-slate-700 text-sm leading-relaxed">
                            Introducing the Longway 10L Grey Instant Water Geyser, the perfect addition to your home's
                            heating system. Designed with efficiency in mind, this geyser boasts a power consumption of
                            2000W, ensuring quick and effective heating whenever you need it. With its vertical mounting
                            type, installation is a breeze. Weighing just 7.1 kg, this geyser is lightweight yet sturdy,
                            providing long-lasting performance. The generous tank capacity of 10L ensures you'll have
                            hot water ready whenever required…
                        </p>
                    </div>

                </div>


            </div>

            <!-- RIGHT COLUMN — BUY BOX -->
            <div class="lg:sticky lg:top-28 self-start h-fit">
                <div class="bg-white rounded border shadow-sm p-6 space-y-6">

                    <!-- PRICE SECTION -->
                    <div>
                        <p class="text-sm text-slate-500">₹2,799 (Incl. all taxes)</p>
                        <p class="text-3xl font-bold text-slate-900">
                            ₹2,372
                            <span class="text-sm text-slate-500">+ ₹427 GST</span>
                        </p>
                        <p class="text-sm text-emerald-600">57% OFF</p>
                    </div>

                    <!-- QTY -->
                    <div x-data="{ qty: 1 }" class="space-y-1">
                        <h3 class="font-medium text-slate-800">Update Qty</h3>

                        <div class="flex items-center gap-3">
                            <button @click="qty = Math.max(1, qty - 1)"
                                class="px-3 py-1 border rounded bg-slate-100">-</button>

                            <span x-text="qty" class="text-slate-700 font-medium"></span>

                            <button @click="qty++" class="px-3 py-1 border rounded bg-slate-100">+</button>
                        </div>
                    </div>

                    <!-- ACTION BUTTONS -->
                    <button
                        class="w-full py-3 bg-blue-600 text-white rounded-lg font-medium shadow hover:bg-blue-700 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-cart-shopping text-lg"></i>
                        ADD TO CART
                    </button>

                    <button
                        class="w-full py-3 bg-red-600 text-white rounded-lg font-medium shadow hover:bg-red-700 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-bolt text-lg"></i>
                        BUY NOW
                    </button>


                    <!-- RECENT VISITED PRODUCTS -->
                    <div class="pt-6 border-t border-slate-200">
                        <h3 class="text-sm font-semibold text-slate-800 mb-4">Recently Visited</h3>

                        <div class="space-y-4">

                            <!-- ITEM 1 -->
                            <div
                                class="flex items-center gap-3 bg-slate-50 border border-slate-200 rounded-lg p-3 hover:shadow">
                                <img src="https://content.misumi-ec.com/image/upload/t_product_main/v1/p/jp/product/series/223005121927/223005121927_001.jpg"
                                    class="w-16 h-16 object-contain bg-white rounded border" />

                                <div class="flex-1">
                                    <p class="text-sm text-slate-800 font-medium leading-tight">
                                        Industrial Impact Wrench
                                    </p>
                                    <p class="text-xs text-slate-500 mt-1">₹1,899</p>
                                </div>

                                <button class="text-blue-600 text-xs font-medium hover:underline">View</button>
                            </div>

                            <!-- ITEM 2 -->
                            <div
                                class="flex items-center gap-3 bg-slate-50 border border-slate-200 rounded-lg p-3 hover:shadow">
                                <img src="https://cdn.moglix.com/p/F8nLWN92udBMS-xxlarge.jpg"
                                    class="w-16 h-16 object-contain bg-white rounded border" />

                                <div class="flex-1">
                                    <p class="text-sm text-slate-800 font-medium leading-tight">
                                        A4 Paper 75 GSM (500 Sheets)
                                    </p>
                                    <p class="text-xs text-slate-500 mt-1">₹2,499</p>
                                </div>

                                <button class="text-blue-600 text-xs font-medium hover:underline">View</button>
                            </div>

                            <!-- ITEM 3 -->
                            <div
                                class="flex items-center gap-3 bg-slate-50 border border-slate-200 rounded-lg p-3 hover:shadow">
                                <img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/d/b/dbe8bc3NYKAD00000003_6.jpg?rnd=20200526195200&tr=w-512"
                                    class="w-16 h-16 object-contain bg-white rounded border" />

                                <div class="flex-1">
                                    <p class="text-sm text-slate-800 font-medium leading-tight">
                                        N95 Protective Face Mask (Pack of 5)
                                    </p>
                                    <p class="text-xs text-slate-500 mt-1">₹1,299</p>
                                </div>

                                <button class="text-blue-600 text-xs font-medium hover:underline">View</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

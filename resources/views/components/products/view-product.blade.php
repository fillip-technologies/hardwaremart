<section class="bg-gray-50 py-12" id="shop">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-6 lg:hidden">
            <p class="text-sm text-gray-600">Showing 1–12 of 128 products</p>
            <button id="openFilters" class="px-4 py-2 border rounded text-sm text-primary">
                <i class="fa-solid fa-sliders"></i> Filters
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <aside id="sidebarFilters"
                class="hidden lg:block lg:col-span-1 bg-white rounded shadow p-6 space-y-6 border border-rose-100 self-start fixed lg:static top-0 left-0 h-full w-80 overflow-y-auto lg:w-auto lg:h-auto">
                <div class="flex items-center justify-end lg:hidden mb-4">
                    <button id="closeFilters" class="text-gray-500 hover:text-gray-800">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>

                <h3 class="text-lg text-gray-800 font-semibold">Filter Products</h3>

                <div>
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Categories</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Electrical & Appliances
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Industrial Tools
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Office Supplies
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Medical & Lab Supplies
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Agri & Gardening
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Safety & Supplies
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Construction Materials
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="accent-primary" /> Automotive
                            </label>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Price</h4>
                    <input type="range" min="5000" max="200000" step="5000" class="w-full accent-primary" />
                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                        <span>₹5,000</span>
                        <span>₹2,00,000</span>
                    </div>
                </div>

                {{-- <div>
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Rating</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>
                            <label class="flex items-center gap-2"><input type="checkbox" class="accent-primary" />
                                5 </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2"><input type="checkbox" class="accent-primary" />
                                Silver</label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2"><input type="checkbox" class="accent-primary" />
                                Platinum</label>
                        </li>
                    </ul>
                </div> --}}

                <div>
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Brand</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>
                            <label class="flex items-center gap-2"><input type="checkbox" class="accent-primary" />
                                Bajaj</label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2"><input type="checkbox" class="accent-primary" />
                                CP Plus</label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2"><input type="checkbox" class="accent-primary" />
                                Ultraweb</label>
                        </li>
                        <li>
                            <label class="flex items-center gap-2"><input type="checkbox" class="accent-primary" />
                                Aquaguard</label>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Products Grid -->
            <div class="lg:col-span-3">
                <div class="hidden lg:flex items-center justify-between mb-8">
                    <p class="text-sm text-gray-600">Showing 1–12 of 128 products</p>
                    <select
                        class="border rounded px-3 py-2 text-sm text-primary focus:ring-2 focus:ring-primary focus:border-primary focus:outline-none">
                        <option>Sort by: Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>

                <!-- Product Cards -->
                <!-- Product Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    @php
                        // remove when passing from controller
                        $products = $products ?? [
                            [
                                'title' => 'Industrial Impact Wrench',
                                'image' =>
                                    'https://content.misumi-ec.com/image/upload/t_product_main/v1/p/jp/product/series/223005121927/223005121927_001.jpg',
                                'price' => 7999,
                                'oldPrice' => 8999,
                                'discount' => 11,
                                'description' => 'Heavy Duty | Stainless Steel',
                            ],
                            [
                                'title' => 'Angle Grinder Machine',
                                'image' => 'https://images.toolworld.in/product/GWS600-1.jpg',
                                'price' => 3499,
                                'oldPrice' => 3999,
                                'discount' => 12,
                                'description' => 'High Speed Cutting & Grinding',
                            ],
                            [
                                'title' => 'Havells Ceiling Fan 1200mm',
                                'image' => 'https://m.media-amazon.com/images/I/513I-old+qL.jpg',
                                'price' => 2499,
                                'oldPrice' => 2899,
                                'discount' => 14,
                                'description' => 'High Airflow | 2-Year Warranty',
                            ],
                            [
                                'title' => 'V-Guard Voltage Stabilizer',
                                'image' =>
                                    'https://img-prd-pim.poorvika.com/product/V-Guard-Mini-Crystal-Voltage-Stabilizer-1.png',
                                'price' => 1599,
                                'oldPrice' => 1999,
                                'discount' => 20,
                                'description' => 'Ideal for TVs and Refrigerators',
                            ],
                            [
                                'title' => 'Orient Electric Air Cooler',
                                'image' => 'https://orientelectric.com/cdn/shop/files/50.png?v=1742984515&width=1946',
                                'price' => 5999,
                                'oldPrice' => 6999,
                                'discount' => 14,
                                'description' => 'Honeycomb Pads | High Cooling',
                            ],
                        ];
                    @endphp

                    @foreach ($products as $product)
                        <x-products.product-card :image="$product['image']" :title="$product['title']" :price="$product['price']" :oldPrice="$product['oldPrice'] ?? null"
                            :discount="$product['discount'] ?? null" :description="$product['description'] ?? null" />
                    @endforeach

                </div>

                <div class="flex justify-center mt-12 gap-2">
                    <button class="px-4 py-2 border rounded hover:bg-primary/10 text-primary">
                        1
                    </button>
                    <button class="px-4 py-2 border rounded hover:bg-primary/90 bg-primary text-white">
                        2
                    </button>
                    <button class="px-4 py-2 border rounded hover:bg-primary/10 text-primary">
                        3
                    </button>
                    <button class="px-4 py-2 border rounded hover:bg-primary/10 text-primary">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const openBtn = document.getElementById("openFilters");
    const closeBtn = document.getElementById("closeFilters");
    const sidebar = document.getElementById("sidebarFilters");

    openBtn?.addEventListener("click", () => sidebar.classList.remove("hidden"));
    closeBtn?.addEventListener("click", () => sidebar.classList.add("hidden"));
</script>

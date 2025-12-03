@php
    $topProducts = [
        [
            'title' => 'Bosch Heavy Duty Drill Machine',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZTOC-qm9iOlg_YP0ypZHzvpnsZr8tHgxXEA&s',
            'price' => 3499,
            'oldPrice' => 4299,
            'discount' => 20,
            'description' => '500W Motor | 6 Months Warranty',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'Makita Grinding Machine',
            'image' => 'https://makita.in/wp-content/uploads/2023/04/GA5091.jpg',
            'price' => 5899,
            'oldPrice' => 6599,
            'discount' => 12,
            'description' => 'High performance grinding tool',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'Stanley Hand Tool Kit (32-Piece)',
            'image' => 'https://robu.in/wp-content/uploads/2023/05/Untitled.jpg',
            'price' => 1999,
            'oldPrice' => 2499,
            'discount' => 20,
            'description' => 'Perfect for home & professional use',
        ],
        [
            'title' => 'Bosch Pressure Washer 1500W',
            'image' => 'https://cdn.moglix.com/p/J/0/D/d/MINJ0D0CIRMH1-xxlarge.jpg',
            'price' => 7999,
            'oldPrice' => 8999,
            'discount' => 11,
            'description' => 'Use for cleaning home & car',
        ],
        [
            'title' => 'Makita Cordless Screwdriver',
            'image' =>
                'https://5.imimg.com/data5/SELLER/Default/2024/2/391319374/GR/IS/SD/126231663/makita-screwdriver-battery-powered-6w.jpg',
            'price' => 2599,
            'oldPrice' => 3299,
            'discount' => 21,
            'description' => 'Rechargeable with strong torque',
            'isWishlisted' => 'true',
        ],

        [
            'title' => 'Premium Cement 50KG Bag',
            'image' =>
                'https://5.imimg.com/data5/SELLER/Default/2024/12/476767412/SS/OW/AO/238417237/ultratech-premium-cement-500x500.png',
            'price' => 389,
            'oldPrice' => 449,
            'discount' => 13,
            'description' => 'High Strength | Fast Setting',
        ],

        [
            'title' => 'Industrial Safety Gloves',
            'image' => 'https://www.robustt.in/cdn/shop/files/71CeJcnzSLL._SL1500_large.jpg?v=1689594659',
            'price' => 199,
            'oldPrice' => 299,
            'discount' => 33,
            'description' => 'Heat & Cut Resistant',
        ],
    ];
@endphp


{{-- <section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Section Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-secondary tracking-wide">
                Top Products
            </h2>

            <a href="/top-products" class="text-primary text-sm font-semibold hover:underline">
                View All →
            </a>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-5  gap-6">

            @foreach ($topProducts as $product)
                <x-products.product-card :title="$product['title']" :image="$product['image']" :price="$product['price']" :oldPrice="isset($product['oldPrice']) ? $product['oldPrice'] : null"
                    :discount="isset($product['discount']) ? $product['discount'] : null" :description="isset($product['description']) ? $product['description'] : null" />
            @endforeach

        </div>

    </div>
</section> --}}


<section class="py-12 bg-white">
    <div class="max-w-full mx-auto px-6">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            {{-- <h2 class="text-2xl font-bold text-secondary tracking-wide">
                Top Products
            </h2> --}}
            <h1 class="text-2xl text-secondary/80 border-b-2 border-primary pb-2">
                Top Products
            </h1>

            {{-- <a href="/top-products" class="text-primary text-sm font-semibold hover:underline">
                View All →
            </a> --}}
        </div>

        <!-- CAROUSEL -->
        <div x-data class="relative">

            <!-- Left Arrow -->
            <button @click="$refs.slider.scrollBy({ left: -300, behavior: 'smooth' })"
                class="hidden sm:flex absolute left-0 top-1/2 -translate-y-1/2 bg-primary text-white px-3 py-5 rounded shadow z-10">
                <i class="fas fa-chevron-left"></i>
            </button>

            <!-- Right Arrow -->
            <button @click="$refs.slider.scrollBy({ left: 300, behavior: 'smooth' })"
                class="hidden sm:flex absolute right-0 top-1/2 -translate-y-1/2 bg-primary text-white px-3 py-5 rounded shadow z-10">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- SCROLL CONTAINER -->
            <div x-ref="slider"
                class="flex space-x-4 overflow-x-auto snap-x snap-mandatory hide-scrollbar scroll-smooth py-4">

                @foreach ($topProducts as $product)
                    <div class="min-w-[60%] sm:min-w-[17%] snap-start">
                        <x-products.product-card :isWishlisted="$product['isWishlisted'] ?? false" :title="$product['title']" :image="$product['image']" :price="$product['price']"
                            :oldPrice="isset($product['oldPrice']) ? $product['oldPrice'] : null" :discount="isset($product['discount']) ? $product['discount'] : null" :description="isset($product['description']) ? $product['description'] : null" />
                    </div>
                @endforeach

            </div>

        </div>

    </div>
</section>

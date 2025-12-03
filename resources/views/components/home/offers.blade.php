@php
    $topProducts = [
        [
            'title' => 'Philips LED Bulb Pack (9W)',
            'image' =>
                'https://www.bbassets.com/media/uploads/p/l/40212205_1-philips-ace-saver-led-bulb-9w-b22-warm-whitegolden-yellow.jpg',
            'price' => 3499,
            'oldPrice' => 4299,
            'discount' => 20,
            'description' => '500W Motor | 6 Months Warranty',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'V-Guard Voltage Stabilizer',
            'image' => 'https://img-prd-pim.poorvika.com/product/V-Guard-Mini-Crystal-Voltage-Stabilizer-1.png',
            'price' => 5899,
            'oldPrice' => 6599,
            'discount' => 12,
            'description' => 'High performance grinding tool',
        ],
        [
            'title' => 'Angle Grinder Machine',
            'image' => 'https://images.toolworld.in/product/GWS600-1.jpg',
            'price' => 1999,
            'oldPrice' => 2499,
            'discount' => 20,
            'description' => 'Perfect for home & professional',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'A4 Paper 75 GSM (500 Sheets)',
            'image' => 'https://cdn.moglix.com/p/F8nLWN92udBMS-xxlarge.jpg',
            'price' => 7999,
            'oldPrice' => 8999,
            'discount' => 11,
            'description' => 'Use for cleaning home & car',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'Garden Water Spray Bottle',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYOx7uDjD9AanQyc2ut2owG4h83LCcb1BloA&s',
            'price' => 2599,
            'oldPrice' => 3299,
            'discount' => 21,
            'description' => 'Rechargeable with strong torque',
        ],
        [
            'title' => 'Safety Helmet (ISI Certified)',
            'image' =>
                'https://www.jiomart.com/images/product/original/rvzvizbebj/shreearc-isi-certified-industrial-and-construction-head-protection-with-adjustable-chin-strap-safety-helmet-for-men-product-images-orvzvizbebj-p602018745-0-202305310921.png?im=Resize=(420,420)',
            'price' => 399,
            'oldPrice' => 549,
            'discount' => 27,
            'description' => 'Impact Resistant Build',
        ],
        [
            'title' => 'TMT Steel Rod (10mm)',
            'image' => 'https://cpimg.tistatic.com/10975986/b/4/10mm-Mild-Steel-TMT-Bar..jpg',
            'price' => 599,
            'oldPrice' => 699,
            'discount' => 14,
            'description' => 'Corrosion Resistant Build',
        ],
    ];
@endphp




<section class="py-12 bg-primary">
    <div class="max-w-full mx-auto px-6">


        <div class="flex items-center justify-between mb-6">



            <h1 class="text-2xl text-white border-b-2 border-white pb-2">
                Limited-Time Offers
            </h1>

            <div class="flex items-center gap-2 bg-white text-primary px-4 py-2.5 rounded shadow-sm">


                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                        d="M12 6v6l4 2m5-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>


                <span id="countdown" class="font-semibold text-sm tracking-wide">
                    02h : 45m : 12s
                </span>
            </div>
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

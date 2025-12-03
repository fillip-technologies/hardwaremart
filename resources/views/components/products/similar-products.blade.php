@php
    $items = $items ?? [
        [
            'title' => 'Motorcycle Helmet',
            'image' => 'https://vegaauto.com/wp-content/uploads/2025/06/DIRT-X-BLACK-WEB-1500x1500-PNG-2.png',
            'price' => 1099,
            'oldPrice' => 1499,
            'discount' => 26,
            'description' => 'ISI Certified | Comfortable Fit',
            'rating' => 1.5,
            'reviews' => 100,
        ],
        [
            'title' => 'Premium Cement 50KG Bag',
            'image' =>
                'https://5.imimg.com/data5/SELLER/Default/2024/12/476767412/SS/OW/AO/238417237/ultratech-premium-cement-500x500.png',
            'price' => 389,
            'oldPrice' => 449,
            'discount' => 13,
            'description' => 'High Strength | Fast Setting',
            'rating' => 3.5,
            'reviews' => 200,
        ],
        [
            'title' => 'Agricultural Hand Cultivator',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsltPlyCf_zj5I63yBCaEv967QxT0VSa1oTg&s',
            'price' => 499,
            'oldPrice' => 699,
            'discount' => 28,
            'description' => 'Durable Steel Build',
            'rating' => 4.5,
            'reviews' => 1200,
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'Digital Thermometer',
            'image' => 'https://trigofit.in/wp-content/uploads/2025/07/Digital-ai.jpg',
            'price' => 199,
            'oldPrice' => 299,
            'discount' => 33,
            'description' => 'Accurate & Fast Readings',
            'rating' => 5,
            'reviews' => 1200,
        ],
        [
            'title' => 'A4 Paper 75 GSM (500 Sheets)',
            'image' => 'https://cdn.moglix.com/p/F8nLWN92udBMS-xxlarge.jpg',
            'price' => 349,
            'oldPrice' => 499,
            'discount' => 30,
            'description' => 'Perfect for Printing & Copying',
            'rating' => 0.5,
            'reviews' => 400,
            'isWishlisted' => 'true',
        ],
    ];
@endphp

<section x-data="wishlistComponent()" class="w-full mx-auto px-6 py-12">


    <div class="mb-4 flex justify-between pt-5">
        <h1 class="text-2xl text-secondary/90 border-b-2 border-primary pb-2">
            Similar Products
        </h1>

    </div>

    {{-- Products Grid --}}
    <div x-show="count > 0" class="grid gap-10 sm:grid-cols-2 lg:grid-cols-6" x-cloak>
        @foreach ($items as $index => $item)
            <div class="wishlist-item relative group" data-index="{{ $index }}">

                {{-- Product Component --}}
                <x-products.product-card :isWishlisted="$item['isWishlisted'] ?? false" :rating="$item['rating']" :reviews="$item['reviews']" :image="$item['image']"
                    :title="$item['title']" :price="(int) preg_replace('/\D/', '', $item['price'])" :discount="$item['discount'] ?? null" :description="$item['description'] ?? null" :oldPrice="$item['oldPrice'] ?? null" />
            </div>
        @endforeach
    </div>


</section>

<script>
    function wishlistComponent() {
        return {
            count: document.querySelectorAll('.wishlist-item').length,

            remove(itemEl) {
                if (!itemEl) return;

                // nice animation
                itemEl.classList.add('opacity-0', 'scale-95', 'transition');
                setTimeout(() => {
                    itemEl.remove();
                    this.count = document.querySelectorAll('.wishlist-item').length;
                }, 180);
            }
        };
    }
</script>

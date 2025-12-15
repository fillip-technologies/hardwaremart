@php
    $items = $items ?? [
        [
            'title' => 'Motorcycle Helmet',
            'image' => 'https://vegaauto.com/wp-content/uploads/2025/06/DIRT-X-BLACK-WEB-1500x1500-PNG-2.png',
            'price' => 1099,
            'oldPrice' => 1499,
            'discount' => 26,
            'description' => 'ISI Certified | Comfortable Fit',
            'isWishlisted' => 'false',
        ],
        [
            'title' => 'Premium Cement 50KG Bag',
            'image' =>
                'https://5.imimg.com/data5/SELLER/Default/2024/12/476767412/SS/OW/AO/238417237/ultratech-premium-cement-500x500.png',
            'price' => 389,
            'oldPrice' => 449,
            'discount' => 13,
            'description' => 'High Strength | Fast Setting',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'Agricultural Hand Cultivator',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsltPlyCf_zj5I63yBCaEv967QxT0VSa1oTg&s',
            'price' => 499,
            'oldPrice' => 699,
            'discount' => 28,
            'description' => 'Durable Steel Build',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'Digital Thermometer',
            'image' => 'https://trigofit.in/wp-content/uploads/2025/07/Digital-ai.jpg',
            'price' => 199,
            'oldPrice' => 299,
            'discount' => 33,
            'description' => 'Accurate & Fast Readings',
            'isWishlisted' => 'true',
        ],
        [
            'title' => 'A4 Paper 75 GSM (500 Sheets)',
            'image' => 'https://cdn.moglix.com/p/F8nLWN92udBMS-xxlarge.jpg',
            'price' => 349,
            'oldPrice' => 499,
            'discount' => 30,
            'description' => 'Perfect for Printing & Copying',
            'isWishlisted' => 'true',
        ],
    ];
@endphp

<section x-data="wishlistComponent()" class="max-w-7xl mx-auto px-6 py-12">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-10">
        <h2 class="text-2xl tracking-wide text-secondary/80 flex items-center gap-3">
            <i class="fa-regular fa-heart text-primary"></i> My Wishlist
        </h2>

        {{-- <h1 class="text-2xl text-secondary/80 border-b-2 border-primary pb-2">
            {{ $title }}
        </h1> --}}
        <span class="text-gray-500 text-sm" x-text="count + ' item' + (count !== 1 ? 's' : '')"></span>
    </div>

    {{-- Products Grid --}}
    <div x-show="count > 0" class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4" x-cloak>
        @foreach ($items as $index => $item)
            <div class="wishlist-item relative group" data-index="{{ $index }}">

                {{-- Remove button --}}
                <button @click.prevent="remove($el.closest('.wishlist-item'))"
                    class="absolute top-4 right-4 z-20 bg-white/90 backdrop-blur-md hover:bg-primary/10
                           text-primary rounded-full w-10 h-10 flex items-center justify-center shadow">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                {{-- Product Component --}}
                <x-products.product-card :isWishlisted="$item['isWishlisted']" :image="$item['image']" :title="$item['title']" :price="(int) preg_replace('/\D/', '', $item['price'])"
                    :discount="$item['discount'] ?? null" :description="$item['description'] ?? null" :oldPrice="$item['oldPrice'] ?? null" />
            </div>
        @endforeach
    </div>

    {{-- Empty State --}}
    <div x-show="count === 0" class="text-center py-20 text-gray-500" x-cloak>
        <i class="fa-regular fa-heart text-5xl text-primary mb-4"></i>
        <p class="text-xl">Your wishlist is empty</p>
        <p class="text-gray-400 mt-1">
            Start adding your favorite products <i class="fa-solid fa-wand-magic-sparkles"></i>
        </p>
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

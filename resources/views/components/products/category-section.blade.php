@props([
    'title' => 'Category Name',
    'viewAll' => '#',
    'brands' => [],
    'products' => [],
])

<!-- Section Title -->
<div class="px-6 mx-auto mb-4 flex justify-between pt-5">
    <h1 class="text-2xl text-secondary/80 border-b-2 border-primary pb-2">
        {{ $title }}
    </h1>
    <a href="{{ $viewAll }}" class="bg-primary flex items-center justify-center px-3 py-2 rounded">
        <p class="text-white">View All</p>
    </a>
</div>

<!-- Layout -->
<div class="flex flex-col md:flex-row px-6 mx-auto gap-6 pb-5">

    <!-- LEFT: BRANDS -->
    <div class="w-full md:w-[30%] p-6">

        <h3 class="text-lg font-semibold text-secondary mb-5">
            Top Brands
        </h3>

        <div class="grid grid-cols-4 gap-4">
            @foreach ($brands as $brand)
                <img src="{{ $brand }}" class="w-20 h-auto object-contain rounded-full" />
            @endforeach
        </div>

    </div>

    <!-- RIGHT: PRODUCTS -->
    <div class="w-full md:w-[70%]">

        <div x-data class="relative bg-gray-100 border p-6 rounded">

            <!-- Left Arrow -->
            <button @click="$refs.slider.scrollBy({ left: -300, behavior: 'smooth' })"
                class="hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 bg-primary shadow px-2 py-4 z-10 rounded">
                <i class="fas fa-chevron-left text-white"></i>
            </button>

            <!-- Right Arrow -->
            <button @click="$refs.slider.scrollBy({ left: 300, behavior: 'smooth' })"
                class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 bg-primary shadow px-2 py-4 rounded z-10">
                <i class="fas fa-chevron-right text-white"></i>
            </button>

            <!-- SCROLLER -->
            <div x-ref="slider"
                class="flex space-x-4 overflow-x-auto snap-x snap-mandatory hide-scrollbar scroll-smooth py-2">

                @foreach ($products as $product)
                    <div class="min-w-[50%] md:min-w-[25%] snap-start">
                        {{-- Product Card Component --}}
                        <x-products.product-card :isWishlisted="$product['isWishlisted'] ?? false" :title="$product['title']" :image="$product['image']" :price="$product['price']"
                            :oldPrice="$product['oldPrice']" :discount="$product['discount']" :description="$product['description']" />
                    </div>
                @endforeach

            </div>

        </div>

    </div>

</div>

{{-- <style>
    .thin-scroll::-webkit-scrollbar {
        height: 6px;
    }

    .thin-scroll::-webkit-scrollbar-track {
        background: #e5e7eb;
        border-radius: 10px;
    }

    .thin-scroll::-webkit-scrollbar-thumb {
        background: #c4c4c4;
        border-radius: 10px;
    }

    .thin-scroll::-webkit-scrollbar-thumb:hover {
        background: #a1a1a1;
    }

    .thin-scroll {
        scrollbar-width: thin;
        scrollbar-color: #c4c4c4 #e5e7eb;
    }
</style> --}}



<style>
    /* Hide scrollbar completely */
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        /* IE + Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

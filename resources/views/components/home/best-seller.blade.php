@php
    $topProducts = [
        ['image' => '/images/brand/br1.webp'],
        ['image' => '/images/brand/br2.webp'],
        ['image' => '/images/brand/br3.webp'],
        ['image' => '/images/brand/br4.webp'],
        ['image' => '/images/brand/br3.webp'],
        ['image' => '/images/brand/br2.webp'],
        ['image' => '/images/brand/br1.webp'],
        ['image' => '/images/brand/br4.webp'],
        ['image' => '/images/brand/br1.webp'],
        ['image' => '/images/brand/br2.webp'],
        ['image' => '/images/brand/br3.webp'],
        ['image' => '/images/brand/br4.webp'],
        ['image' => '/images/brand/br3.webp'],
        ['image' => '/images/brand/br2.webp'],
        ['image' => '/images/brand/br1.webp'],
        ['image' => '/images/brand/br4.webp'],
    ];
@endphp

<section class="py-12 bg-gray-100">
    <div class="max-w-full mx-auto px-6">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl text-secondary/80 border-b-2 border-primary pb-2">
                Our Trusted Brands
            </h1>
        </div>

        <!-- CAROUSEL -->
        <div x-data class="relative">

            <!-- SCROLL AREA -->
            <div 
                x-ref="slider"
                class="flex space-x-0 overflow-x-auto snap-x snap-mandatory hide-scrollbar scroll-smooth py-4">

                @foreach ($topProducts as $product)
                    <div class="min-w-[25%] sm:min-w-[10%] snap-start flex justify-center">
                        <img 
                            src="{{ $product['image'] }}"
                            class="w-24 h-24 object-contain rounded-full border shadow-sm hover:shadow-lg transition"
                        />
                    </div>
                @endforeach

            </div>

            <!-- BUTTONS (INSIDE x-data) -->
            <div class="flex justify-end px-10 space-x-3 mt-5">

                <!-- Left Arrow -->
                <button 
                    @click="$refs.slider.scrollBy({ left: -250, behavior: 'smooth' })"
                    class="hidden sm:flex bg-primary text-white px-3 py-3 rounded-full shadow z-10">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <!-- Right Arrow -->
                <button 
                    @click="$refs.slider.scrollBy({ left: 250, behavior: 'smooth' })"
                    class="hidden sm:flex bg-primary text-white px-3 py-3 rounded-full shadow z-10">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

        </div>

    </div>
</section>

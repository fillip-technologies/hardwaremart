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
            <div x-ref="slider"
                class="flex md:gap-6 overflow-x-auto snap-x snap-mandatory hide-scrollbar scroll-smooth py-4">

                @foreach ($topProducts as $product)
                    <!-- Brand Item -->
                    <div class="snap-center shrink-0 w-24 sm:w-28 md:w-32 flex justify-center">
                        <div
                            class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full bg-white shadow hover:shadow-lg transition border">
                            <img src="{{ $product['image'] }}" class="w-full h-full object-contain rounded-full" />
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- BUTTONS (DESKTOP ONLY) -->
            <div class="hidden sm:flex justify-end px-10 space-x-3 mt-5">

                <!-- Left Arrow -->
                <button @click="$refs.slider.scrollBy({ left: -250, behavior: 'smooth' })"
                    class="bg-primary text-white px-3 py-3 rounded-full shadow z-10 hover:bg-primary/90 transition">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <!-- Right Arrow -->
                <button @click="$refs.slider.scrollBy({ left: 250, behavior: 'smooth' })"
                    class="bg-primary text-white px-3 py-3 rounded-full shadow z-10 hover:bg-primary/90 transition">
                    <i class="fas fa-chevron-right"></i>
                </button>

            </div>

        </div>

    </div>
</section>

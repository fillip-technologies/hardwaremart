@props([
    'image',
    'title',
    'description' => null,
    'price',
    'oldPrice' => null,
    'discount' => null,
    'rating' => 4.5,
    'reviews' => 1200,

    // wishlist
    'isWishlisted' => false,
])

@php
    $fullStars = floor($rating);
    $halfStar = $rating - $fullStars >= 0.5;
    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
@endphp

<div
    class="group bg-white rounded border border-lightGray p-4 
           transition-all shadow-md hover:shadow-md hover:-translate-y-1">

    <!-- Product Image -->
    <div class="relative w-full h-44 bg-lightGray rounded overflow-hidden">

        <!-- Wishlist Heart -->
        @if (!request()->routeIs('wishlist', 'account-overview'))
            <button
                class="z-20 absolute top-1.5 right-1.5 w-8 h-8 rounded-full bg-white shadow flex items-center justify-center hover:bg-red-50 transition"
                onclick="addToWishlist('{{ $title }}')">

                @if ($isWishlisted)
                    <i class="fa-solid fa-heart text-red-600 text-sm"></i>
                @else
                    <i class="fa-regular fa-heart text-gray-600 text-sm group-hover:text-red-600 transition"></i>
                @endif

            </button>
        @endif


        <img src="{{ $image }}"
            class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500" />

        @if ($discount)
            <span class="absolute top-3 left-3 bg-primary text-white px-3 py-1 text-xs rounded-full font-semibold">
                {{ $discount }}% OFF
            </span>
        @endif
    </div>

    <!-- Product Details -->
    <div class="mt-4">
        <h3 class="font-semibold text-sm text-secondary group-hover:text-primary transition min-h-10">
            {{ $title }}
        </h3>

        @if ($description)
            <p class="text-xs text-gray-500 mt-1">
                {{ $description }}
            </p>
        @endif

        <!-- DYNAMIC RATING -->
        <div class="flex items-center gap-1 mt-2 text-[0.625rem]">
            <div class="flex items-center">

                {{-- Full Stars --}}
                @for ($i = 0; $i < $fullStars; $i++)
                    <i class="fa-solid fa-star text-[0.625rem]" style="color:#facc15;"></i>
                @endfor

                {{-- Half Star --}}
                @if ($halfStar)
                    <i class="fa-solid fa-star-half-stroke text-[0.625rem]" style="color:#facc15;"></i>
                @endif

                {{-- Empty Stars --}}
                @for ($i = 0; $i < $emptyStars; $i++)
                    <i class="fa-regular fa-star text-[0.625rem]" style="color:#d1d5db;"></i>
                @endfor

            </div>

            <span class="text-xs font-medium text-gray-700 ml-1">
                {{ number_format($rating, 1) }}
            </span>

            <span class="text-[0.6rem] text-gray-400">
                ({{ number_format($reviews) }})
            </span>
        </div>

        <!-- Price -->
        <div class="mt-3 flex items-center gap-2">
            <span class="text-md font-bold text-secondary">₹{{ number_format($price) }}</span>

            @if ($oldPrice)
                <span class="text-xs line-through text-gray-400">₹{{ number_format($oldPrice) }}</span>
            @endif
        </div>

        <!-- Button -->
        <button
            class="mt-4 w-full py-2 bg-primary text-xs text-white rounded-full hover:bg-red-700 transition-all flex items-center justify-center gap-2">
            <i class="fas fa-shopping-cart text-sm"></i>
            Add to Cart
        </button>

    </div>

</div>

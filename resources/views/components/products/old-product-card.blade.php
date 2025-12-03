<div
    class="group bg-white rounded border border-lightGray p-4 
           transition-all shadow-md hover:shadow-md hover:-translate-y-1">

    <!-- Product Image -->
    <div class="relative w-full h-44 bg-lightGray rounded overflow-hidden">
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

        <!-- Price -->
        <div class="mt-4 flex items-center gap-2">
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

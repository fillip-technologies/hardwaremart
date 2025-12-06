<section x-data="{
    active: 0,
    items: [
        { img: '/images/banner/c1.webp' },
        { img: '/images/banner/c2.webp' },
        { img: '/images/banner/c3.webp' },
        { img: '/images/banner/c4.webp' },
        { img: '/images/banner/c5.webp' },
    ],
    next() { this.active = (this.active + 1) % this.items.length },
    prev() { this.active = (this.active - 1 + this.items.length) % this.items.length }
}" x-init="setInterval(() => { next() }, 3000)" class="relative bg-gray-50 py-5 overflow-hidden">


    <div class="w-full mx-auto sm:px-6 relative">
        <!-- Slides -->
        <template x-for="(item, index) in items" :key="index">
            <div x-show="active === index" x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                class="flex justify-center items-center sm:rounded-xl overflow-hidden md:shadow-lg md:bg-white">
                <img :src="item.img" alt="slide image"
                    class="w-full sm:h-auto object-contain sm:object-cover transition-all duration-700 hover:scale-105" />

            </div>
        </template>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-2 mt-5">
            <template x-for="(item, index) in items" :key="index">
                <button @click="active = index" class="w-10 h-1 rounded-full transition-all duration-300"
                    :class="active === index ? 'bg-primary w-4' : 'bg-gray-400 hover:bg-gray-600'">
                </button>
            </template>
        </div>


    </div>
</section>

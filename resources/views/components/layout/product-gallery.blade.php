@props(['images' => []])

@php
    $images = $images ?: [
        '/images/placeholder.svg',
        '/images/placeholder.svg',
        '/images/placeholder.svg',
        '/images/placeholder.svg',
    ];
@endphp

<section x-data="galleryComponent({{ json_encode($images) }})" class="w-full py-4 md:px-4">
    <div class="grid grid-cols-1 gap-4">

        <!-- MAIN IMAGE (Flipkart zoom style) -->
        <div class="hover:cursor-pointer relative overflow-hidden rounded min-h-[25rem] w-full bg-white"
            @mousemove="zoom($event)" @mouseenter="enableZoom()" @mouseleave="disableZoom()">
            <img :src="currentImage" x-ref="mainImage"
                class="absolute top-0 left-0 w-full h-full object-contain transition-transform duration-200 ease-out" />
        </div>

        <!-- THUMBNAILS -->
        <div class="flex flex-wrap justify-center gap-4 ">
            <template x-for="(img, index) in images" :key="index">
                <div @click="select(index)" class="overflow-hidden rounded cursor-pointer border-2"
                    :class="currentIndex === index ? 'border-blue-600' : 'border-transparent'">
                    <img :src="img" class="w-20 h-20 object-cover rounded" />
                </div>
            </template>
        </div>

    </div>
</section>

<script>
    function galleryComponent(images) {
        return {
            images,
            currentIndex: 0,

            get currentImage() {
                return this.images[this.currentIndex];
            },

            select(index) {
                this.currentIndex = index;
            },

            /* --------------------------------------------------
                  REAL FLIPKART ZOOM — CLEAN & PROFESSIONAL
               -------------------------------------------------- */

            zoom(event) {
                const img = this.$refs.mainImage;
                if (!img) return;

                const rect = img.parentElement.getBoundingClientRect();

                const x = ((event.clientX - rect.left) / rect.width) * 100;
                const y = ((event.clientY - rect.top) / rect.height) * 100;

                img.style.transformOrigin = `${x}% ${y}%`;
            },

            enableZoom() {
                const img = this.$refs.mainImage;
                img.style.transform = "scale(2.3)"; // Perfect Flipkart zoom level
            },

            disableZoom() {
                const img = this.$refs.mainImage;
                img.style.transform = "scale(1)";
            }
        }
    }
</script>

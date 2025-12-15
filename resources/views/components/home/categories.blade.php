<div class="w-full bg-white shadow-sm py-3">
    <div class="overflow-x-auto scrollbar-hide">
        <div
            class="flex gap-6 md:gap-10 px-4 min-w-max text-secondary text-sm md:text-base font-light">

            <!-- CATEGORY -->
            <div x-data="{ open: false }" class="relative shrink-0">
                <button
                    @click="open = !open"
                    class="flex flex-col items-center cursor-pointer focus:outline-none">
                    <img src="/images/categories/one.webp" class="w-8 h-8 rounded-full mb-1">
                    <span>Electrical & Appliances</span>
                </button>

                <!-- TELEPORTED DROPDOWN -->
                <template x-teleport="body">
                    <div
                        x-show="open"
                        @click.outside="open = false"
                        x-transition
                        x-cloak
                        class="fixed mt-44 w-52 bg-white border shadow-lg rounded z-[9999]"
                        :style="{
                          top: $el.getBoundingClientRect().bottom + 'px',
                          left: $el.getBoundingClientRect().left + 'px'
                        }">

                        <a class="block px-4 py-2 hover:bg-midGray">LED Bulbs & Tube Lights</a>
                        <a class="block px-4 py-2 hover:bg-midGray">Switches & Sockets</a>
                        <a class="block px-4 py-2 hover:bg-midGray">Fans & Air Coolers</a>
                        <a class="block px-4 py-2 hover:bg-midGray">Home Appliances</a>
                    </div>
                </template>
            </div>

            <!-- repeat for other categories -->
        </div>
    </div>
</div>

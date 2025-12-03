<section x-data="{ activeTab: 'overview', sidebarOpen: false }"
    @go-to-orders.window="activeTab = 'orders'; sidebarOpen = true; $nextTick(() => window.scrollTo({ top: 0, behavior: 'smooth' }))"
    class="bg-lightGray py-16">

    <div class="w-full mx-auto px-6 grid grid-cols-1 lg:grid-cols-4">

        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
            class="md:sticky md:top-28 fixed  inset-y-0 left-0 w-3/4 bg-secondary text-lightGray md:rounded-xl shadow-xl p-6 border border-charcoal md:self-start transform transition-transform duration-300 z-50 md:z-10">

            <div class="flex justify-end items-center">
                <button @click="sidebarOpen=false" class="lg:hidden text-midGray">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
            </div>

            <!-- Profile -->
            <div class="text-center mt-6">

                <h3 class="mt-3 text-lg font-semibold text-lightGray">Mohit Kumar</h3>
                <p class="text-sm text-midGray">mohit@example.com</p>
            </div>

            <!-- Menu -->
            <nav class="mt-10 space-y-2">

                <!-- COMMON BUTTON STYLE -->
                <template
                    x-for="item in [
                    { id: 'overview', icon: 'fa-user', label: 'Overview' },
                    { id: 'orders', icon: 'fa-box', label: 'Orders' },
                    { id: 'wishlist', icon: 'fa-heart', label: 'Wishlist' },
                    { id: 'address', icon: 'fa-location-dot', label: 'Address' },
                    { id: 'settings', icon: 'fa-gear', label: 'Settings' },
                    { id: 'logout', icon: 'fa-right-from-bracket', label: 'Logout' },
                ]">
                    <button
                        @click="activeTab = item.id; sidebarOpen=false; $nextTick(() => window.scrollTo({ top: 0, behavior: 'smooth' }))"
                        :class="activeTab === item.id ? 'bg-primary/20 text-primary border border-primary/40' :
                            'text-midGray hover:bg-charcoal hover:text-lightGray'"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-left transition-all duration-200 font-medium">
                        <i :class="'fa-solid ' + item.icon"></i>
                        <span x-text="item.label"></span>
                    </button>

                </template>

            </nav>
        </aside>

        <!-- Main Dashboard -->
        <div class="lg:col-span-3">

            <!-- Mobile Menu Button -->
            <button @click="sidebarOpen=true"
                class="mb-4 lg:hidden bg-primary text-white px-4 py-2 rounded-lg shadow-md">
                ☰ Menu
            </button>

            <div x-show="activeTab === 'overview'" x-cloak>
                <x-account.overview />
            </div>

            <div x-show="activeTab === 'wishlist'" x-cloak>
                <x-products.wishlist />
            </div>

            <div x-show="activeTab === 'address'" x-cloak>
                <x-account.address />
            </div>

            <div x-show="activeTab === 'orders'" x-cloak>
                <x-account.myorders />
            </div>

            <div x-show="activeTab === 'settings'" x-cloak>
                <x-account.settings />
            </div>

        </div>
    </div>
</section>

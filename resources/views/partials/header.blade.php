<nav x-data="{ mobileMenu: false }"
    class="flex items-center justify-between px-6 md:px-12 py-4 bg-secondary shadow-md sticky top-0 z-50">

    <!-- Logo -->
    <a href="/" class="text-3xl font-serif font-bold cursor-pointer">
        <img src="/images/white-logo-removebg-preview.png" class="h-14" />
    </a>

    <!-- Mobile Menu Button -->
    <div class="md:hidden">
        <button @click="mobileMenu = !mobileMenu" class="text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Desktop Search -->
    <div class="hidden md:block flex-1 max-w-xl mx-6 relative">
        <x-home.search-bar />
    </div>

    <!-- Desktop Icons -->
    <div class="hidden md:flex items-center space-x-6 text-gray-700 pr-6">
        <!-- Account -->
        <a href="/login" class="relative flex flex-col items-center text-white transition">
            <i class="far fa-user text-lg"></i>
            <span class="mt-1 text-xs md:text-sm">Account</span>
        </a>

        <!-- Wishlist -->
        <a href="/wishlist" class="relative flex flex-col items-center text-white transition">
            <i class="far fa-heart text-lg"></i>
            <span class="mt-1 text-xs md:text-sm">Wishlist</span>
            <div
                class="absolute -top-2 -right-2 bg-primary text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">
                5
            </div>
        </a>

        <!-- Cart -->
        <a href="/cart" class="relative flex flex-col items-center text-white transition">
            <i class="fas fa-shopping-cart text-lg"></i>
            <span class="mt-1 text-xs md:text-sm">Cart</span>
            <div
                class="absolute -top-2 -right-5 bg-primary text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">
                1
            </div>
        </a>
    </div>


    <!-- Mobile Menu (Dropdown) -->
    <div x-show="mobileMenu" x-transition class="absolute top-full left-0 w-full bg-white shadow-md md:hidden z-40">

        <!-- Mobile Search -->
        <div class="px-6 py-4 border-b relative overflow-visible">
            <x-home.search-bar />
        </div>

        <!-- Mobile Links -->
        <div class="flex justify-around px-6 py-4 text-gray-700">
            <a href="/account-overview" class="flex flex-col items-center hover:text-primary">
                <i class="far fa-user text-lg"></i>
                <span class="text-xs">Account</span>
            </a>
            <a href="/wishlist" class="flex flex-col items-center hover:text-primary relative">
                <i class="far fa-heart text-lg"></i>
                <span class="text-xs">Wishlist</span>
                <div
                    class="absolute -top-2 -right-2 bg-primary text-white text-xs font-bold rounded-full h-4 w-4 flex items-center justify-center">
                    5</div>
            </a>
            <a href="/cart" class="flex flex-col items-center hover:text-primary relative">
                <i class="fas fa-shopping-cart text-lg"></i>
                <span class="text-xs">Cart</span>
                <div
                    class="absolute -top-2 -right-4 bg-primary text-white text-xs font-bold rounded-full h-4 w-4 flex items-center justify-center">
                    1</div>
            </a>
        </div>
    </div>

</nav>

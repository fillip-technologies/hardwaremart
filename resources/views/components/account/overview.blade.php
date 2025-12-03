<div class="space-y-8">

    <!-- Welcome Card -->
    <div class="bg-secondary/90 p-6 rounded-2xl border border-charcoal shadow-lg">
        <h2 class="text-xl font-semibold text-lightGray">Welcome Back, Mohit!</h2>
        <p class="text-sm text-midGray mt-1">Here’s a quick overview of your account.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Orders -->
        <div
            class="bg-white p-6 rounded-xl shadow border border-primary/90 text-center hover:shadow-lg hover:border-primary transition">
            <i class="fa-solid fa-box text-primary text-3xl mb-3"></i>
            <h3 class="text-2xl font-semibold text-secondary">12</h3>
            <p class="text-sm text-gray-600">Orders</p>
        </div>

        <!-- Wishlist -->
        <div
            class="bg-white p-6 rounded-xl shadow border border-primary/90 text-center hover:shadow-lg hover:border-primary transition">
            <i class="fa-solid fa-heart text-primary text-3xl mb-3"></i>
            <h3 class="text-2xl font-semibold text-secondary">8</h3>
            <p class="text-sm text-gray-600">Wishlist</p>
        </div>

        <!-- Cart -->
        <div
            class="bg-white p-6 rounded-xl shadow border border-primary/90 text-center hover:shadow-lg hover:border-primary transition">
            <i class="fa-solid fa-cart-plus text-primary text-3xl mb-3"></i>
            <h3 class="text-2xl font-semibold text-secondary">3</h3>
            <p class="text-sm text-gray-600">Cart</p>
        </div>

    </div>

    <!-- Recent Orders -->
    <div class="bg-white p-6 rounded-2xl shadow border border-midGray/40">
        <h3 class="text-lg font-semibold text-secondary mb-4">Recent Orders</h3>

        <div class="divide-y text-sm">

            <!-- Order 1 -->
            <div class="flex justify-between items-center py-3">
                <div>
                    <p class="font-medium text-secondary">A4 Size Paper</p>
                    <p class="text-xs text-gray-500">Order #12345 • Placed on Jan 10, 2025</p>
                </div>
                <span class="text-success font-semibold">Delivered</span>
            </div>

            <!-- Order 2 -->
            <div class="flex justify-between items-center py-3">
                <div>
                    <p class="font-medium text-secondary">CP Plus Camera</p>
                    <p class="text-xs text-gray-500">Order #12344 • Placed on Dec 28, 2024</p>
                </div>
                <span class="text-yellow font-semibold text-yellow-500">Shipped</span>
            </div>

            <!-- Order 3 -->
            <div class="flex justify-between items-center py-3">
                <div>
                    <p class="font-medium text-secondary">Multi Wrench</p>
                    <p class="text-xs text-gray-500">Order #12343 • Placed on Dec 20, 2024</p>
                </div>
                <span class="text-primary font-semibold">Processing</span>
            </div>

        </div>

        <div class="text-right mt-4">
            {{-- <a href="#" class="text-sm text-primary hover:underline">View All Orders →</a> --}}
            <a href="#" @click.prevent="$dispatch('go-to-orders')" class="text-sm text-primary hover:underline">
                View All Orders →
            </a>

        </div>

    </div>

</div>

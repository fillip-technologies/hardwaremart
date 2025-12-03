<section x-data="{ showForm: false }" class="bg-lightGray py-12">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-2xl font-semibold text-secondary mb-6">My Addresses</h2>

        <!-- Saved Addresses -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" x-show="!showForm">

            <!-- Address Card -->
            <div class="bg-white rounded-xl shadow border border-midGray/40 p-6 hover:shadow-lg transition">
                <h3 class="font-semibold text-secondary mb-2">Home</h3>
                <p class="text-sm text-gray-600 mb-4">
                    123 Jewellery Street, Patna, Bihar - 803110
                </p>

                <div class="flex gap-3 text-sm">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition">
                        Edit
                    </button>
                    <button
                        class="px-4 py-2 border border-midGray text-secondary rounded-lg hover:bg-lightGray transition">
                        Remove
                    </button>
                </div>
            </div>

            <!-- Address Card -->
            <div class="bg-white rounded-xl shadow border border-midGray/40 p-6 hover:shadow-lg transition">
                <h3 class="font-semibold text-secondary mb-2">Office</h3>
                <p class="text-sm text-gray-600 mb-4">
                    56 Coworking Studio, Patna, Bihar - 800001
                </p>

                <div class="flex gap-3 text-sm">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition">
                        Edit
                    </button>
                    <button
                        class="px-4 py-2 border border-midGray text-secondary rounded-lg hover:bg-lightGray transition">
                        Remove
                    </button>
                </div>
            </div>
        </div>

        <!-- Add New Address Button -->
        <div class="mt-6" x-show="!showForm">
            <button @click="showForm = true"
                class="px-5 py-3 w-full md:w-auto bg-primary text-white rounded-lg shadow hover:bg-primary/90 transition">
                <i class="fa-solid fa-plus mr-2"></i> Add New Address
            </button>
        </div>

        <!-- Address Form -->
        <div id="addressForm" x-show="showForm" x-cloak
            class="mt-8 bg-white p-6 rounded-xl shadow border border-midGray/40">

            <h3 class="text-lg font-semibold text-secondary mb-4">Add New Address</h3>

            <!-- Form Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-secondary mb-1">First Name</label>
                    <input type="text" value="Mohit"
                        class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary focus:border-transparent" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-secondary mb-1">Last Name</label>
                    <input type="text" value="Kumar"
                        class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary focus:border-transparent" />
                </div>
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium text-secondary mb-1">Address</label>
                <input type="text" value="123 Main Street"
                    class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary focus:border-transparent" />
            </div>

            <div class="mt-4">
                <label class="block text-sm font-medium text-secondary mb-1">Apartment, suite, etc. (optional)</label>
                <input type="text" value="Apartment 4B"
                    class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary focus:border-transparent" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label class="block text-sm font-medium text-secondary mb-1">City</label>
                    <input type="text" value="Patna"
                        class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-secondary mb-1">State</label>
                    <select
                        class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary">
                        <option selected>Bihar</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-secondary mb-1">ZIP Code</label>
                    <input type="text" value="800020"
                        class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary" />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="block text-sm font-medium text-secondary mb-1">Phone Number</label>
                    <input type="tel" value="9856303568"
                        class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-secondary mb-1">Address Type</label>
                    <input type="text" value="Home"
                        class="w-full px-3 py-2 border border-midGray rounded-md shadow-sm focus:ring-2 focus:ring-primary" />
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex space-x-3 mt-6">
                <button @click="showForm = false"
                    class="bg-primary text-white px-5 py-2 rounded-md font-medium hover:bg-primary/90 transition">
                    Save Address
                </button>

                <button @click="showForm = false"
                    class="bg-midGray/20 text-secondary px-5 py-2 rounded-md font-medium hover:bg-midGray/30 transition">
                    Cancel
                </button>
            </div>

        </div>
    </div>
</section>

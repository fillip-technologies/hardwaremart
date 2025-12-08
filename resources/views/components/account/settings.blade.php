<section x-data="{ editField: null }" class="bg-lightGray">
    <div class="w-full mx-auto">

        <!-- Header -->
        <h2 class="text-2xl font-semibold text-secondary mb-6">Account Settings</h2>

        <!-- Settings Box -->
        <div class="bg-white rounded-xl shadow-lg border border-midGray/40 p-6 space-y-6">

            <!-- FULL NAME -->
            <div class="flex flex-col space-y-2 md:flex-row justify-between items-start md:items-center">
                <div>
                    <p class="text-sm text-gray-500">Full Name</p>

                    <p x-show="editField !== 'name'" class="text-secondary font-medium">Mohit Kumar</p>

                    <input x-show="editField === 'name'" type="text" value="Mohit Kumar"
                        class="mt-1 w-full border border-midGray rounded-md px-3 py-2 shadow-sm
                               focus:ring-2 focus:ring-primary focus:border-transparent text-secondary" />
                </div>

                <div>
                    <!-- Edit Button -->
                    <button x-show="editField !== 'name'" @click="editField = 'name'"
                        class="text-sm text-primary hover:underline">
                        Edit
                    </button>

                    <!-- Save/Cancel -->
                    <div x-show="editField === 'name'" class="flex gap-2">
                        <button @click="editField = null"
                            class="px-3 py-1 bg-primary text-white text-sm rounded-md hover:bg-primary/90">
                            Save
                        </button>
                        <button @click="editField = null"
                            class="px-3 py-1 bg-midGray/20 text-secondary text-sm rounded-md hover:bg-midGray/30">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

            <hr class="border-midGray/30" />

            <!-- EMAIL -->
            <div class="flex flex-col space-y-2 md:flex-row justify-between items-start md:items-center">
                <div>
                    <p class="text-sm text-gray-500">Email</p>

                    <p x-show="editField !== 'email'" class="text-secondary font-medium">mohit@example.com</p>

                    <input x-show="editField === 'email'" type="email" value="mohit@example.com"
                        class="mt-1 w-full border border-midGray rounded-md px-3 py-2 shadow-sm
                               focus:ring-2 focus:ring-primary focus:border-transparent text-secondary" />
                </div>

                <div>
                    <button x-show="editField !== 'email'" @click="editField = 'email'"
                        class="text-sm text-primary hover:underline">
                        Edit
                    </button>

                    <div x-show="editField === 'email'" class="flex gap-2">
                        <button @click="editField = null"
                            class="px-3 py-1 bg-primary text-white text-sm rounded-md hover:bg-primary/90">
                            Save
                        </button>
                        <button @click="editField = null"
                            class="px-3 py-1 bg-midGray/20 text-secondary text-sm rounded-md hover:bg-midGray/30">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

            <hr class="border-midGray/30" />

            <!-- PASSWORD -->
            <div x-data="{ showPassword: false }"
                class="flex flex-col space-y-2 md:flex-row justify-between items-start md:items-centerr">
                <div>
                    <p class="text-sm text-gray-500">Password</p>

                    <p x-show="editField !== 'password'" class="text-secondary font-medium">••••••••</p>

                    <!-- Password Input -->
                    <div x-show="editField === 'password'" class="relative">
                        <input :type="showPassword ? 'text' : 'password'" value="12345678"
                            class="mt-1 w-full border border-midGray rounded-md px-3 py-2 shadow-sm
                                   focus:ring-2 focus:ring-primary focus:border-transparent text-secondary pr-10" />

                        <button type="button" @click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-gray-700">
                            <i x-show="!showPassword" class="fa fa-eye"></i>
                            <i x-show="showPassword" class="fa fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div>
                    <button x-show="editField !== 'password'" @click="editField = 'password'"
                        class="text-sm text-primary hover:underline">
                        Edit
                    </button>

                    <div x-show="editField === 'password'" class="flex gap-2">
                        <button @click="editField = null"
                            class="px-3 py-1 bg-primary text-white text-sm rounded-md hover:bg-primary/90">
                            Save
                        </button>
                        <button @click="editField = null"
                            class="px-3 py-1 bg-midGray/20 text-secondary text-sm rounded-md hover:bg-midGray/30">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Forgot Password -->
        <div class="flex items-center justify-start mt-5 px-1">
            <button type="button" id="forgotPasswordBtn" class="text-primary hover:underline font-medium">
                Forgot Password?
            </button>
        </div>
    </div>
</section>

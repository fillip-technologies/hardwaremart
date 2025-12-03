<div class="flex items-center justify-center min-h-screen bg-secondary px-6 bg-cover bg-center">

    <!-- Glass Card -->
    <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl p-8">

        <!-- Title -->
        <h2 class="text-3xl font-semibold text-center text-white mb-6 tracking-wide">
            Hey User
        </h2>

        <!-- Form -->
        <form class="space-y-5">

            <!-- Name -->
            <div>
                <label class="block text-gray-200 text-sm mb-2">Username</label>
                <input type="text" placeholder="Enter your name" maxlength="255" name="name" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-primary focus:outline-none" />
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-200 text-sm mb-2">Email Address</label>
                <input type="email" placeholder="Enter your email" maxlength="255" name="email" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-primary focus:outline-none" />
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-200 text-sm mb-2">Password</label>
                <input type="password" placeholder="Enter your password" maxlength="255" name="password" required
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-primary focus:outline-none" />
            </div>



            <!-- Login Button -->
            <button type="button" onclick="window.location.href='/'"
                class="block text-center w-full py-2 px-4 bg-primary text-white font-medium rounded-full shadow-lg hover:bg-primary/90 transition duration-300">
                Register
            </button>

        </form>

        <!-- Register -->
        <p class="text-center text-sm text-gray-300 mt-6">
            Already have an account?
            <a href="/" class="text-primary hover:underline">Login</a>
        </p>

    </div>
</div>

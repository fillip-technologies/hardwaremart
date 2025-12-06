<div class="flex items-center justify-center min-h-screen bg-secondary px-6 bg-cover bg-center">

    <!-- Glass Card -->
    <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl p-8">

        <!-- Title -->
        <h2 class="text-3xl font-semibold text-center text-white mb-6 tracking-wide">
            Welcome Back
        </h2>

        <!-- Form -->
        <form class="space-y-5">

            <!-- Email -->
            <div>
                <label class="block text-gray-200 text-sm mb-2">Email Address</label>
                <input type="email" placeholder="Enter your email" maxlength="255" name="email"
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-primary focus:outline-none" />
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-200 text-sm mb-2">Password</label>
                <input type="password" placeholder="Enter your password" maxlength="255" name="password"
                    class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-primary focus:outline-none" />
            </div>

            <!-- Remember & Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" required checked
                        class="rounded bg-transparent border-white/40  text-primary focus:ring-primary" />
                    <span class="text-gray-200 text-xs md:text-sm">Remember me</span>
                </label>
                <button type="button" id="forgotPasswordBtn" class="text-xs md:text-sm text-primary hover:underline">
                    Forgot Password?
                </button>
            </div>

            <!-- Login Button -->
            <button type="button" onclick="window.location.href='/account-overview'"
                class="block text-center w-full py-2 px-4 bg-primary text-white font-medium rounded-full shadow-lg hover:bg-primary/90 transition duration-300">
                Login
            </button>

        </form>

        <!-- Register -->
        <p class="text-center text-sm text-gray-300 mt-6">
            Don’t have an account?
            <a href="/register" class="text-primary hover:underline">Register</a>
        </p>

    </div>
</div>

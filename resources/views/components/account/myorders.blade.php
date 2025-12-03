<section id="ordersSection" class="bg-lightGray py-12 px-4">
    <div class="max-w-6xl mx-auto">

        <h2 class="text-2xl font-semibold text-secondary mb-6">My Orders</h2>

        <!-- Orders Table -->
        <div class="bg-white rounded-2xl shadow-lg border border-midGray/40 overflow-hidden">
            <table class="w-full text-sm text-gray-700">

                <!-- TABLE HEADER -->
                <thead class="bg-secondary/90 text-lightGray">
                    <tr>
                        <th class="px-6 py-4 text-left font-medium">Order ID</th>
                        <th class="px-6 py-4 text-left font-medium">Product</th>
                        <th class="px-6 py-4 text-left font-medium">Date</th>
                        <th class="px-6 py-4 text-left font-medium">Status</th>
                        <th class="px-6 py-4 text-right font-medium">Total</th>
                        <th class="px-6 py-4 text-right font-medium">Action</th>
                    </tr>
                </thead>

                <!-- TABLE BODY -->
                <tbody class="divide-y divide-gray-200">

                    <!-- Order Row -->
                    <tr class="hover:bg-lightGray/50 transition">
                        <td class="px-6 py-4 font-semibold text-secondary/80">#12345</td>
                        <td class="px-6 py-4">A4 Size Paper</td>
                        <td class="px-6 py-4">Jan 10, 2025</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-success/10 text-success">
                                Delivered
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right font-bold text-secondary/90">₹1,20,000</td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="text-primary hover:underline text-sm contact-support">
                                Contact Support
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-lightGray/50 transition">
                        <td class="px-6 py-4 font-semibold text-secondary/80">#12344</td>
                        <td class="px-6 py-4">Multi Wrench</td>
                        <td class="px-6 py-4">Dec 28, 2024</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-600">
                                Shipped
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right font-bold text-secondary/90">₹85,000</td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="text-primary hover:underline text-sm contact-support">
                                Contact Support
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-lightGray/50 transition">
                        <td class="px-6 py-4 font-semibold text-secondary/80">#12343</td>
                        <td class="px-6 py-4">CP Plus Camera</td>
                        <td class="px-6 py-4">Dec 20, 2024</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-primary/10 text-primary">
                                Processing
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right font-bold text-secondary/90">₹65,000</td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="text-primary hover:underline text-sm contact-support">
                                Contact Support
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Cancel Orders Link -->
    <div class="text-right mt-4">
        <a href="/cancel" class="text-sm text-primary hover:underline font-medium">
            Cancel Orders →
        </a>
    </div>
</section>


<!-- CHAT BOX -->
<div id="chatBox" class="hidden px-4">
    <div class="max-w-6xl mx-auto">

        <div
            class="bg-white rounded-2xl border border-midGray/40 shadow-lg w-full mx-auto overflow-hidden h-[600px] flex flex-col">

            <!-- HEADER -->
            <div class="bg-secondary text-lightGray p-4 flex items-center justify-between">
                <div>
                    <h3 class="font-semibold text-sm">Support Team</h3>
                    <p class="text-xs text-midGray">Available 24/7</p>
                </div>
                <button id="closeBtn"
                    class="w-8 h-8 rounded-full hover:bg-primary hover:text-white text-primary flex items-center justify-center transition">
                    ✕
                </button>
            </div>

            <!-- CHAT MESSAGES -->
            <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-lightGray">

                <div class="flex justify-start">
                    <div class="bg-white text-secondary rounded-2xl rounded-bl-md shadow px-3 py-2 max-w-[80%] text-sm">
                        <p>Hello! How can I assist you today?</p>
                        <p class="text-xs mt-1 text-gray-500">12:00</p>
                    </div>
                </div>

                <div class="flex justify-end">
                    <div class="bg-primary text-white rounded-2xl rounded-br-md px-3 py-2 max-w-[80%] text-sm">
                        <p>Hi there!</p>
                        <p class="text-xs mt-1 text-gray-100">12:01</p>
                    </div>
                </div>

            </div>

            <!-- INPUT -->
            <div class="p-4 bg-white border-t border-midGray/40 shrink-0">
                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Type a message..."
                        class="flex-1 px-3 py-2 border border-midGray rounded-full 
                               focus:outline-none focus:ring-2 focus:ring-primary text-sm" />
                    <button
                        class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center hover:bg-primary/90 transition">
                        ➤
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const chatBox = document.getElementById("chatBox");
        const ordersSection = document.getElementById("ordersSection");
        const contactLinks = document.querySelectorAll("a.contact-support");
        const closeBtn = document.getElementById("closeBtn");

        contactLinks.forEach(link => {
            link.addEventListener("click", (e) => {
                e.preventDefault();
                ordersSection.classList.add("hidden");
                chatBox.classList.remove("hidden");
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });

        closeBtn.addEventListener("click", () => {
            chatBox.classList.add("hidden");
            ordersSection.classList.remove("hidden");
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>

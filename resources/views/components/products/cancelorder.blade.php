<section id="cancelOrderSection" class="bg-gray-50 py-12 px-4 min-h-screen">
  <div class="max-w-6xl mx-auto">
    <div class="flex items-center justify-between mb-8">
      <h2 class="text-3xl text-primary">Cancel Orders</h2>
      {{-- <p class="text-sm text-gray-500">View and manage your recent orders below</p> --}}
    </div>

    <!-- Table Container with Horizontal Scroll -->
    <div class="bg-white rounded-2xl shadow-md border border-gray-200 overflow-hidden">
      <div class="overflow-x-auto w-full">
        <table class="min-w-full text-sm text-gray-700">
          <thead class="bg-primary text-white">
            <tr>
              <th class="px-6 py-4 text-left font-medium whitespace-nowrap">Order ID</th>
              <th class="px-6 py-4 text-left font-medium whitespace-nowrap">Product</th>
              <th class="px-6 py-4 text-left font-medium whitespace-nowrap">Date</th>
              <th class="px-6 py-4 text-left font-medium whitespace-nowrap">Status</th>
              <th class="px-6 py-4 text-right font-medium whitespace-nowrap">Amount</th>
              <th class="px-6 py-4 text-right font-medium whitespace-nowrap"></th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100">
            <!-- Shipped Order -->
            <tr class="hover:bg-gray-50 transition-all">
              <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">#12344</td>
              <td class="px-6 py-4 whitespace-nowrap">Plastic Camera</td>
              <td class="px-6 py-4 whitespace-nowrap">Dec 28, 2024</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700">
                  Shipped
                </span>
              </td>
              <td class="px-6 py-4 text-right font-semibold whitespace-nowrap">₹85,000</td>
              <td class="px-6 py-4 text-right space-x-3 whitespace-nowrap">
                <button
                  class="text-sm bg-red-100 text-red-600 px-3 py-1 rounded-full hover:bg-red-200 transition">
                  Canceld Order
                </button>
              </td>
            </tr>

            <!-- Processing Order -->
            <tr class="hover:bg-gray-50 transition-all">
              <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">#12343</td>
              <td class="px-6 py-4 whitespace-nowrap">HiTech LED</td>
              <td class="px-6 py-4 whitespace-nowrap">Dec 20, 2024</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">
                  Processing
                </span>
              </td>
              <td class="px-6 py-4 text-right font-semibold whitespace-nowrap">₹65,000</td>
              <td class="px-6 py-4 text-right space-x-3 whitespace-nowrap">
                <button
                  class="text-sm bg-red-100 text-red-600 px-3 py-1 rounded-full hover:bg-red-200 transition">
                  Canceld Order
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Info Note -->
    <div class="mt-6 text-center text-gray-500 text-sm">
      <p>Orders once shipped may not be cancellable. Please contact support for assistance.</p>
    </div>
  </div>
</section>

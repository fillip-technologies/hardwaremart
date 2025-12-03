 <div class="relative w-full">
     <div class="flex items-center w-full rounded-full bg-white shadow-sm overflow-hidden">

         <input id="searchInput" type="text" placeholder='Search "Camera"'
             class="flex-1 px-4 py-2.5 text-sm text-black bg-transparent
          border-r-0 rounded-l-full focus:outline-none" />


         <button
             class="px-5 py-2.5 bg-primary text-white flex items-center justify-center
            border-l-0 rounded-r-full hover:bg-red-700 transition">
             <i class="fas fa-search text-sm"></i>
         </button>
     </div>



     <!-- Dropdown -->
     <div id="searchDropdown"
         class="absolute left-0 w-full  top-full bg-white border border-midGray shadow-lg mt-1 hidden z-50">

         <div class="grid grid-cols-2 gap-4 p-4">
             <!-- Suggestions -->
             <div>
                 <h3 class="text-secondary text-sm mb-2">Suggestions</h3>
                 <ul class="space-y-2 text-gray-700 text-sm">
                     <li class="hover:text-primary cursor-pointer">CCTV Camera</li>
                     <li class="hover:text-primary cursor-pointer">Wireless Router</li>
                     <li class="hover:text-primary cursor-pointer">Biometric Machine</li>
                     <li class="hover:text-primary cursor-pointer">Attendance System</li>
                     <li class="hover:text-primary cursor-pointer">Fingerprint Scanner</li>
                     <li class="hover:text-primary cursor-pointer">Barcode Printer</li>
                     <li class="hover:text-primary cursor-pointer">Door Access Control</li>
                 </ul>
             </div>

             <!-- Products -->
             <div>
                 <h3 class="text-secondary text-sm mb-2">Products</h3>
                 <ul class="space-y-4 text-sm">

                     <li class="flex space-x-3 items-start">
                         <img src="https://images.unsplash.com/photo-1587820290613-9c9235d09f1d?w=600&q=60"
                             class="w-10 h-10 object-contain" />
                         <div>
                             <p>HD Night Vision CCTV Camera</p>
                             <p class="text-primary font-semibold">₹1,899
                                 <span class="line-through text-gray-700 text-xs">₹2,499</span>
                             </p>
                         </div>
                     </li>

                     <li class="flex space-x-3 items-start">
                         <img src="https://images.unsplash.com/photo-1587202372775-98903b7d7a2d?w=600&q=60"
                             class="w-10 h-10 object-contain" />
                         <div>
                             <p>Dual Band High-Speed WiFi Router</p>
                             <p class="text-primary font-semibold">₹2,299
                                 <span class="line-through text-gray-700 text-xs">₹3,199</span>
                             </p>
                         </div>
                     </li>

                     <li class="flex space-x-3 items-start">
                         <img src="https://images.unsplash.com/photo-1606813903278-4f04d75beedb?w=600&q=60"
                             class="w-10 h-10 object-contain" />
                         <div>
                             <p>Biometric Attendance Machine</p>
                             <p class="text-primary font-semibold">₹4,499
                                 <span class="line-through text-gray-700 text-xs">₹5,999</span>
                             </p>
                         </div>
                     </li>

                 </ul>
             </div>

         </div>


         <div class="border-t px-4 py-2 text-sm text-charcoal flex justify-between items-center">
             <span>Search for “<span id="searchText"></span>”</span>
             <i class="fa fa-long-arrow-right cursor-pointer" aria-hidden="true"></i>
         </div>
     </div>
 </div>


 <script>
     const input = document.getElementById("searchInput");
     const dropdown = document.getElementById("searchDropdown");
     const searchText = document.getElementById("searchText");

     input.addEventListener("input", () => {
         if (input.value.trim() !== "") {
             dropdown.classList.remove("hidden");
             searchText.textContent = input.value;
         } else {
             dropdown.classList.add("hidden");
         }
     });
 </script>

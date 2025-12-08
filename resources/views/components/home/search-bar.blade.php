 <div class="relative w-full">
     <div class="hidden sm:flex items-center w-full rounded-full border-2 border-secondary  shadow-sm overflow-hidden">
         <input id="searchInputDesktop" type="text" placeholder='Search "Camera"'
             class="flex-1 px-4 py-2.5 text-sm text-black bg-white
          border-r-0 rounded-l-full focus:outline-none" />

         <button
             class="px-5 pl-5 py-2.5 bg-primary text-primary sm:text-white flex items-center justify-center sm:bg-primary bg-white 
            border-l-0 rounded-r-full hover:bg-red-700 transition">
             <i class="fas fa-search text-sm"></i>
         </button>
     </div>

     <div
         class="sm:hidden flex border border-secondary/90 rounded-full px-3 py-2 items-center shadow-sm hover:shadow-md transition">
         <input id="searchInputMobile" type="text" placeholder='Search "Camera"'
             class="flex-1 text-sm focus:outline-none bg-transparent" />
         <button class="text-primary hover:text-primary/90 transition">
             <i class="fas fa-search"></i>
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
                         <img src="https://i.gadgets360cdn.com/products/night-vision-hd-cctv-security-camera-large-80299-133853-1584890434.jpg"
                             class="w-10 h-10 object-contain" />
                         <div>
                             <p>HD Night Vision CCTV Camera</p>
                             <p class="text-primary font-semibold">₹1,899
                                 <span class="line-through text-gray-700 text-xs">₹2,499</span>
                             </p>
                         </div>
                     </li>

                     <li class="flex space-x-3 items-start">
                         <img src="https://m.media-amazon.com/images/I/51CVkkeN2yL.jpg"
                             class="w-10 h-10 object-contain" />
                         <div>
                             <p>Dual Band High-Speed WiFi Router</p>
                             <p class="text-primary font-semibold">₹2,299
                                 <span class="line-through text-gray-700 text-xs">₹3,199</span>
                             </p>
                         </div>
                     </li>

                     <li class="flex space-x-3 items-start">
                         <img src="https://www.secureye.com/uploads/product/1727952810_b2283b896784c5a82c3d.jpg"
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


 {{-- <script>
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
 </script> --}}

 <script>
     const inputDesktop = document.getElementById("searchInputDesktop");
     const inputMobile = document.getElementById("searchInputMobile");
     const dropdown = document.getElementById("searchDropdown");
     const searchText = document.getElementById("searchText");

     function handleInput(inputElement) {
         if (!inputElement) return;

         inputElement.addEventListener("input", () => {
             if (inputElement.value.trim() !== "") {
                 dropdown.classList.remove("hidden");
                 searchText.textContent = inputElement.value;
             } else {
                 dropdown.classList.add("hidden");
             }
         });
     }

     // Attach listeners to both inputs
     handleInput(inputDesktop);
     handleInput(inputMobile);
 </script>

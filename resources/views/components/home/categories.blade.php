<div class="w-full bg-white shadow-sm py-3 overflow-x-auto scrollbar-hide">

    <div
        class="flex justify-start md:justify-center space-x-6 md:space-x-10 px-4 min-w-max text-secondary text-sm md:text-base font-light">

        <!-- Electrical & Appliances -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/one.webp" alt="Electrical" class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Electrical & Appliances</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">LED Bulbs & Tube Lights</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Switches & Sockets</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Fans & Air Coolers</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Home Appliances</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Extension Boards</a>
            </div>
        </div>

        <!-- Industrial Tools -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/two.webp" alt="Tools" class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Industrial Tools</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Power Drills</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Welding Machines</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Hand Tools</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Air Compressors</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Cutting & Grinding Tools</a>
            </div>
        </div>

        <!-- Office Supplies -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/three.webp" alt="Office" class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Office Supplies</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Printer & Ink Cartridges</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Notebooks & Registers</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Pens & Stationery</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">File Folders</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Office Electronics</a>
            </div>
        </div>

        <!-- Medical & Lab Supplies -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/four.webp" alt="Medical" class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Medical & Lab Supplies</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Gloves & Masks</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">First Aid Items</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Diagnostic Kits</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Lab Instruments</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Medical Consumables</a>
            </div>
        </div>

        <!-- Agri & Gardening -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/five.webp" alt="Agri" class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Agri & Gardening</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Seeds & Fertilizers</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Garden Tools</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Plant Pots & Grow Bags</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Pesticides</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Irrigation Equipment</a>
            </div>
        </div>

        <!-- Safety & Supplies -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/six.webp" alt="Safety" class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Safety & Supplies</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Safety Helmets</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Safety Shoes</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Reflective Jackets</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Fire Safety Equipment</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Safety Gloves</a>
            </div>
        </div>

        <!-- Construction Materials -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/seven.webp" alt="Construction"
                    class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Construction Materials</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Cement & Bricks</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Tiles & Flooring</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Pipes & Fittings</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Steel Rods</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Paints & Hardware</a>
            </div>
        </div>

        <!-- Automotive -->
        <div x-data="{ open: false }" class="relative">
            <div @click.prevent="open = !open" class="cursor-pointer flex flex-col items-center">
                <img src="/images/categories/eight.webp" alt="Automotive"
                    class="w-8 h-8 object-cover rounded-full mb-1">
                <div class="flex items-center space-x-1 hover:text-primary">
                    <span class="text-sm">Automotive</span>
                </div>
            </div>

            <div x-show="open" @click.away="open = false" x-transition x-cloak
                class="text-sm font-medium text-gray-700 absolute top-full left-0 mt-2 w-52 bg-white shadow-lg border rounded z-20">
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Engine Oils</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Car Accessories</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Bike Accessories</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Tyres & Tubes</a>
                <a href="#" class="block px-4 py-2 hover:bg-midGray">Car Cleaning Supplies</a>
            </div>
        </div>



    </div>
</div>

<style>
    [x-cloak] {
        display: none !important;
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

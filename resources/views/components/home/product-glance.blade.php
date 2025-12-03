@php
    $categories = [
        'Electrical & Appliances' => [
            'Polycab Wires',
            'LED Bulbs',
            'GM Switches',
            'Exide Batteries',
            'Anchor Switches',
            'MCB Distribution Boards',
            'Micro Drives',
        ],

        'Industrial Tools' => [
            'Power Tool Kits',
            'Makita Drills',
            'Dewalt Angle Grinders',
            'Stanley Power Tools',
            'Bosch Cutting Machines',
            'Cordless Power Tools',
        ],

        'Office Supplies' => [
            'Laptops',
            'Toner Cartridges',
            'Shredders',
            'Lamination Machines',
            'Canon Printers',
            'Lenovo Laptops',
            'Casio Calculators',
            'JK Papers',
        ],

        'Medical & Lab Supplies' => [
            'Stethoscopes',
            'Thermometers',
            'Weighing Scales',
            'Hot Water Bottles',
            'First Aid Kits',
            'Support Belts',
            'Lab Coats',
        ],

        'Agri & Gardening' => [
            'Garden Tools',
            'Water Sprayers',
            'Fertilizers',
            'Plastic Pots',
            'Hedge Cutters',
            'Soil Moisture Meters',
        ],

        'Safety & Supplies' => [
            'Safety Jackets',
            'Respiratory Masks',
            'Hearing Protection',
            '3M Safety Goggles',
            'Helmets',
            'Safety Shoes',
            'Safety Gloves',
        ],

        'Construction Materials' => [
            'Cement',
            'TMT Bars',
            'Bricks',
            'Plywood Sheets',
            'PVC Pipes',
            'Ceiling Boards',
            'Wall Putty',
        ],
        'Automotive' => ['Car Pressure Washer', 'Motorcycle Helmet'],
    ];
@endphp


<section class="py-12 bg-white">
    <div class="w-full mx-auto px-6">

        <!-- HEADER -->
        <h2 class=" font-bold text-sm text-secondary mb-8">
            Popular searches on HardwareMart
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-16">

            @foreach ($categories as $categoryName => $products)
                <div>
                    <h3 class="inline-block bg-gray-200 text-gray-800 text-xs font-semibold px-3 py-1 rounded">
                        {{ strtoupper($categoryName) }}:
                    </h3>

                    <div class="mt-3 flex flex-wrap items-center gap-1 text-xs text-gray-600">
                        @foreach ($products as $product)
                            <a href="#" class="hover:text-primary">{{ $product }}</a>
                            @if (!$loop->last)
                                |
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>

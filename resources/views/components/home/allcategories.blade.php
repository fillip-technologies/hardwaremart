@php
    $categories = [
        /* 1. Electrical & Appliances */
        [
            'title' => 'Electrical & Appliances',
            'viewAll' => '/category/electrical-appliances',
            'brands' => [
                '/images/brand/br1.webp',
                '/images/brand/br2.webp',
                '/images/brand/br3.webp',
                '/images/brand/br4.webp',
            ],
            'products' => [
                [
                    'title' => 'Bosch Heavy Duty Drill Machine',
                    'image' =>
                        'https://www.bosch-pt.co.in/in/en/ocsmedia/260214-54/application-image/full/drill-gbm-13-re-06014775f0.png',
                    'price' => 3499,
                    'oldPrice' => 4299,
                    'discount' => 20,
                    'description' => '500W Motor | 6 Months Warranty',
                    'isWishlisted' => 'true',
                ],
                [
                    'title' => 'Philips LED Bulb Pack (9W)',
                    'image' =>
                        'https://www.bbassets.com/media/uploads/p/l/40212205_1-philips-ace-saver-led-bulb-9w-b22-warm-whitegolden-yellow.jpg',
                    'price' => 499,
                    'oldPrice' => 699,
                    'discount' => 28,
                    'description' => 'Long Life Energy Saving Bulbs',
                    'isWishlisted' => 'true',
                ],
                [
                    'title' => 'Havells Ceiling Fan 1200mm',
                    'image' => 'https://m.media-amazon.com/images/I/513I-old+qL.jpg',
                    'price' => 2499,
                    'oldPrice' => 2899,
                    'discount' => 14,
                    'description' => 'High Airflow | 2-Year Warranty',
                ],
                [
                    'title' => 'V-Guard Voltage Stabilizer',
                    'image' => 'https://img-prd-pim.poorvika.com/product/V-Guard-Mini-Crystal-Voltage-Stabilizer-1.png',
                    'price' => 1599,
                    'oldPrice' => 1999,
                    'discount' => 20,
                    'description' => 'Ideal for TVs and Refrigerators',
                    'isWishlisted' => 'true',
                ],
                [
                    'title' => 'Orient Electric Air Cooler',
                    'image' => 'https://orientelectric.com/cdn/shop/files/50.png?v=1742984515&width=1946',
                    'price' => 5999,
                    'oldPrice' => 6999,
                    'discount' => 14,
                    'description' => 'Honeycomb Pads | High Cooling',
                    'isWishlisted' => 'true',
                ],
            ],
        ],

        /* 2. Industrial Tools */
        [
            'title' => 'Industrial Tools',
            'viewAll' => '/category/industrial-tools',
            'brands' => ['/images/brand/br1.webp', '/images/brand/br4.webp'],
            'products' => [
                [
                    'title' => 'Industrial Impact Wrench',
                    'image' =>
                        'https://content.misumi-ec.com/image/upload/t_product_main/v1/p/jp/product/series/223005121927/223005121927_001.jpg',
                    'price' => 7999,
                    'oldPrice' => 8999,
                    'discount' => 11,
                    'description' => 'Heavy Duty | Stainless Steel',
                    'isWishlisted' => 'true',
                ],
                [
                    'title' => 'Angle Grinder Machine',
                    'image' => 'https://images.toolworld.in/product/GWS600-1.jpg',
                    'price' => 3499,
                    'oldPrice' => 3999,
                    'discount' => 12,
                    'description' => 'High Speed Cutting & Grinding',
                ],
            ],
        ],

        /* 3. Office Supplies */
        [
            'title' => 'Office Supplies',
            'viewAll' => '/category/office-supplies',
            'brands' => ['/images/brand/br3.webp', '/images/brand/br4.webp'],
            'products' => [
                [
                    'title' => 'A4 Paper 75 GSM (500 Sheets)',
                    'image' => 'https://cdn.moglix.com/p/F8nLWN92udBMS-xxlarge.jpg',
                    'price' => 349,
                    'oldPrice' => 499,
                    'discount' => 30,
                    'description' => 'Perfect for Printing & Copying',
                ],
                [
                    'title' => 'Premium Gel Pen Set (Pack of 10)',
                    'image' =>
                        'https://static1.industrybuying.com/products/office-supplies/pens-pencils-markers/ball-pens/ITE.PEN.71949994_1691052368187.webp',
                    'price' => 149,
                    'oldPrice' => 199,
                    'discount' => 25,
                    'description' => 'Smooth Writing | Quick Dry Ink',
                ],
            ],
        ],

        /* 4. Medical & Lab Supplies */
        [
            'title' => 'Medical & Lab Supplies',
            'viewAll' => '/category/medical-lab',
            'brands' => ['/images/brand/br1.webp', '/images/brand/br4.webp'],
            'products' => [
                [
                    'title' => 'Digital Thermometer',
                    'image' => 'https://trigofit.in/wp-content/uploads/2025/07/Digital-ai.jpg',
                    'price' => 199,
                    'oldPrice' => 299,
                    'discount' => 33,
                    'description' => 'Accurate & Fast Readings',
                    'isWishlisted' => 'true',
                ],
                [
                    'title' => 'N95 Protective Face Mask (Pack of 5)',
                    'image' =>
                        'https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/d/b/dbe8bc3NYKAD00000003_6.jpg?rnd=20200526195200&tr=w-512',
                    'price' => 249,
                    'oldPrice' => 399,
                    'discount' => 37,
                    'description' => '5-Layer Filtration Technology',
                ],
            ],
        ],

        /* 5. Agri & Gardening */
        [
            'title' => 'Agri & Gardening',
            'viewAll' => '/category/agri-gardening',
            'brands' => ['/images/brand/br1.webp', '/images/brand/br2.webp', '/images/brand/br3.webp'],
            'products' => [
                [
                    'title' => 'Garden Water Spray Bottle',
                    'image' =>
                        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYOx7uDjD9AanQyc2ut2owG4h83LCcb1BloA&s',
                    'price' => 149,
                    'oldPrice' => 199,
                    'discount' => 25,
                    'description' => 'Adjustable Nozzle | 1L Bottle',
                ],
                [
                    'title' => 'Agricultural Hand Cultivator',
                    'image' =>
                        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsltPlyCf_zj5I63yBCaEv967QxT0VSa1oTg&s',
                    'price' => 499,
                    'oldPrice' => 699,
                    'discount' => 28,
                    'description' => 'Durable Steel Build',
                ],
            ],
        ],

        /* 6. Safety & Supplies */
        [
            'title' => 'Safety & Supplies',
            'viewAll' => '/category/safety-supplies',
            'brands' => [
                '/images/brand/br1.webp',
                '/images/brand/br2.webp',
                '/images/brand/br3.webp',
                '/images/brand/br4.webp',
            ],
            'products' => [
                [
                    'title' => 'Safety Helmet (ISI Certified)',
                    'image' =>
                        'https://www.jiomart.com/images/product/original/rvzvizbebj/shreearc-isi-certified-industrial-and-construction-head-protection-with-adjustable-chin-strap-safety-helmet-for-men-product-images-orvzvizbebj-p602018745-0-202305310921.png?im=Resize=(420,420)',
                    'price' => 399,
                    'oldPrice' => 549,
                    'discount' => 27,
                    'description' => 'Impact Resistant Build',
                    'isWishlisted' => 'true',
                ],
                [
                    'title' => 'Industrial Safety Gloves',
                    'image' => 'https://www.robustt.in/cdn/shop/files/71CeJcnzSLL._SL1500_large.jpg?v=1689594659',
                    'price' => 199,
                    'oldPrice' => 299,
                    'discount' => 33,
                    'description' => 'Heat & Cut Resistant',
                    'isWishlisted' => 'true',
                ],
            ],
        ],

        /* 7. Construction Materials */
        [
            'title' => 'Construction Materials',
            'viewAll' => '/category/construction-materials',
            'brands' => [
                '/images/brand/br1.webp',
                '/images/brand/br2.webp',
                '/images/brand/br3.webp',
                '/images/brand/br4.webp',
            ],
            'products' => [
                [
                    'title' => 'Premium Cement 50KG Bag',
                    'image' =>
                        'https://5.imimg.com/data5/SELLER/Default/2024/12/476767412/SS/OW/AO/238417237/ultratech-premium-cement-500x500.png',
                    'price' => 389,
                    'oldPrice' => 449,
                    'discount' => 13,
                    'description' => 'High Strength | Fast Setting',
                    'isWishlisted' => 'true',
                ],
                [
                    'title' => 'TMT Steel Rod (10mm)',
                    'image' => 'https://cpimg.tistatic.com/10975986/b/4/10mm-Mild-Steel-TMT-Bar..jpg',
                    'price' => 599,
                    'oldPrice' => 699,
                    'discount' => 14,
                    'description' => 'Corrosion Resistant Build',
                ],
            ],
        ],

        /* 8. Automotive */
        [
            'title' => 'Automotive',
            'viewAll' => '/category/automotive',
            'brands' => [
                '/images/brand/br1.webp',
                '/images/brand/br2.webp',
                '/images/brand/br3.webp',
                '/images/brand/br4.webp',
            ],
            'products' => [
                [
                    'title' => 'Car Pressure Washer',
                    'image' => 'https://rojgarbox.com/cdn/shop/products/image_580x.jpg?v=1644302347',
                    'price' => 3999,
                    'oldPrice' => 4999,
                    'discount' => 20,
                    'description' => 'High Pressure Cleaning Machine',
                ],
                [
                    'title' => 'Motorcycle Helmet',
                    'image' => 'https://vegaauto.com/wp-content/uploads/2025/06/DIRT-X-BLACK-WEB-1500x1500-PNG-2.png',
                    'price' => 1099,
                    'oldPrice' => 1499,
                    'discount' => 26,
                    'description' => 'ISI Certified | Comfortable Fit',
                    'isWishlisted' => 'true',
                ],
            ],
        ],
    ];
@endphp


@foreach ($categories as $cat)
    <x-products.category-section :isWishlisted="$product['isWishlisted'] ?? false" :title="$cat['title']" :viewAll="$cat['viewAll']" :brands="$cat['brands']"
        :products="$cat['products']" />
@endforeach

<?php

// dummy
$products = [
    [
        'id' => 1,
        'name' => 'Bolu Gulung Keju',
        'description' => 'Lembutnya bolu dengan isian keju premium melimpah.',
        'price' => 50000,
        'image' => 'assets/images/bolugulung/bolukeju.jpeg'
    ],
    [
        'id' => 2,
        'name' => 'Bolu Gulung Cokelat',
        'description' => 'Manisnya cokelat premium dalam gulungan bolu yang empuk.',
        'price' => 50000,
        'image' => 'assets/images/bolugulung/bolucokelat.jpeg'
    ],
    [
        'id' => 3,
        'name' => 'Bolu Gulung Pandan',
        'description' => 'Aroma wangi pandan asli dengan isian krim yang lembut.',
        'price' => 45000,
        'image' => 'assets/images/bolugulung/bolukeju.jpeg'
    ],
    [
        'id' => 4,
        'name' => 'Bolu Gulung Pandan',
        'description' => 'Aroma wangi pandan asli dengan isian krim yang lembut.',
        'price' => 45000,
        'image' => 'assets/images/bolugulung/bolukeju.jpeg'
    ],
    [
        'id' => 5,
        'name' => 'Bolu Gulung Pandan',
        'description' => 'Aroma wangi pandan asli dengan isian krim yang lembut.',
        'price' => 45000,
        'image' => 'assets/images/bolugulung/bolukeju.jpeg'
    ],
    [
        'id' => 6,
        'name' => 'Bolu Gulung Pandan',
        'description' => 'Aroma wangi pandan asli dengan isian krim yang lembut.',
        'price' => 45000,
        'image' => 'assets/images/bolugulung/bolukeju.jpeg'
    ]
];

?>

<div class="my-16">
    <div class="container mx-auto px-5">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-poppins font-bold text-slate-800">Semua Menu Kami</h1>
            <p class="text-2xl text-gray-600 font-lato mt-4 max-w-2xl mx-auto">Temukan semua varian bolu gulung
                premium dari Nambolu. Dibuat dengan cinta dan bahan-bahan terbaik.</p>
        </div>
    </div>
</div>

<section class="bg-slate-100 py-1.5">
    <div class="w-full max-w-4xl mx-auto m-8">
        <div class="flex flex-wrap justify-center gap-6 text-center">
            <a href="#"
                class="bg-rose-800 text-white font-semibold rounded-lg px-10 py-2.5 transition hover:bg-rose-700 border-2">Bolu
                Gulung</a>
            <a href="#"
                class="bg-white text-gray-800 font-medium rounded-lg text-base px-5 py-2.5 transition hover:bg-gray-200 border-2 border-gray-400">Dessert</a>
            <a href="#"
                class="bg-white text-gray-800 font-medium rounded-lg text-base px-5 py-2.5 transition hover:bg-gray-200 border-2 border-gray-400">Donat</a>
            <a href="#"
                class="bg-white text-gray-800 font-medium rounded-lg text-base px-5 py-2.5 transition hover:bg-gray-200 border-2 border-gray-400">Pudding</a>
            <a href="#"
                class="bg-white text-gray-800 font-medium rounded-lg text-base px-5 py-2.5 transition hover:bg-gray-200 border-2 border-gray-400">Slice
                Cake</a>
        </div>
    </div>

    <div class="grid grid-cols-4 gap-8 my-6 mx-10">
        <?php foreach($products as $product): ?>
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-300 group flex flex-col">
            <div class="overflow-hidden">
                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-6 flex-grow flex flex-col text-left">
                <h3 class="text-xl font-poppins font-semibold text-slate-800"><?= htmlspecialchars($product['name']) ?></h3>
                <p class="font-lato text-sm text-gray-500 mt-1"><?= htmlspecialchars($product['description']) ?></p>
                <div class="mt-auto pt-4">
                    <p class="text-lg text-rose-600 font-bold font-poppins mb-3"><?= number_format($product['price'], '0', ',', '.'); ?></p>
                    <a href="bolu-keju.html" class="block text-center w-full bg-slate-800 text-white font-poppins py-2.5 px-4 rounded-lg hover:bg-slate-700 transition-colors duration-300">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</section>

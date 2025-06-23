<?php
require_once "partials/header.php";

// Data dummy produk (path gambar sudah diperbaiki)
$products = [
    [
        'id' => 1,
        'name' => 'Bolu Gulung Keju',
        'description' => 'Lembutnya bolu dengan isian keju premium melimpah.',
        'price' => 50000,
        'image' => '../assets/images/bolugulung/bolukeju.jpeg'
    ],
    [
        'id' => 2,
        'name' => 'Bolu Gulung Cokelat',
        'description' => 'Manisnya cokelat premium dalam gulungan bolu yang empuk.',
        'price' => 50000,
        'image' => '../assets/images/bolugulung/bolu-gulung-cokelat.jpeg'
    ],
    [
        'id' => 3,
        'name' => 'Bolu Gulung Pandan',
        'description' => 'Aroma wangi pandan asli dengan isian krim yang lembut.',
        'price' => 45000,
        'image' => '../assets/images/bolugulung/bolu-gulung-pandan.jpeg'
    ],
    [
        'id' => 4,
        'name' => 'Donat Klasik',
        'description' => 'Donat kentang empuk dengan taburan gula halus.',
        'price' => 8000,
        'image' => '../assets/images/lainnya/donat.jpeg'
    ],
    [
        'id' => 5,
        'name' => 'Pudding Cokelat',
        'description' => 'Pudding sutra rasa cokelat Belgia yang lumer di mulut.',
        'price' => 25000,
        'image' => '../assets/images/lainnya/pudding.jpeg'
    ],
    [
        'id' => 6,
        'name' => 'Red Velvet Slice',
        'description' => 'Potongan kue red velvet dengan lapisan cream cheese frosting.',
        'price' => 35000,
        'image' => '../assets/images/lainnya/slice-cake.jpeg'
    ]
];
?>

<div class="my-16">
    <div class="container mx-auto px-5">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-poppins font-bold text-slate-800">Semua Menu Kami</h1>
            <p class="text-lg md:text-xl text-gray-600 font-lato mt-4 max-w-2xl mx-auto">Temukan semua varian bolu gulung
                premium dari Nambolu. Dibuat dengan cinta dan bahan-bahan terbaik.</p>
        </div>
    </div>
</div>

<section class="bg-slate-50 py-16">
    <div class="w-full max-w-4xl mx-auto px-5 mb-12">
        <div class="flex flex-wrap justify-center gap-4 text-center">
            <a href="#" class="bg-rose-800 text-white font-semibold rounded-lg px-6 py-2.5 transition hover:bg-rose-700 border-2 border-rose-800">Bolu Gulung</a>
            <a href="#" class="bg-white text-gray-800 font-medium rounded-lg px-6 py-2.5 transition hover:bg-gray-100 border-2 border-gray-300">Dessert</a>
            <a href="#" class="bg-white text-gray-800 font-medium rounded-lg px-6 py-2.5 transition hover:bg-gray-100 border-2 border-gray-300">Donat</a>
            <a href="#" class="bg-white text-gray-800 font-medium rounded-lg px-6 py-2.5 transition hover:bg-gray-100 border-2 border-gray-300">Pudding</a>
            <a href="#" class="bg-white text-gray-800 font-medium rounded-lg px-6 py-2.5 transition hover:bg-gray-100 border-2 border-gray-300">Slice Cake</a>
        </div>
    </div>

    <div class="w-full max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php foreach($products as $product): ?>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-300 group flex flex-col">
                <div class="overflow-hidden">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6 flex-grow flex flex-col text-left">
                    <h3 class="text-xl font-poppins font-semibold text-slate-800"><?= htmlspecialchars($product['name']) ?></h3>
                    <p class="font-lato text-sm text-gray-500 mt-1 flex-grow"><?= htmlspecialchars($product['description']) ?></p>
                    <div class="mt-auto pt-4">
                        <p class="text-lg text-rose-600 font-bold font-poppins mb-3">Rp<?= number_format($product['price'], 0, ',', '.') ?></p>
                        <a href="landing-page/<?= strtolower(str_replace(' ', '-', $product['name'])) ?>.php" class="block text-center w-full bg-slate-800 text-white font-poppins py-2.5 px-4 rounded-lg hover:bg-slate-700 transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            
        </div>
    </div>
    </section>

<?php
require_once "partials/footer.php";
?>
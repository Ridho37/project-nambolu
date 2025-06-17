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
        'image' => 'assets/images/bolugulung/bolupandan.jpeg'
    ]
];

?>

<!-- Header bg-[url('assets/images/hero1.png')]-->
<section class="relative bg-[url('assets/images/hero1.png')] bg-cover bg-center min-h-screen flex items-center justify-center">
    <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="relative container mx-auto z-20">
            <div class="text-center align-text-top">
                <h1 class="text-5xl lg:text-6xl font-poppins font-bold text-white leading-tight mb-4">
                    Freshly Baked, <br>Made with Love.
                </h1>
                <p class="text-xl text-gray-200 font-lato mb-8">
                    Nikmati cita rasa bolu gulung terbaik, dibuat dari bahan premium tanpa pengawet.
                </p>
                <a href="#Product" class="bg-rose-800 text-white font-bold font-poppins py-3 px-8 rounded-lg shadow-md hover:bg-rose-600 transition-all duration-300">
                    Lihat Produk
                </a>
            </div>          
        </div>
</section>

<!-- About -->
<section id="About" class="py-24 bg-white">
    <div class="container mx-auto px-5">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            
            <div>
                <img src="assets/images/about.jpg" class="rounded-lg shadow-lg w-full" alt="Dapur Nambolu">
            </div>
            
            <div class="leading-relaxed">
                <h2 class="text-4xl font-poppins font-bold text-slate-800 mb-6">About Nambolu</h2>
                <div class="font-lato text-lg text-gray-700 space-y-4">
                    <p>Nambolu adalah toko kue rumahan yang mengkhususkan diri dalam bolu lembut dan nikmat. Kami menggunakan bahan-bahan berkualitas dan resep pilihan untuk menghasilkan rasa yang autentik, tanpa bahan pengawet.</p>
                    <p>Berawal dari dapur kecil, Nambolu tumbuh berkat dukungan pelanggan yang setia. Karena bagi kami, bolu bukan sekadar kue tapi bagian dari cerita manis dalam hidupmu.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Preview -->
<section id="Product" class="bg-slate-50 py-24">
    <div class="container mx-auto px-5">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-poppins font-bold text-slate-800">Our Best Sellers</h2>
            <p class="text-lg text-gray-600 font-lato mt-2">Pilihan favorit pelanggan kami.</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Mengambil data dummy -->
            <?php foreach ($products as $product): ?>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-300 group flex flex-col">
                <div class="overflow-hidden">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6 flex-grow flex flex-col text-left">
                    <h3 class="text-xl font-poppins font-semibold text-slate-800"><?= htmlspecialchars($product['name']) ?></h3>
                    <p class="font-lato text-sm text-gray-500 mt-1"><?= htmlspecialchars($product['description']) ?></p>
                    <div class="mt-auto pt-4">
                        <p class="text-lg text-rose-600 font-bold font-poppins mb-3"><?= number_format($product['price'], 0, ',', '.') ?></p>
                        <a href="./pages/bolu-keju.html" class="block text-center w-full bg-slate-800 text-white font-poppins py-2.5 px-4 rounded-lg hover:bg-slate-700 transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-16">
            <a href="products-all.php" class="bg-rose-800 text-white font-bold font-poppins py-3 px-8 rounded-lg shadow-md hover:bg-rose-600 transition-all duration-300">Lihat Semua Menu</a>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="Contact" class="bg-white py-24">
    <div class="container mx-auto px-5">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-poppins font-bold text-slate-800">Hubungi Kami</h2>
            <p class="text-lg text-gray-600 font-lato mt-2">Punya pertanyaan atau ingin memesan? Kami siap membantu.</p>
        </div>
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12 items-start">
            <form action="">
                <div class="grid grid-cols-1 gap-6">
                    <input type="text" class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300" placeholder="Nama Anda">
                    <input type="email" class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300" placeholder="Email Anda">
                    <textarea rows="6" class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300" placeholder="Pesan Anda"></textarea>
                </div>
                <button type="button" class="mt-6 w-full text-white bg-slate-800 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg px-8 py-3 text-center transition-all duration-300 shadow-md hover:shadow-lg">Kirim Pesan</button>
            </form>
            <div class="space-y-6">
                <div class="border border-gray-300 mx-auto rounded-lg overflow-hidden h-72 shadow-sm">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.153951593928!2d110.409320814778!3d-7.7735399943969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599a2c358e9b%3A0x2c5a2c358e9b0!2sJl.%20Ring%20Road%20Utara%2C%20Ngringin%2C%20Condongcatur%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sen!2sid!4v1623862334571!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <h3 class="text-xl font-poppins font-semibold text-slate-800">Alamat Kami</h3>
                    <address class="text-gray-600 not-italic mt-1">
                        Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>


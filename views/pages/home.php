<section class="relative bg-[url('/assets/images/hero1.png')] bg-cover bg-center min-h-screen flex items-center justify-center" id="home">
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

<section id="About" class="py-24 bg-white">
    <div class="container mx-auto px-5">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <img src="/assets/images/about.jpg" class="rounded-lg shadow-lg w-full" alt="Dapur Nambolu">
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

<section id="Product" class="bg-slate-50 py-24">
    <div class="container mx-auto px-5">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-poppins font-bold text-slate-800">Our Best Sellers</h2>
            <p class="text-lg text-gray-600 font-lato mt-2">Pilihan favorit pelanggan kami.</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php foreach ($products as $product): ?>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-300 group flex flex-col">
                <div class="overflow-hidden">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-6 flex-grow flex flex-col text-left">
                    <h3 class="text-xl font-poppins font-semibold text-slate-800"><?= htmlspecialchars($product['name']) ?></h3>
                    <p class="font-lato text-sm text-gray-500 mt-1"><?= htmlspecialchars($product['description']) ?></p>
                    <div class="mt-auto pt-4">
                        <p class="text-lg text-rose-600 font-bold font-poppins mb-3">Rp<?= number_format($product['price'], 0, ',', '.') ?></p>
                        <a href="/products/detail?id=<?= $product['id'] ?>" class="block text-center w-full bg-slate-800 text-white font-poppins py-2.5 px-4 rounded-lg hover:bg-slate-700 transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-16">
            <a href="/products" class="bg-rose-800 text-white font-bold font-poppins py-3 px-8 rounded-lg shadow-md hover:bg-rose-600 transition-all duration-300">Lihat Semua Menu</a>
        </div>
    </div>
</section>

<section id="Contact" class="bg-slate-50 py-20">
    <div class="container mx-auto px-5">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-poppins font-bold text-slate-800">Hubungi Kami</h2>
            <p class="text-lg text-gray-600 font-lato mt-2">Punya pertanyaan atau ingin memesan? Kami siap membantu.</p>
        </div>

        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">
            <form action="/contact/submit" method="POST">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Anda</label>
                        <input type="text" id="nama" name="nama" class="bg-white border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300" placeholder="Rendy Wijaya" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Anda</label>
                        <input type="email" id="email" name="email" class="bg-white border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300" placeholder="nama@email.com" required>
                    </div>
                    <div>
                        <label for="pesan" class="block mb-2 text-sm font-medium text-gray-900">Pesan Anda</label>
                        <textarea id="pesan" name="pesan" rows="6" class="bg-white border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300" placeholder="Tuliskan pertanyaan atau pesanan Anda di sini..." required></textarea>
                    </div>
                </div>
                <button type="submit" class="mt-8 w-full text-white bg-rose-800 hover:bg-rose-700 focus:ring-4 focus:outline-none focus:ring-rose-300 font-bold rounded-lg px-8 py-3 text-center transition-all duration-300 shadow-md hover:shadow-lg">
                    Kirim Pesan
                </button>
            </form>

            <div class="space-y-8">
                </div>
        </div>
    </div>
</section>
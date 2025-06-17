<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Promosi - Nambolu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 font-lato">

    <div class="flex min-h-screen" x-data="{ modalOpen: false, modalTitle: 'Buat Promosi Baru' }">
        <aside 
            class="fixed inset-y-0 left-0 z-50 flex-shrink-0 w-64 overflow-y-auto bg-slate-800 text-white transform -translate-x-full lg:relative lg:translate-x-0 transition-transform duration-300 ease-in-out"
            :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }">
            
            <div class="p-6">
                <a href="#" class="flex items-center text-white">
                    <img src="/assets/images/logo.png" class="w-10" alt="Nambolu Logo">
                    <h1 class="text-2xl pl-3 my-auto font-poppins font-bold">Nambolu</h1>
                </a>
            </div>

            <nav class="px-4 text-lg">
                <a href="#" class="flex items-center px-4 py-3 mt-2 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    <span>Dashboard</span>
                </a>
                <a href="dashboard-product.html" class="flex items-center px-4 py-3 mt-2 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    <span>Produk</span>
                </a>
                <a href="dashboard-promosi.html" class="flex items-center px-4 py-3 mt-2 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors duration-200">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V7a2 2 0 00-2-2H5zM5 14a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2H5z"/></svg>
                    <span>Promosi</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 bg-rose-600 text-white rounded-lg font-semibold">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2V7a2 2 0 00-2-2H5zM5 14a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2H5z"/></svg>
                    <span>Kategori</span>
                </a>
                 <a href="dashboard-pengaturan.html" class="flex items-center px-4 py-3 mt-2 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.096 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    <span>Pengaturan</span>
                </a>
            </nav>

            <div class="absolute bottom-0 w-full px-4 mb-4">
                 <a href="#" class="flex items-center px-4 py-3 mt-2 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                    <span>Logout</span>
                </a>
            </div>
        </aside>


        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow-sm p-4 ...">
                <div class="text-2xl font-poppins font-bold text-slate-800">Manajemen Promosi</div>
            </header>

            <main class="flex-1 p-6 lg:p-8">
                <div class="flex flex-col md:flex-row justify-between md:items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-poppins font-bold text-slate-800">Daftar Promosi</h2>
                        <p class="text-gray-600 mt-1">Buat dan kelola kupon diskon untuk meningkatkan penjualan.</p>
                    </div>
                    <button @click="modalOpen = true; modalTitle = 'Buat Promosi Baru'" class="mt-4 md:mt-0 w-full md:w-auto flex items-center justify-center bg-purple-600 text-white font-poppins text-sm font-semibold py-2.5 px-5 rounded-lg hover:bg-purple-700 transition-colors shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                        Buat Promosi Baru
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-md border-l-4 border-green-500 overflow-hidden">
                        <div class="p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="px-3 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">Aktif</span>
                                    <h3 class="text-lg font-poppins font-bold text-slate-800 mt-2">Diskon Spesial Awal Bulan</h3>
                                </div>
                                <div class="font-mono text-lg font-bold text-purple-600 bg-purple-100 px-3 py-1 rounded">HEMAT10</div>
                            </div>
                            <p class="text-2xl font-bold text-slate-800 my-3">10% Diskon</p>
                            <p class="text-sm text-gray-500">Berlaku: 1 Juni 2025 - 30 Juni 2025</p>
                        </div>
                        <div class="bg-slate-50 px-5 py-3 text-right">
                            <a href="#" class="text-blue-600 hover:underline font-semibold">Edit</a>
                            <a href="#" class="ml-4 text-red-600 hover:underline font-semibold">Hapus</a>
                        </div>
                    </div>
                     <div class="bg-white rounded-xl shadow-md border-l-4 border-amber-500 overflow-hidden">
                        <div class="p-5">
                             <div class="flex justify-between items-start">
                                <div>
                                    <span class="px-3 py-1 text-xs font-semibold text-amber-800 bg-amber-100 rounded-full">Dijadwalkan</span>
                                    <h3 class="text-lg font-poppins font-bold text-slate-800 mt-2">Promo Gajian</h3>
                                </div>
                                <div class="font-mono text-lg font-bold text-purple-600 bg-purple-100 px-3 py-1 rounded">GAJIANSERU</div>
                            </div>
                            <p class="text-2xl font-bold text-slate-800 my-3">Potongan Rp 15.000</p>
                            <p class="text-sm text-gray-500">Berlaku: 25 Juni 2025 - 28 Juni 2025</p>
                        </div>
                        <div class="bg-slate-50 px-5 py-3 text-right">
                            <a href="#" class="text-blue-600 hover:underline font-semibold">Edit</a>
                            <a href="#" class="ml-4 text-red-600 hover:underline font-semibold">Hapus</a>
                        </div>
                    </div>
                     <div class="bg-white rounded-xl shadow-md border-l-4 border-slate-400 overflow-hidden opacity-75">
                        <div class="p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="px-3 py-1 text-xs font-semibold text-slate-800 bg-slate-200 rounded-full">Berakhir</span>
                                    <h3 class="text-lg font-poppins font-bold text-slate-800 mt-2">Flash Sale Kilat</h3>
                                </div>
                                <div class="font-mono text-lg font-bold text-purple-600 bg-purple-100 px-3 py-1 rounded">KILAT20</div>
                            </div>
                            <p class="text-2xl font-bold text-slate-800 my-3">20% Diskon</p>
                            <p class="text-sm text-gray-500">Berlaku: 10 Juni 2025 - 12 Juni 2025</p>
                        </div>
                         <div class="bg-slate-50 px-5 py-3 text-right">
                            <a href="#" class="text-blue-600 hover:underline font-semibold">Lihat</a>
                            <a href="#" class="ml-4 text-red-600 hover:underline font-semibold">Hapus</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        
        <div x-show="modalOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" @keydown.escape.window="modalOpen = false">
            <div @click.away="modalOpen = false" class="bg-white rounded-xl shadow-2xl w-full max-w-lg mx-4">
                <div class="flex justify-between items-center p-5 border-b">
                    <h3 class="text-xl font-poppins font-bold text-slate-800" x-text="modalTitle"></h3>
                    <button @click="modalOpen = false" class="text-gray-500 hover:text-gray-800">&times;</button>
                </div>
                <div class="p-6">
                    <form class="space-y-4">
                        <div>
                            <label for="promo_title" class="block text-sm font-medium text-gray-700">Judul Promosi</label>
                            <input type="text" id="promo_title" placeholder="cth: Diskon Awal Bulan" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                        </div>
                         <div>
                            <label for="coupon_code" class="block text-sm font-medium text-gray-700">Kode Kupon</label>
                            <input type="text" id="coupon_code" placeholder="cth: HEMAT10 (tanpa spasi)" class="mt-1 font-mono tracking-widest bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <label for="discount_type" class="block text-sm font-medium text-gray-700">Jenis Diskon</label>
                                <select id="discount_type" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                                    <option>Persentase (%)</option>
                                    <option>Nominal Tetap (Rp)</option>
                                </select>
                            </div>
                             <div class="flex-1">
                                <label for="discount_value" class="block text-sm font-medium text-gray-700">Nilai Diskon</label>
                                <input type="number" id="discount_value" placeholder="cth: 10 atau 15000" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                            </div>
                        </div>
                         <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
                                <input type="date" id="start_date" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                            </div>
                             <div>
                                <label for="end_date" class="block text-sm font-medium text-gray-700">Tanggal Berakhir</tabel>
                                <input type="date" id="end_date" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="px-6 py-4 bg-slate-50 text-right border-t">
                     <button @click="modalOpen = false" type="button" class="text-gray-600 bg-transparent hover:bg-gray-200 rounded-lg px-5 py-2.5">Batal</button>
                    <button type="submit" class="bg-purple-600 text-white font-poppins font-semibold py-2.5 px-5 rounded-lg hover:bg-purple-700 transition-colors shadow-md ml-2">Simpan Promosi</button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
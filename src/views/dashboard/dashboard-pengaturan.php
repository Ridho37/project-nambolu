<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - Nambolu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 font-lato">

    <div class="flex min-h-screen">
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
                <div class="text-2xl font-poppins font-bold text-slate-800">Pengaturan</div>
                </header>

            <main class="flex-1 p-6 lg:p-8" x-data="{ activeTab: 'profil' }">
                <div>
                    <h2 class="text-2xl font-poppins font-bold text-slate-800">Pengaturan Akun dan Toko</h2>
                    <p class="text-gray-600 mt-1">Atur preferensi pribadi dan detail bisnis Anda.</p>
                </div>

                <div class="mt-8 flex flex-col md:flex-row gap-8">
                    <div class="flex-shrink-0 w-full md:w-56">
                        <div class="space-y-2">
                            <button @click="activeTab = 'profil'" :class="{ 'bg-rose-100 text-rose-700 font-semibold border-rose-600': activeTab === 'profil', 'hover:bg-slate-200': activeTab !== 'profil' }" class="w-full flex items-center text-left px-4 py-3 rounded-lg border-l-4 border-transparent transition-colors">
                                Profil Saya
                            </button>
                            <button @click="activeTab = 'toko'" :class="{ 'bg-rose-100 text-rose-700 font-semibold border-rose-600': activeTab === 'toko', 'hover:bg-slate-200': activeTab !== 'toko' }" class="w-full flex items-center text-left px-4 py-3 rounded-lg border-l-4 border-transparent transition-colors">
                                Informasi Toko
                            </button>
                            <button @click="activeTab = 'pembayaran'" :class="{ 'bg-rose-100 text-rose-700 font-semibold border-rose-600': activeTab === 'pembayaran', 'hover:bg-slate-200': activeTab !== 'pembayaran' }" class="w-full flex items-center text-left px-4 py-3 rounded-lg border-l-4 border-transparent transition-colors">
                                Metode Pembayaran
                            </button>
                             <button @click="activeTab = 'staf'" :class="{ 'bg-rose-100 text-rose-700 font-semibold border-rose-600': activeTab === 'staf', 'hover:bg-slate-200': activeTab !== 'staf' }" class="w-full flex items-center text-left px-4 py-3 rounded-lg border-l-4 border-transparent transition-colors">
                                Manajemen Staf
                            </button>
                        </div>
                    </div>

                    <div class="flex-1">
                        <div x-show="activeTab === 'profil'" class="bg-white p-6 rounded-xl shadow-md">
                            <h3 class="text-xl font-poppins font-bold text-slate-800">Profil Saya</h3>
                            <p class="text-sm text-gray-500 mt-1 mb-6">Perbarui informasi dan kata sandi Anda.</p>
                            <form class="space-y-4">
                                <div>
                                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                                    <input type="text" id="nama" value="Afilla Alwy" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                                    <input type="email" id="email" value="admin@nambolu.com" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                                </div>
                                 <div>
                                    <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi Baru</label>
                                    <input type="password" id="password" placeholder="Kosongkan jika tidak ingin mengubah" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="bg-slate-800 text-white font-poppins font-semibold py-2 px-5 rounded-lg hover:bg-slate-700 transition-colors shadow-md">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>

                        <div x-show="activeTab === 'toko'" class="bg-white p-6 rounded-xl shadow-md">
                             <h3 class="text-xl font-poppins font-bold text-slate-800">Informasi Toko</h3>
                             <p class="text-sm text-gray-500 mt-1 mb-6">Detail ini akan ditampilkan di halaman depan dan faktur.</p>
                             <form class="space-y-4">
                                <div>
                                    <label for="nama_toko" class="block text-sm font-medium text-gray-700">Nama Toko</label>
                                    <input type="text" id="nama_toko" value="Nambolu" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                                </div>
                                 <div>
                                    <label class="block text-sm font-medium text-gray-700">Logo Toko</label>
                                    <div class="mt-1 flex items-center space-x-4">
                                        <img src="/assets/images/logo.png" alt="Logo" class="w-16 h-16 rounded-full bg-slate-100 p-1">
                                        <input type="file" class="text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-rose-50 file:text-rose-700 hover:file:bg-rose-100">
                                    </div>
                                </div>
                                <div>
                                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <textarea id="alamat" rows="3" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, DIY 55281</textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="bg-slate-800 text-white font-poppins font-semibold py-2 px-5 rounded-lg hover:bg-slate-700 transition-colors shadow-md">Simpan Perubahan</button>
                                </div>
                             </form>
                        </div>
                        
                        <div x-show="activeTab === 'pembayaran'" class="bg-white p-6 rounded-xl shadow-md">
                             <h3 class="text-xl font-poppins font-bold text-slate-800">Metode Pembayaran</h3>
                             <p class="text-sm text-gray-500 mt-1 mb-6">Aktifkan dan konfigurasikan metode pembayaran untuk pelanggan.</p>
                             <div class="space-y-6">
                                <div class="p-4 border rounded-lg">
                                    <div class="flex justify-between items-center">
                                        <label for="transfer_bank" class="font-semibold text-gray-800">Transfer Bank (BCA)</label>
                                        <label for="transfer_bank" class="flex items-center cursor-pointer">
                                            <div class="relative">
                                                <input type="checkbox" id="transfer_bank" class="sr-only peer" checked>
                                                <div class="block bg-gray-200 w-12 h-7 rounded-full peer-checked:bg-rose-600"></div>
                                                <div class="dot absolute left-1 top-1 bg-white w-5 h-5 rounded-full transition-transform peer-checked:translate-x-full"></div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="mt-4 space-y-3">
                                        <input type="text" placeholder="Nomor Rekening" value="1234567890" class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                                        <input type="text" placeholder="Atas Nama" value="Nambolu Indonesia" class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                                    </div>
                                </div>
                                <div class="p-4 border rounded-lg">
                                    <div class="flex justify-between items-center">
                                        <label for="gopay" class="font-semibold text-gray-800">GoPay / E-Wallet</label>
                                        <label for="gopay" class="flex items-center cursor-pointer">
                                            <div class="relative">
                                                <input type="checkbox" id="gopay" class="sr-only peer">
                                                <div class="block bg-gray-200 w-12 h-7 rounded-full peer-checked:bg-rose-600"></div>
                                                <div class="dot absolute left-1 top-1 bg-white w-5 h-5 rounded-full transition-transform peer-checked:translate-x-full"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                             </div>
                              <div class="text-right mt-6">
                                    <button type="submit" class="bg-slate-800 text-white font-poppins font-semibold py-2 px-5 rounded-lg hover:bg-slate-700 transition-colors shadow-md">Simpan Metode</button>
                                </div>
                        </div>

                         <div x-show="activeTab === 'staf'" class="bg-white p-6 rounded-xl shadow-md">
                             <h3 class="text-xl font-poppins font-bold text-slate-800">Manajemen Staf</h3>
                             <p class="text-sm text-gray-500 mt-1 mb-6">Undang dan kelola akun karyawan yang dapat mengakses dasbor.</p>
                             <table class="w-full text-left">
                                <tbody>
                                    <tr class="border-b">
                                        <td class="p-3">
                                            <div class="font-semibold">Afilla Alwy</div>
                                            <div class="text-sm text-gray-500">admin@nambolu.com</div>
                                        </td>
                                        <td class="p-3 text-gray-600">Admin</td>
                                        <td class="p-3 text-right text-blue-600 font-semibold">Pemilik</td>
                                    </tr>
                                     <tr class="border-b">
                                        <td class="p-3">
                                            <div class="font-semibold">Budi</div>
                                            <div class="text-sm text-gray-500">budi.staff@nambolu.com</div>
                                        </td>
                                        <td class="p-3 text-gray-600">Staf</td>
                                        <td class="p-3 text-right"><a href="#" class="text-red-500 hover:underline">Hapus</a></td>
                                    </tr>
                                </tbody>
                             </table>
                             <div class="text-right mt-6">
                                <button type="button" class="bg-rose-600 text-white font-poppins font-semibold py-2 px-5 rounded-lg hover:bg-rose-700 transition-colors shadow-md">Undang Staf Baru</button>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
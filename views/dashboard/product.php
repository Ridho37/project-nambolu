<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk - Nambolu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 font-lato" x-data="{ sidebarOpen: false }">

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
                <a href="dashboard-page.html" class="flex items-center px-4 py-3 mt-2 text-slate-300 hover:bg-slate-700 rounded-lg transition-colors duration-200">
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
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                 <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-slate-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                </button>
                <div class="hidden lg:block text-2xl font-poppins font-bold text-slate-800">Manajemen Produk</div>
                <div class="flex items-center space-x-4">
                    </div>
            </header>

            <main class="flex-1 p-6 lg:p-8">
                <div class="flex flex-col md:flex-row justify-between md:items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-poppins font-bold text-slate-800">Daftar Produk</h2>
                        <p class="text-gray-600 mt-1">Kelola, tambah, dan atur semua produk Nambolu di sini.</p>
                    </div>
                    <a href="dashboard-addproduct.html" class="mt-4 md:mt-0 w-full md:w-auto flex items-center justify-center bg-slate-800 text-white font-poppins text-sm font-semibold py-2.5 px-5 rounded-lg hover:bg-slate-700 transition-colors shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                        Tambah Produk
                    </a>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <input type="text" placeholder="Cari nama produk..." class="col-span-1 md:col-span-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 transition">
                        <select class="col-span-1 md:col-span-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 transition">
                            <option selected>Semua Kategori</option>
                            <option>Bolu Gulung</option>
                            <option>Kue Kering</option>
                            <option>Roti</option>
                        </select>
                         <select class="col-span-1 md:col-span-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 transition">
                            <option selected>Semua Status Stok</option>
                            <option>Tersedia</option>
                            <option>Stok Rendah</option>
                            <option>Habis</option>
                        </select>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="border-b-2 border-slate-100">
                                <tr>
                                    <th class="p-4 text-sm font-poppins font-semibold text-slate-500">PRODUK</th>
                                    <th class="p-4 text-sm font-poppins font-semibold text-slate-500">HARGA</th>
                                    <th class="p-4 text-sm font-poppins font-semibold text-slate-500">STOK</th>
                                    <th class="p-4 text-sm font-poppins font-semibold text-slate-500">TERAKHIR DIPERBARUI</th>
                                    <th class="p-4 text-sm font-poppins font-semibold text-slate-500">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
                                    <td class="p-4">
                                        <div class="flex items-center">
                                            <img src="../assets/images/bolugulung/bolukeju.jpeg" alt="Bolu Keju" class="w-12 h-12 rounded-md object-cover">
                                            <div class="ml-4">
                                                <div class="font-poppins font-semibold text-slate-800">Bolu Gulung Keju</div>
                                                <div class="text-sm text-slate-500">Bolu Gulung</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 font-semibold text-slate-700">Rp 50.000</td>
                                    <td class="p-4">
                                        <span class="px-3 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">25 Tersedia</span>
                                    </td>
                                    <td class="p-4 text-slate-600">14 Juni 2025</td>
                                    <td class="p-4">
                                        <div class="flex space-x-2">
                                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
                                    <td class="p-4">
                                        <div class="flex items-center">
                                            <img src="../assets/images/bolugulung/bolupandan.jpeg" alt="Bolu Pandan" class="w-12 h-12 rounded-md object-cover">
                                            <div class="ml-4">
                                                <div class="font-poppins font-semibold text-slate-800">Bolu Gulung Pandan</div>
                                                <div class="text-sm text-slate-500">Bolu Gulung</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 font-semibold text-slate-700">Rp 45.000</td>
                                    <td class="p-4">
                                        <span class="px-3 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">8 Stok Rendah</span>
                                    </td>
                                    <td class="p-4 text-slate-600">10 Juni 2025</td>
                                    <td class="p-4">
                                        <div class="flex space-x-2">
                                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                 <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
                                    <td class="p-4">
                                        <div class="flex items-center">
                                            <img src="../assets/images/bolugulung/bolucokelat.jpeg" alt="Bolu Cokelat" class="w-12 h-12 rounded-md object-cover">
                                            <div class="ml-4">
                                                <div class="font-poppins font-semibold text-slate-800">Bolu Gulung Cokelat</div>
                                                <div class="text-sm text-slate-500">Bolu Gulung</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-4 font-semibold text-slate-700">Rp 50.000</td>
                                    <td class="p-4">
                                        <span class="px-3 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">Habis</span>
                                    </td>
                                    <td class="p-4 text-slate-600">1 Juni 2025</td>
                                    <td class="p-4">
                                        <div class="flex space-x-2">
                                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                     <div class="flex justify-between items-center mt-6">
                        <span class="text-sm text-gray-600">Menampilkan 1-3 dari 15 produk</span>
                        <div class="flex space-x-1">
                            <a href="#" class="px-3 py-1 border rounded-md hover:bg-gray-100">Sebelumnya</a>
                            <a href="#" class="px-3 py-1 border rounded-md hover:bg-gray-100">Berikutnya</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
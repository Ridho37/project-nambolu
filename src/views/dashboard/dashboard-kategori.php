<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kategori - Nambolu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 font-lato">

    <div class="flex min-h-screen" x-data="{ editModalOpen: false, editingCategory: { id: null, name: '' } }">
        
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
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                 <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-slate-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                </button>
                <div class="hidden lg:block text-2xl font-poppins font-bold text-slate-800">Dashboard</div>
                <div class="flex items-center space-x-4">
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="flex items-center space-x-2">
                            <img src="https://i.pravatar.cc/40" alt="Avatar" class="w-10 h-10 rounded-full">
                            <div class="hidden md:block text-left">
                                <div class="font-poppins font-semibold text-sm text-slate-700">Afilla</div>
                                <div class="text-xs text-slate-500">Store Manager</div>
                            </div>
                        </button>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20">
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Profil Saya</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-6 lg:p-8">
                <div>
                    <h2 class="text-2xl font-poppins font-bold text-slate-800">Kategori Produk</h2>
                    <p class="text-gray-600 mt-1">Atur kategori untuk mengelompokkan produk Anda di toko.</p>
                </div>

                <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <div class="lg:col-span-1">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <h3 class="text-xl font-poppins font-bold text-slate-800">Tambah Kategori Baru</h3>
                            <form class="space-y-4 mt-4">
                                <div>
                                    <label for="category_name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                                    <input type="text" id="category_name" placeholder="cth: Kue Ulang Tahun" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                                </div>
                                <button type="submit" class="w-full bg-slate-800 text-white font-poppins font-semibold py-2.5 px-5 rounded-lg hover:bg-slate-700 transition-colors shadow-md">
                                    Simpan Kategori
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-2">
                         <div class="bg-white p-6 rounded-xl shadow-md">
                            <h3 class="text-xl font-poppins font-bold text-slate-800 mb-4">Daftar Kategori</h3>
                             <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead class="border-b-2 border-slate-100">
                                        <tr>
                                            <th class="p-4 text-sm font-poppins font-semibold text-slate-500">NAMA KATEGORI</th>
                                            <th class="p-4 text-sm font-poppins font-semibold text-slate-500">JUMLAH PRODUK</th>
                                            <th class="p-4 text-sm font-poppins font-semibold text-slate-500 text-right">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-slate-100">
                                            <td class="p-4 font-semibold text-slate-700">Bolu Gulung</td>
                                            <td class="p-4 text-slate-600">5 Produk</td>
                                            <td class="p-4 text-right">
                                                <button @click="editModalOpen = true; editingCategory = { id: 1, name: 'Bolu Gulung' }" class="text-blue-600 hover:underline font-semibold">Edit</button>
                                                <button class="ml-4 text-red-600 hover:underline font-semibold">Hapus</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-slate-100">
                                            <td class="p-4 font-semibold text-slate-700">Kue Kering</td>
                                            <td class="p-4 text-slate-600">12 Produk</td>
                                            <td class="p-4 text-right">
                                                <button @click="editModalOpen = true; editingCategory = { id: 2, name: 'Kue Kering' }" class="text-blue-600 hover:underline font-semibold">Edit</button>
                                                <button class="ml-4 text-red-600 hover:underline font-semibold">Hapus</button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-slate-100">
                                            <td class="p-4 font-semibold text-slate-700">Roti Tawar & Manis</td>
                                            <td class="p-4 text-slate-600">8 Produk</td>
                                            <td class="p-4 text-right">
                                                <button @click="editModalOpen = true; editingCategory = { id: 3, name: 'Roti Tawar & Manis' }" class="text-blue-600 hover:underline font-semibold">Edit</button>
                                                <button class="ml-4 text-red-600 hover:underline font-semibold">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>
                    </div>
                </div>
            </main>
        </div>
        
        <div x-show="editModalOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" @keydown.escape.window="editModalOpen = false">
            <div @click.away="editModalOpen = false" class="bg-white rounded-xl shadow-2xl w-full max-w-md mx-4">
                <div class="flex justify-between items-center p-5 border-b">
                    <h3 class="text-xl font-poppins font-bold text-slate-800">Edit Kategori</h3>
                    <button @click="editModalOpen = false" class="text-gray-500 hover:text-gray-800">&times;</button>
                </div>
                <div class="p-6">
                    <form class="space-y-4">
                        <div>
                            <label for="edit_category_name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                            <input type="text" id="edit_category_name" x-model="editingCategory.name" class="mt-1 bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5">
                        </div>
                    </form>
                </div>
                <div class="px-6 py-4 bg-slate-50 text-right border-t">
                     <button @click="editModalOpen = false" type="button" class="text-gray-600 bg-transparent hover:bg-gray-200 rounded-lg px-5 py-2.5">Batal</button>
                    <button type="submit" class="bg-slate-800 text-white font-poppins font-semibold py-2.5 px-5 rounded-lg hover:bg-slate-700 transition-colors shadow-md ml-2">Simpan Perubahan</button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
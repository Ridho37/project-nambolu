<?php
// Cek apakah ada pesan error dari proses login sebelumnya yang disimpan di session
if (isset($_SESSION['error_message'])) {
    $errorMessage = $_SESSION['error_message'];
    // Hapus pesan error dari session agar tidak muncul lagi saat halaman di-refresh
    unset($_SESSION['error_message']);
}
?>

<div class="flex items-center justify-center py-12 px-4" style="min-height: 80vh;">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center text-slate-800 font-poppins">
            Admin Login
        </h1>
        
        <?php if (isset($errorMessage)): ?>
            <div class="p-4 text-sm text-red-800 bg-red-100 rounded-lg" role="alert">
                <span class="font-medium">Login Gagal!</span> <?= htmlspecialchars($errorMessage) ?>
            </div>
        <?php endif; ?>

        <form class="space-y-6" action="/login/process" method="POST">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Alamat Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3" placeholder="admin@nambolu.com" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3" required>
            </div>
            
            <button type="submit" class="w-full text-white bg-rose-800 hover:bg-rose-700 focus:ring-4 focus:outline-none focus:ring-rose-300 font-bold rounded-lg px-5 py-3 text-center transition-all duration-300">
                Masuk
            </button>
        </form>
    </div>
</div>
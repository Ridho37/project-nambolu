<?php
// src/Controllers/DashboardController.php

class DashboardController
{
    /**
     * Constructor ini akan berjalan OTOMATIS setiap kali salah satu method
     * di dalam class ini dipanggil. Ini adalah tempat yang tepat untuk
     * meletakkan kode keamanan/pemeriksaan session.
     */
    public function __construct()
    {
        // 1. Periksa apakah pengguna sudah login dengan melihat session 'user_id'
        if (!isset($_SESSION['user_id'])) {
            // Jika tidak ada session user_id, artinya belum login.
            // Langsung alihkan ke halaman login.
            header('Location: /login');
            exit(); // Hentikan eksekusi skrip setelah redirect.
        }

        // 2. (Opsional tapi sangat direkomendasikan) Periksa role pengguna
        // Pastikan hanya 'admin' yang bisa mengakses dashboard ini.
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
            // Jika role bukan admin, lempar ke halaman utama.
            // Anda bisa juga menampilkan halaman "Akses Ditolak".
            die('Akses ditolak. Halaman ini hanya untuk admin.');
            // header('Location: /');
            // exit();
        }
    }

    /**
     * Menampilkan halaman utama dashboard.
     */
    public function index()
    {
        // Karena sudah melewati __construct, kita bisa pastikan user sudah login.
        // Kita bisa sapa pengguna dengan nama dari session.
        $userName = $_SESSION['user_name'] ?? 'Admin';
        echo "<h1>Selamat Datang di Dashboard, " . htmlspecialchars($userName) . "!</h1>";
        echo "<p>Ini adalah halaman utama dashboard.</p>";
        echo '<a href="/logout">Logout</a>';
    }

    /**
     * Menampilkan halaman manajemen produk.
     */
    public function products()
    {
        $userName = $_SESSION['user_name'] ?? 'Admin';
        echo "<h1>Manajemen Produk</h1>";
        echo "<p>Login sebagai: " . htmlspecialchars($userName) . "</p>";
        echo '<a href="/logout">Logout</a>';
    }

    // --- Method-method lain untuk dashboard bisa ditambahkan di sini ---
    public function addProduct() { echo "Halaman Tambah Produk"; }
    public function categories() { echo "Halaman Kategori"; }
    public function promotions() { echo "Halaman Promosi"; }
    public function settings() { echo "Halaman Pengaturan"; }
}
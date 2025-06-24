<?php

// src/Core/Database.php

class Database
{
    /**
     * @var PDO|null $instance
     * Properti statis untuk memegang satu-satunya instance dari class ini (Singleton).
     */
    private static ?PDO $instance = null;

    /**
     * Mencegah pembuatan instance baru dari luar class dengan `new Database()`.
     */
    private function __construct() {}

    /**
     * Mencegah duplikasi instance melalui cloning.
     */
    private function __clone() {}

    /**
     * Method statis utama yang akan kita panggil untuk mendapatkan koneksi PDO.
     *
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        // Jika instance belum dibuat, maka buat koneksi baru.
        // Jika sudah ada, langsung kembalikan instance yang sama.
        if (self::$instance === null) {
            // Muat konfigurasi dari file config/database.php
            $config = require_once __DIR__ . '/../../config/database.php';
            
            // Siapkan DSN (Data Source Name)
            $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
            
            // Siapkan opsi untuk koneksi PDO
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Melempar exception jika ada error SQL
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Mengembalikan hasil sebagai array asosiatif
                PDO::ATTR_EMULATE_PREPARES   => false,                  // Menggunakan native prepared statements
            ];

            try {
                // Buat instance PDO baru dan simpan di properti statis.
                self::$instance = new PDO($dsn, $config['user'], $config['password'], $options);
            } catch (\PDOException $e) {
                // Jika koneksi gagal, hentikan aplikasi dan tampilkan pesan error.
                // Jangan pernah menampilkan detail error di lingkungan produksi.
                die('Koneksi Database Gagal: ' . $e->getMessage());
            }
        }
        
        // Kembalikan instance PDO yang sudah siap pakai.
        return self::$instance;
    }
}
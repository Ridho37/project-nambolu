<?php

// src/Models/User.php

// Memuat class Database yang akan kita gunakan
require_once __DIR__ . '/../Core/Database.php';

class User
{
    /**
     * @var PDO Properti untuk menampung koneksi database PDO.
     */
    private PDO $db;

    /**
     * Constructor akan dijalankan setiap kali 'new User()' dibuat.
     * Ia langsung mengambil koneksi database dan menyimpannya di properti $db.
     */
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * Mencari satu pengguna di database berdasarkan alamat email.
     *
     * @param string $email Alamat email pengguna yang dicari.
     * @return array|false Mengembalikan data pengguna dalam bentuk array jika ditemukan,
     * atau false jika tidak ditemukan.
     */
    public function findByEmail(string $email)
    {
        try {
            // 1. Siapkan query SQL dengan placeholder (?) untuk keamanan (mencegah SQL Injection)
            $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");

            // 2. Eksekusi query dengan menyisipkan variabel $email ke placeholder
            $stmt->execute([$email]);

            // 3. Ambil hasilnya dan kembalikan
            return $stmt->fetch();

        } catch (\PDOException $e) {
            // Sebaiknya ada logging error di sini untuk production
            // Untuk sekarang, kita bisa hentikan jika ada masalah
            die("Error saat mencari pengguna: " . $e->getMessage());
        }
    }

    /**
     * Mencari satu pengguna di database berdasarkan ID.
     * Ini akan berguna nanti saat kita ingin mengambil data user yang sedang login.
     *
     * @param int $id ID pengguna.
     * @return array|false
     */
    public function findById(int $id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        } catch (\PDOException $e) {
            die("Error saat mencari pengguna berdasarkan ID: " . $e->getMessage());
        }
    }

    // Nanti kita bisa menambahkan fungsi lain di sini, seperti:
    // public function create(array $data) { ... }
    // public function update(int $id, array $data) { ... }
    // public function delete(int $id) { ... }
}
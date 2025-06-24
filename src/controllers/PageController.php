<?php
// src/Controllers/PageController.php

class PageController
{
    /**
     * Menampilkan halaman utama (homepage).
     */
    public function home()
    {
        $pageTitle = "Selamat Datang di Nambolu";
        
        // Data dummy produk sekarang didefinisikan di Controller
        $products = [
            [
                'id' => 1,
                'name' => 'Bolu Gulung Keju',
                'description' => 'Lembutnya bolu dengan isian keju premium yang melimpah',
                'price' => 50000,
                'image' => '/assets/images/bolugulung/bolukeju.jpeg'
            ],
            [
                'id' => 2,
                'name' => 'Bolu Gulung Cokelat',
                'description' => 'Manisnya cokelat premium dalam gulungan bolu yang empuk.',
                'price' => 50000,
                'image' => '/assets/images/bolugulung/bolukeju.jpeg'
            ],
            [
                'id' => 3,
                'name' => 'Bolu Gulung Pandan',
                'description' => 'Aroma wangi pandan asli dengan isian krim yang lembut.',
                'price' => 45000,
                'image' => '/assets/images/bolugulung/bolukeju.jpeg'
            ]
        ];

        try {
            ob_start();
            extract(compact('pageTitle', 'products'));
            require_once '../../views/pages/home.php';
            $content = ob_get_clean();
            require_once '../../views/layouts/app.php';
        } catch (\Throwable $e) {
            die('Error: Terjadi masalah saat memuat halaman. Pesan: ' . $e->getMessage());
        }
    }

    /**
     * Menangani data yang dikirim dari form kontak.
     */
    public function handleContactForm()
    {
        // Untuk sekarang, kita hanya akan cek apakah datanya masuk.
        echo "<h1>Form kontak berhasil dikirim!</h1>";
        echo "<p>Data yang diterima:</p>";
        echo "<pre style='background-color: #f0f0f0; padding: 15px; border-radius: 5px;'>";
        var_dump($_POST); // $_POST berisi semua data yang dikirim dari form
        echo "</pre>";
        echo "<a href='/'>Kembali ke Home</a>";

        // Nantinya, di sinilah Anda akan menulis kode untuk mengirim email atau menyimpan ke DB.
    }

    /**
     * Menampilkan halaman daftar produk.
     */
    public function products()
    {
        echo "Ini adalah halaman Produk. (Konten dari PageController::products)";
    }

    /**
     * Menampilkan halaman detail satu produk.
     */
    public function productDetail()
    {
        echo "Ini adalah halaman Detail Produk. (Konten dari PageController::productDetail)";
    }
}
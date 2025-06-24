<?php
// src/Controllers/AuthController.php

require_once __DIR__ . '/../Models/User.php';

class AuthController
{
    /**
     * Menampilkan halaman form login.
     */
    public function showLoginForm()
    {
        $pageTitle = "Login Admin";

        try {
            ob_start();
            extract(compact('pageTitle'));
            
            // --- PERBAIKAN DI SINI ---
            // Menggunakan __DIR__ untuk path yang absolut dan pasti.
            require_once __DIR__ . '/../../views/auth/login.php';
            
            $content = ob_get_clean();

            // --- PERBAIKAN DI SINI JUGA ---
            require_once __DIR__ . '/../../views/layouts/app.php';

        } catch (\Throwable $e) {
            die('Error: Gagal memuat halaman login. ' . $e->getMessage());
        }
    }

    // ... method handleLogin() dan logout() tidak perlu diubah ...
    public function handleLogin()
    {
        // 1. Validasi input dasar
        if (!isset($_POST['email']) || !isset($_POST['password']) || empty($_POST['email']) || empty($_POST['password'])) {
            $_SESSION['error_message'] = "Email dan password wajib diisi.";
            header('Location: /login');
            exit();
        }

        // 2. Cari pengguna di database menggunakan Model
        $userModel = new User();
        $user = $userModel->findByEmail($_POST['email']);

        // 3. Verifikasi pengguna dan password
        if ($user && password_verify($_POST['password'], $user['password'])) {
            // Login berhasil!

            // 4. Regenerasi session ID untuk keamanan
            session_regenerate_id(true);

            // 5. Simpan informasi pengguna ke dalam session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];

            // 6. Alihkan ke halaman dashboard admin
            header('Location: /admin/dashboard');
            exit();
        } else {
            // Login gagal
            $_SESSION['error_message'] = "Email atau password yang Anda masukkan salah.";
            
            // Kembalikan ke halaman login
            header('Location: /login');
            exit();
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /login');
        exit();
    }
}
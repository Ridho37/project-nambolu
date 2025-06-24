<?php
// public/index.php

// Mulai session di setiap request. Harus ada di paling atas.
session_start();


// ======================================================================
// PENTING: Muat semua kelas Controller yang dibutuhkan oleh router.
// Jika salah satu baris ini tidak ada, akan terjadi error "Class not found".
// Pastikan path-nya benar sesuai struktur folder Anda.
// ======================================================================
require_once __DIR__ . '/../src/controllers/PageController.php';
require_once __DIR__ . '/../src/controllers/AuthController.php';
require_once __DIR__ . '/../src/controllers/DashboardController.php';


// --- LOGIKA MENDAPATKAN REQUEST URL YANG BERSIH ---

$base_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', __DIR__));
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$request = $request_uri;
if ($base_path && $base_path != '/' && strpos($request_uri, $base_path) === 0) {
    $request = substr($request_uri, strlen($base_path));
}

if (empty($request)) {
    $request = '/';
}


// --- ROUTING ---
// Arahkan request ke Controller yang tepat berdasarkan URL.

switch ($request) {
    // Rute untuk Halaman Publik
    case '/':
        (new PageController())->home();
        break;
    case '/products':
        (new PageController())->products();
        break;
    case '/products/detail':
        (new PageController())->productDetail();
        break;

    // Rute untuk Form Kontak
    case '/contact/submit':
        (new PageController())->handleContactForm();
        break;

    // Rute untuk Otentikasi
    case '/login':
        (new AuthController())->showLoginForm();
        break;
    case '/login/process':
        (new AuthController())->handleLogin();
        break;
    case '/logout':
        (new AuthController())->logout();
        break;

    // Rute untuk Halaman Dashboard (Admin)
    case '/admin/dashboard':
        (new DashboardController())->index();
        break;
    case '/admin/products':
        (new DashboardController())->products();
        break;
    case '/admin/products/add':
        (new DashboardController())->addProduct();
        break;
    case '/admin/categories':
        (new DashboardController())->categories();
        break;
    case '/admin/promotions':
        (new DashboardController())->promotions();
        break;
    case '/admin/settings':
        (new DashboardController())->settings();
        break;

    // Halaman Tidak Ditemukan (404)
    default:
        http_response_code(404);
        echo "404 - Halaman tidak ditemukan.";
        break;
}
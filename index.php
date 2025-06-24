<?php
// $project_location = "/project-nambolu"; // project path, EX FULL PATH AFA (C:/laragon/www/project-nambolu)
// $me = $project_location;

// Dapatkan path dari root server (htdocs/www) ke folder proyek ini
// Contoh hasil di XAMPP: /project-nambolu
// Contoh hasil di Laragon pretty URL: (string kosong) atau /
$base_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', __DIR__));

// Dapatkan path URL yang diminta oleh browser
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$request = $request_uri;
// Jika proyek kita ada di dalam subfolder, maka "potong" nama subfolder dari URL
if ($base_path != '/' && strpos($request_uri, $base_path) === 0) {
    $request = substr($request_uri, strlen($base_path));
}

// Jika setelah dipotong hasilnya kosong (artinya kita di halaman root), jadikan '/'
if (empty($request)) {
    $request = '/';
}

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request){
    case '/':
        require "views/home.php";
        break;
    case '/products':
        require "views/products.php";
        break;
    case '/admin/login':
        require "views/dashboard/dashboard-login.php";
        break;
    case '/admin/dashboard':
        require "views/dashboard/dashboard-page.php";
        break;
    case '/admin/dashboard/product':
        require "views/dashboard/dashboard-product.php";
        break;
    case '/admin/dashboard/product/add':
        require "views/dashboard/dashboard-addproduct.php";
        break;
    case '/admin/dashboard/product/category':
        require "views/dashboard/dashboard-kategori.php";
        break;
    case '/admin/dashboard/promote':
        require "views/dashboard/dashboard-promosi.php";
        break;
    case '/admin/dashboard/settings':
        require "views/dashboard/dashboard-pengaturan.php";
        break;
    case '/admin/dashboard/profile':
        require "views/dashboard/dashboard-profile.php";
        break;
    default:
        http_response_code(404);
        echo "url nya salah tuh kak!";
        break;
}

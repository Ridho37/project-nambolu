# project-nambolu
UAS


<!-- 
Struktur Folder
ROJECT-NAMBOLU/
├── public/                     // <== Folder INI yang akan diakses oleh browser
│   ├── index.php             // Titik masuk utama (Router/Halaman utama)
│   ├── admin.php             // Titik masuk untuk dashboard admin
│   └── assets/
│       ├── css/
│       │   └── style.css     // [HASIL COMPILE] dari Tailwind CSS
│       ├── images/           // Semua gambar untuk publik
│       │   ├── bolugulung/
│       │   ├── about.jpg
│       │   ├── hero1.png
│       │   └── logo.png
│       └── js/
│           └── script.js     // Jika butuh JavaScript di sisi client
│
├── src/                        // <== Folder INI berisi semua logika & template inti
│   ├── config/
│   │   └── database.php      // Konfigurasi koneksi database pindah ke sini
│   │
│   ├── lib/ atau helpers/      // Tempat fungsi-fungsi bantuan
│   │   └── functions.php
│   │
│   ├── controllers/            // Logika untuk memproses input (misal: dari form)
│   │   └── ProductController.php // Logika untuk tambah/update/hapus produk
│   │
│   ├── templates/ atau views/  // Berisi file-file "tampilan" PHP/HTML
│   │   ├── partials/           // Bagian yang bisa dipakai ulang
│   │   │   ├── header.php
│   │   │   └── footer.php
│   │   │
│   │   ├── home.php            // Tampilan halaman utama
│   │   ├── menu.php            // Tampilan halaman menu
│   │   └── dashboard/          // Template khusus untuk admin
│   │       ├── index.php       // Tampilan utama dashboard
│   │       └── products.php    // Tampilan untuk kelola produk
│   │
│   └── input.css               // [SUMBER] File source Tailwind CSS Anda
│
├── .gitignore
├── package.json
├── package-lock.json
├── README.md
└── tailwind.config.js 
-->
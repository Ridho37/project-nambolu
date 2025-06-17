<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard - Nambolu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lato:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="bg-slate-100 font-lato text-gray-800">

    <div class="flex min-h-screen">
        <div class="hidden lg:flex lg:flex-1 bg-cover bg-center"
            style="background-image: url('/assets/images/about.jpg');">
            <div class="w-full h-full bg-slate-900/50"></div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="max-w-md w-full">
                <div class="text-center mb-10">
                    <a href="#" class="flex items-center justify-center">
                        <img src="/assets/images/logo.png" class="w-10" alt="Nambolu Logo">
                        <h1 class="text-3xl pl-3 font-poppins font-bold text-slate-800">Nambolu</h1>
                    </a>
                </div>

                <div class="text-left mb-8">
                    <h2 class="text-2xl font-poppins font-bold text-slate-800">Login</h2>
                    <p class="text-gray-600 mt-2">Selamat datang! Silakan masuk untuk mengakses dashboard.</p>
                </div>

                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label for="employee-id" class="block text-sm font-poppins font-semibold text-slate-700 mb-2">Username</label>
                        <input type="text" id="employee-id" name="employee-id"
                            class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300"
                            placeholder="Masukkan username" required>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-poppins font-semibold text-slate-700 mb-2">Kata
                            Sandi</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-slate-800 rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-3 transition-all duration-300"
                            placeholder="Masukkan kata kandi" required>
                    </div>

                    <div class="text-right">
                        <a href="#" class="text-sm text-rose-700 hover:underline font-semibold">Lupa Kata Sandi?</a>
                    </div>

                    <div class="flex justify-center">
                        <a href="dashboard-page.html" class="w-full text-white bg-slate-800 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-slate-300 font-bold font-poppins rounded-lg px-5 py-3 text-center text-xl transition-all duration-300 shadow-md hover:shadow-lg">Login</a>
                    </div>
                </form>

                <div class="text-center mt-12">
                    <p class="text-sm text-gray-500">© 2025 Nambolu. All rights reserved.</p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
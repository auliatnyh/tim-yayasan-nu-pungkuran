<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PPDB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Menyembunyikan dropdown secara default */
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <div class="bg-green-800 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="/img/logo.png" alt="Logo" class="w-12 h-12 mr-4">
            <h1 class="text-xl font-bold">PPDB YAYASAN NU PUNGKURAN</h1>
        </div>
        <div class="flex items-center relative">
            <span class="mr-2">Nama Pengguna</span>
            <div>
                <button type="button" class="inline-flex justify-center text-sm font-medium text-white hover:underline focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <i class="fas fa-user-circle text-2xl"></i>
                    <i class="fas fa-chevron-down ml-2"></i>
                </button>
            </div>

            <!-- Dropdown menu -->
            <div class="absolute right-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 dropdown-menu" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="bg-green-200 text-green-800 p-4 flex justify-around">
        <a href="#" class="font-bold">Pendaftaran</a>
        <a href="#" class="font-bold">Status Pendaftaran</a>
    </div>

    <!-- Main Content -->
    <div class="flex justify-center items-center mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="/img/sd_logo.png" alt="SD Islam NU Pungkuran" class="w-32 h-32 mx-auto mb-4">
                <h2 class="text-lg font-bold">SD ISLAM NU PUNKURAN</h2>
                <p class="text-gray-500">31 Agustus 2025 - 30 Juni 2026</p>
                <button class="bg-green-500 text-white mt-4 px-4 py-2 rounded-lg hover:bg-green-600">Daftar</button>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <img src="/img/smp_logo.png" alt="SMP Hasanuddin 3" class="w-32 h-32 mx-auto mb-4">
                <h2 class="text-lg font-bold">SMP HASANUDDIN 3</h2>
                <p class="text-gray-500">31 Agustus 2025 - 30 Juni 2026</p>
                <button class="bg-green-500 text-white mt-4 px-4 py-2 rounded-lg hover:bg-green-600">Daftar</button>
            </div>
        </div>
    </div>

    <script>


        button.addEventListener('click', () => {
            menu.classList.toggle('show');
        });

        // Menutup dropdown jika klik di luar
        window.addEventListener('click', (event) => {
            if (!button.contains(event.target)) {
                menu.classList.remove('show');
            }
        });
    </script>
</body>
</html>

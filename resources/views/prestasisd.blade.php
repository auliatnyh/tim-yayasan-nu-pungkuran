<x-layoutsd>
    {{-- <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="text-3xl">Ini adalah Halaman Galeri Femil</h2> --}}
    <h1 class="py-5 mb-8 text-center text-3xl font-bold text-green-900 dark:text-gray-400 ">Prestasi
    </h1>
    
    <!-- Dropdown Section -->
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-5 mb-2">
        <form class="mb-10 mx-5"> 
            <select id="ajaran"
                class="py-1 px-2 mb-5 bg-white-400 border border-gray-500 text-green-900 text-medium text-center font-bold rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-40 sm:px-2 px-1 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500">
                <option selected>2024/2025</option>
                <option value="2023/2024">2023/2024</option>
                <option value="2024/2025">2024/2025</option>
                <option value="2025/2026">2025/2026</option>
                <option value="2026/2027">2026/2027</option>
            </select>
            <h1 class="text-left max-w-screen-xl flex flex-wrap items-center justify-between mx-auto text-xl font-bold text-green-900 dark:text-gray-400 ">
                Tahun Ajaran 2024/2025
            </h1>
        </form>
    </div>

    <!-- Gambar Prestasi Section -->
    <div class="flex flex-wrap justify-center gap-6 max-w-full mb-20">
        <div class="flex flex-col items-center w-72"> <!-- Lebar kotak disesuaikan -->
            <img class="h-64 w-64 rounded-lg object-cover" src="/img/juarasd1.png" alt="Kebudayaan Jawa"> 
            <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
                <strong>Juara 1 Lomba Pidato</strong>
                <p class="text-xs text-gray-400 mt-1">
                    <p> Femila Kamilia </p>
                    <p> Juara 1 lomba pidato antar kota</p>
            </div>
        </div>
        <div class="flex flex-col items-center w-72"> <!-- Lebar kotak disesuaikan -->
            <img class="h-64 w-64 rounded-lg object-cover" src="/img/juarasd2.png" alt="Bulu tangkis"> 
            <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
                <strong>Juara 2 Lomba Cerdas Cermat</strong>
                <p class="text-xs text-gray-400 mt-1">
                    <p> Tim Cerdas Cermat </p>
                    <p> Juara 2 lomba LCC antar kota</p>
            </div>
        </div>
        <div class="flex flex-col items-center w-72"> <!-- Lebar kotak disesuaikan -->
            <img class="h-64 w-64 rounded-lg object-cover" src="/img/juarasd3.png" alt="Basket"> 
            <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
                <strong>Juara 1 Lomba Tahfidz</strong>
                <p class="text-xs text-gray-400 mt-1">
                    <p> Aqila, Rani, Syahla </p>
                    <p> Juara 1 lomba tahfidz antar sekolah</p>
            </div>
        </div>
        <div class="flex flex-col items-center w-72"> <!-- Lebar kotak disesuaikan -->
            <img class="h-64 w-64 rounded-lg object-cover" src="/img/juarasd4.png" alt="Pencak Silat">
            <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
                <strong>Juara 3 Lomba Pramuka</strong>
                <p class="text-xs text-gray-400 mt-1">
                    <p> Tim Pramuka</p>
                    <p> Juara 3 lomba pramuka antar gugus</p>
            </div>
        </div>
    </div>
</x-layoutsd>

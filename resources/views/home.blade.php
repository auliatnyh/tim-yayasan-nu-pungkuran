<x-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="resource/css/style.css">
    <style>
        @keyframes blink {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .blink-animation {
            animation: blink 1.5s infinite;
        }
    </style>
</head>

<body>

        <h3 class="hero py-6 px-4 bg-green-400 border-shadow ">
            <section id="home">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                    <h1 class="flex flex-col py-20 px-60 text-6xl font-bold justify-center align-middle text-green-900 dark:text-green-400 letter-spacing: 0.2em">
                        PPDB
                    </h1>
                    <div class="col-span-1">
                        <h2 class="mb-3 text-left text-2xl font-bold text-white dark:text-white">Penerimaan Siswa Baru</h2>
                        <h1 class="mb-3 text-left text-5xl font-bold text-green-900 dark:text-green-400">YAYASAN</h1>
                        <h1 class="mb-3 text-left text-5xl font-bold text-green-900 dark:text-green-400">NURUL ULUM</h1>
                        <h1 class="mb-3 text-left text-5xl font-bold text-green-900 dark:text-green-400">PUNGKURAN</h1>
                        <h2 class="mb-3 text-left text-2xl font-bold text-white dark:text-white">Tahun Ajaran 2024/2025</h2>
                    </div>
                    <div class="col-span-1 flex flex-col ml-20 items-start justify-center align-middle">
                        <a href="/loginppdb"
                           target="_blank"
                           class="blink-animation focus:outline-none text-white bg-green-900 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Daftar Sekarang
                        </a>
                    </div>                    
                </div>
            </section>
        </h3>
        <h3 class="py-5 text-center text-3xl font-bold text-green-900 dark:text-gray-400">Sambutan Ketua Yayasan</h3>
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-3 mx-20">
            <img class="mb-3 px-20 h-30 w-29 shadow-lg rounded-lg shadow-gray-500/20" src="/img/kepsek.png"
                alt="image description">
            <div class="col-span-2">
                <p class="mb-10 px-20 justify-between text-lg font-normal text-gray-500 dark:text-gray-400">
                    Assalamu’alaikum warahmatullahi wabarakatuh,
                    <br> <br> Selamat datang di Yayasan NU Pungkuran. Kami bersyukur atas dukungan dan kerja sama
                    dari semua pihak dalam mewujudkan visi pendidikan kami. Di sini, kami berkomitmen untuk menyediakan lingkungan belajar yang berkualitas dan berlandaskan nilai-nilai keagamaan.
                    <br> <br> Terima kasih atas kepercayaan Anda. Mari bersama-sama kita wujudkan pendidikan yang bermanfaat dan bermakna.
                    <br> <br> Wassalamu’alaikum warahmatullahi wabarakatuh.
                </p>
            </div>
        </div>

        <!-- Mulai setelah bagian "Sambutan Ketua Yayasan" -->
        <h3 class="py-5 px-20 text-left text-3xl font-bold text-green-900 dark:text-gray-1000 text-center">Daya Tampung</h3>
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-4 bg-green-500 py-8 px-12 text-white mx-20 shadow-lg">
            
            <div class="flex flex-col items-center justify-center">
                <div class="text-4xl font-bold"><i class="fas fa-user"></i> 180</div>
                <p class="text-lg mt-2">Siswa SD</p>
            </div>

           
            <div class="flex flex-col items-center justify-center">
                <div class="text-4xl font-bold"><i class="fas fa-user"></i> 192</div>
                <p class="text-lg mt-2">Siswa SMP</p>
            </div>

           
            <div class="flex flex-col items-center justify-center">
                <div class="text-4xl font-bold"><i class="fas fa-user"></i> 37</div>
                <p class="text-lg mt-2">Guru dan Karyawan</p>
            </div>

            
            <div class="flex flex-col items-center justify-center">
                <div class="text-4xl font-bold"><i class="fas fa-home"></i> 12</div>
                <p class="text-lg mt-2">Ruang kelas SD dan SMP</p>
            </div>
        </div>

        <h3 class="py-5 px-20 text-left text-3xl font-bold text-green-900 dark:text-gray-400">Berita</h3>
        <div class="mb-10 py-3 px-20 grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Berita 1 -->
            <div class="flex flex-col bg-white shadow-lg rounded-lg p-4">
                <img class="h-40 w-full object-cover rounded-lg mb-3" src="/img/berita1.png" alt="image description">
                <h1 class="font-bold text-lg mb-1">Judul Berita 1</h1>
                <p class="text-sm text-gray-500 mb-2">12 September 2024</p> <!-- Tanggal berita -->
                <p class="text-base mb-4 text-gray-700">Ini adalah deskripsi singkat untuk berita 1. Anda dapat menambahkan sedikit penjelasan...</p>
                <a href="/artikel"
                class="text-green-600 hover:text-green-500 underline text-sm text-left">
                    Baca Selengkapnya
                </a>
            </div>
        
            <!-- Berita 2 -->
            <div class="flex flex-col bg-white shadow-lg rounded-lg p-4">
                <img class="h-40 w-full object-cover rounded-lg mb-3" src="/img/berita2.png" alt="image description">
                <h1 class="font-bold text-lg mb-1">Judul Berita 2</h1>
                <p class="text-sm text-gray-500 mb-2">13 September 2024</p> <!-- Tanggal berita -->
                <p class="text-base mb-4 text-gray-700">Ini adalah deskripsi singkat untuk berita 2. Anda dapat menambahkan sedikit penjelasan...</p>
                <a href="/artikel"
                class="text-green-600 hover:text-green-500 underline text-sm text-left">
                    Baca Selengkapnya
                </a>
            </div>
        
            <!-- Berita 3 -->
            <div class="flex flex-col bg-white shadow-lg rounded-lg p-4">
                <img class="h-40 w-full object-cover rounded-lg mb-3" src="/img/berita3.png" alt="image description">
                <h1 class="font-bold text-lg mb-1">Judul Berita 3</h1>
                <p class="text-sm text-gray-500 mb-2">14 September 2024</p> <!-- Tanggal berita -->
                <p class="text-base mb-4 text-gray-700">Ini adalah deskripsi singkat untuk berita 3. Anda dapat menambahkan sedikit penjelasan...</p>
                <a href="/artikel"
                class="text-green-600 hover:text-green-500 underline text-sm text-left">
                    Baca Selengkapnya
                </a>
            </div>
        
        </div>
        



</body>


</html>

</x-layout>

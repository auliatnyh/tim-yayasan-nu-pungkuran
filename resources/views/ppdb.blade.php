<x-layout>
    <h1 class="py-5 mb-8 text-center text-3xl font-bold text-green-900 dark:text-gray-400">Penerimaan Siswa Baru</h1>
    
    <div class="flex flex-auto px-20 justify-between">
        <div class="flex-1">
            <h3 class="mb-4 text-left text-xl font-bold text-gray-900 dark:text-gray-400">Persyaratan</h3>
            <ul class="space-y-4 text-black-500 text-xl font-bold dark:text-gray-400">
                <ol class="ps-5 mt-2 font-normal text-sm space-y-1 list-decimal list-inside">
                    <li>Berusia minimal 6 tahun per tanggal 1 Juli 2021 (untuk kelas I) dibuktikan dengan Akte Kelahiran</li>
                    <li>Foto copy BLP (Rapor) TK B Semester 1 untuk calon murid kelas I</li>
                    <li>Foto copy BLP (Rapor) minimal Semester 1 kelas terakhir untuk calon murid pindahan</li>
                    <li>Foto copy Akte Kelahiran (kenal lahir) sebanyak 2 lembar</li>
                    <li>Foto copy Kartu Keluarga (KK) sebanyak 2 lembar</li>
                    <li>Foto copy KTP orangtua</li>
                    <li>Foto berwarna ukuran 3 x 4 (2 lembar)</li>
                    <li>Membayar biaya formulir pendaftaran Rp 350.000,-</li>
                </ol>
            </ul>
        </div>
        <!-- Tombol Daftar Sekarang -->
        <div class="flex-none ml-6 flex items-center">
            <a href="/daftar" class="bg-green-600 hover:bg-green-500 text-white font-bold py-3 px-6 rounded text-lg blink-animation">
                Daftar Sekarang
            </a>
        </div>
    </div>

    <!-- Tabel Informasi Tanggal Pendaftaran -->
    <div class="py-10 flex flex-auto px-20 justify-center align-center">
        <table class="max-w-7xl text-base text-center rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-base text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Keterangan</th>
                    <th scope="col" class="px-6 py-3">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Pendaftaran dan Pengembalian Formulir
                    </th>
                    <td class="px-6 py-4 text-left">26 Januari - 20 Februari 2024</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Pengumuman Calon Murid yang Diterima
                    </th>
                    <td class="px-6 py-4 text-left">5 Maret 2024</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Daftar Ulang Calon Murid
                    </th>
                    <td class="px-6 py-4 text-left">10 - 15 Maret 2024</td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Awal Tahun Ajaran Baru
                    </th>
                    <td class="px-6 py-4 text-left">15 Juli 2024</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="py-10 flex flex-col items-left px-20">
        <h3 class="mb-4 text-left text-xl font-bold text-gray-900 dark:text-gray-400">Cara Pendaftaran</h3>
        <ul class="max-w-xl space-y-1 text-sm text-black-500 list-disc list-inside dark:text-gray-400">
            <li>Secara On-Line melalui link</li>
            <li>Secara Off-Line datang langsung ke sekolah pada hari kerja Senin – Jum’at pukul 07.30 – 14.00 WIB, hari Sabtu pukul 07.30 – 12.00 WIB.</li>
        </ul>
    </div>

    {{-- Materi Calon Murid --}}
    <div class="flex flex-auto px-20 justify-left align-center">
        <div class="flex-1">
            <h3 class="mb-4 text-left text-xl font-bold text-gray-900 dark:text-gray-400">Materi Calon Murid</h3>
            <ul class="space-y-4 text-black-500 text-xl font-bold dark:text-gray-400">
                <ol class="ps-5 mt-2 font-normal text-sm space-y-1 list-decimal list-inside">
                    <li>Agama (do’a sehari-hari dan surat-surat pendek)</li>
                    <li>Keterampilan Berbahasa (menceritakan gambar, membaca dan menulis sederhana)</li>
                    <li>Motorik Halus (menggunting, menempel, menambah, dan mewarnai gambar)</li>
                    <li>Pengetahuan Umum (diri sendiri, keluarga, dan sekolah)</li>
                </ol>
            </ul>
        </div>
    </div>

    <!-- Tabel Informasi Biaya yang Perlu Dibayarkan -->
    <div class="py-10 flex flex-auto px-20 justify-center align-center">
        <table class="max-w-7xl text-base text-center rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-base text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Keterangan</th>
                    <th scope="col" class="px-6 py-3">Biaya</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Infaq Pendidikan dan Gedung
                    </th>
                    <td class="px-6 py-4 text-left">Rp 2.500.000,-</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Uang Seragam
                    </th>
                    <td class="px-6 py-4 text-left">Rp 500.000,-</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Uang ATK dan Buku Paket
                    </th>
                    <td class="px-6 py-4 text-left">Rp 300.000,-</td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Uang SPP Bulan Pertama
                    </th>
                    <td class="px-6 py-4 text-left">Rp 250.000,-</td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap text-left dark:text-white">
                        Total Pembayaran Awal
                    </th>
                    <td class="px-6 py-4 text-left font-bold text-gray-900">Rp 3.550.000,-</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="py-10 flex flex-col items-left px-20">
        <h3 class="mb-4 text-left text-xl font-bold text-gray-900 dark:text-gray-400">Keterangan</h3>
        <ul class="max-w-xl space-y-1 text-base text-black-500 list-disc list-inside dark:text-gray-400">
            <li>Penyelesaian administrasi keuangan dilakukan di kantor Yayasan Bimatama pada tanggal yang sudah ditetapkan pada hari kerja Senin – Jum’at 07.30 – 13.00 WIB, hari Sabtu pukul 07.30 – 12.00 WIB</li>
            <li>Biaya Uang Gedung minimal dibayarkan 30% di tahap pertama setelah SK diterima</li>
            <li>Biaya Seragam, ATK, Buku Paket, dan SPP bulan Juli 2021 dibayarkan lunas</li>
            <li>Tidak ada Biaya Daftar Ulang dan atau Biaya Pengembangan Pendidikan dan atau Biaya Kegiatan Sekolah</li>
        </ul>
    </div>

    <!-- Tombol Daftar Sekarang di bagian bawah -->
    <div class="flex justify-center py-10">
        <a href="/daftar" class="bg-green-600 hover:bg-green-500 text-white font-bold py-3 px-6 rounded text-lg blink-animation">
            Daftar Sekarang
        </a>
    </div>

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
</x-layout>

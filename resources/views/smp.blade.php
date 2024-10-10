<x-layoutsmp>

<!-- Carousel Section -->
<div id="carousel" class="relative">
    <div class="overflow-hidden rounded-lg">
        <div class="relative w-full">
            <img src="/img/smp.png" alt="Gambar 1" class="w-full h-100 object-cover"> <!-- Mengatur tinggi gambar -->
            <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex flex-col items-center justify-center"> <!-- Menambahkan flex-col untuk pengaturan vertikal -->
                <h2 class="text-white text-4xl font-bold mb-4">Selamat Datang di SMP HASANUDDIN 3</h2>
                <!-- Tombol Daftar Sekarang -->
                <a href="/daftar" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-6 rounded-full">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</div>


{{-- sambutan --}}
<h3 class="py-5 mt-10 text-center text-3xl font-bold text-green-900 dark:text-gray-400">Sambutan Kepala Sekolah</h3> <!-- Margin top ditambahkan di sini -->
<div class="grid grid-cols-1 gap-3 sm:grid-cols-3 mx-20">
    <img class="mb-3 px-20 h-30 w-29 shadow-lg rounded-lg shadow-gray-500/20" src="/img/kepsek.png" alt="image description">
    <div class="col-span-2">
        <p class="mb-10 px-20 justify-between text-lg font-normal text-gray-500 dark:text-gray-400">
            Assalamu’alaikum warahmatullahi wabarakatuh,
            <br><br> Selamat datang di SMP HASANUDDIN 3. Kami bersyukur atas dukungan dan kerja sama dari semua pihak dalam mewujudkan visi pendidikan kami. Di sini, kami berkomitmen untuk menyediakan lingkungan belajar yang berkualitas dan berlandaskan nilai-nilai keagamaan.
            <br><br> Terima kasih atas kepercayaan Anda. Mari bersama-sama kita wujudkan pendidikan yang bermanfaat dan bermakna.
            <br><br> Wassalamu’alaikum warahmatullahi wabarakatuh.
        </p>
    </div>
</div>
{{-- sambutan end --}}

<!-- Profil Sekolah Section -->
<h3 class="py-5 text-center text-3xl font-bold text-green-900 dark:text-gray-400">Profil Sekolah</h3>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mx-20">
    <div class="col-span-2">
        <p class="mb-10 px-20 justify-between text-lg font-normal text-gray-500 dark:text-gray-400">   
            <br> <br> SMP HASANUDDIN 3 merupakan salah satu sekolah terbaik di Kota Semarang. Kami berkomitmen untuk memberikan pendidikan berkualitas berdasarkan nilai-nilai Islam dan budaya luhur bangsa Indonesia.
        </p>
    </div>
    <img class="mb-3 px-20 h-30 w-29 shadow-lg rounded-lg shadow-gray-500/20" src="/img/profilyayasan.png" alt="image description">
</div>


<!-- Visi & Misi Section -->
<section id="visi-misi" class="py-12 bg-white">
    <div class="w-full px-8 lg:px-20">
        <h2 class="text-4xl font-bold text-green-900 mb-6 text-center">Visi & Misi</h2>
        <div class="text-left mx-auto max-w-6xl">
            <!-- Visi Section -->
            <div class="bg-green-300 border border-green-700 rounded-lg p-6 mb-6 w-full">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Visi</h3>
                <p class="text-lg text-gray-700 mb-4">
                    BERBUDI LUHUR, TERAMPIL DAN BERWAWASAN TERBUKA.
                </p>
            </div>

            <!-- Misi Section -->
            <div class="bg-green-200 border border-green-700 rounded-lg p-6 mb-6 w-full">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Misi</h3> 
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-4">
                    <li>Menciptakan profil pelajar yang berakhlak mulia dan rajin beribadah.</li>
                    <li>Menciptakan pembelajaran yang menarik, menyenangkan dan berkarakter yang mampu memfasilitasi pelajar sesuai bakat dan minatnya.</li>
                    <li>Menciptakan lingkungan sekolah sebagai tempat perkembangan intelektual, sosial, emosional, keterampilan, dan pengembangan budaya lokal dalam kebhinekaan global.</li>
                    <li>Menciptakan profil pelajar yang bernalar kritis, kreatif, komunikatif, dan terbuka sehingga mampu mengkreasi ide dan keterampilan yang inovatif.</li>
                    <li>Menjamin hak belajar setiap anak tanpa terkecuali, termasuk anak yang berkebutuhan khusus (inklusi), dalam proses pembelajaran yang menjunjung tinggi nilai kesetaraan dalam bingkai kasih sayang.</li>
                    <li>Menciptakan partisipasi aktif orang tua dan masyarakat dalam keberagaman yang mewadahi kreatifitas pelajar yang berjiwa kompetitif.</li>
                </ul>
            </div>
        </div>
    </div>
</section>


  
  <!-- Daftar Guru & Karyawan Section -->
  <section id="guru-karyawan" class="py-12 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-green-700 mb-6">Daftar Guru & Karyawan</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru1.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Fatimatuz Zahro’, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru PAI & Waka Kurikulum</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Linatun Nafisah
                    <br>
                    <span class="text-xs text-gray-400">Guru Bahasa Indonesia & BK</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Zubaidah Lestiawati, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru IPA & Koor P5</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Ambar Kismiyarsih, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru Seni Rupa</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Adhiati Susani, S.Sos 
                    <br>
                    <span class="text-xs text-gray-400">Guru Bahasa Jawa & PPKn</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Yenny Kurniawati, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru Bahasa Inggris</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Fahri Husaini, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru PJOK & Kabid.Kesiswaan </span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Humam Nasirudin, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru Informatika & TU </span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Asri Kusuma S H, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru MTK & Bendahara</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/guru2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Jannahta Firizki K, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru IPS & TIK</span>
                </figcaption>
            </figure>
          
        </div>
    </div>
  </section>
  
  
    <!-- Pengumuman Terbaru -->
    <div class="container mx-auto px-6 py-12">
      <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Pengumuman Terbaru</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Pengumuman 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
          <h3 class="text-xl font-bold mb-2">Pengumuman Ujian</h3>
          <p class="text-gray-700">Ujian tengah semester akan dilaksanakan pada tanggal 20 September 2024.</p>
          <a href="#" class="text-green-600 hover:underline mt-4 block">Baca selengkapnya</a>
        </div>
        <!-- Pengumuman 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
          <h3 class="text-xl font-bold mb-2">Agenda Ekstrakurikuler</h3>
          <p class="text-gray-700">Jadwal latihan futsal setiap hari Sabtu pukul 07:30 di lapangan sekolah.</p>
          <a href="#" class="text-green-600 hover:underline mt-4 block">Baca selengkapnya</a>
        </div>
        <!-- Pengumuman 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
          <h3 class="text-xl font-bold mb-2">Penerimaan Siswa Baru</h3>
          <p class="text-gray-700">Pendaftaran siswa baru tahun ajaran 2024/2025 sudah dibuka!</p>
          <a href="#" class="text-green-600 hover:underline mt-4 block">Baca selengkapnya</a>
        </div>
      </div>
    </div>
  
    <!-- Galeri Foto -->
    <div class="container mx-auto px-6 py-12">
      <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Galeri</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Foto 1 -->
        <div class="rounded-lg overflow-hidden">
            <img class="h-400 w-400 rounded-lg" src="/img/galerismp1.png" alt="image description">
        </div>
        <!-- Foto 2 -->
        <div class="rounded-lg overflow-hidden">
            <img class="h-400 w-300 rounded-lg" src="/img/galerismp2.png" alt="image description">
        </div>
        <!-- Foto 3 -->
        <div class="rounded-lg overflow-hidden">
          <img class="h-400 w-400 rounded-lg" src="/img/galerismp3.png" alt="image description">
        </div>
      </div>
    </div>
  
  
  
  </section>
</x-layoutsmp>
  
  
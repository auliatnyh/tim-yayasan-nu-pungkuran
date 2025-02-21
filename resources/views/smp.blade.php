<x-layoutsmp>

<!-- Carousel Section -->
<div id="carousel" class="relative">
    <div class="overflow-hidden rounded-lg">
        <div class="relative w-full">
            <img src="/img/fotosmp.png" alt="Gambar 1" class="w-full h-100 object-cover"> <!-- Mengatur tinggi gambar -->
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
    <img class="mb-3 px-20 h-30 w-29 shadow-lg rounded-lg shadow-gray-500/20" src="/img/kepseksmp.png" alt="image description">
    <div class="col-span-2">
        <p class="mb-10 px-20 justify-between text-lg font-normal text-gray-500 dark:text-gray-400">
            Assalamu’alaikum warahmatullahi wabarakatuh,
            <br><br> Puji syukur kami panjatkan kepada Allah Swt atas rahmat dan hidayah-Nya, sehingga warga SMP Hasanuddin 3 (SPEHASTIG) dapat terus berbagi dan bekerja cerdas dalam dunia pendidikan.
            <br><br> Perkembangan teknologi informasi dan komunikasi, terutama internet, telah menjadi kebutuhan pokok bagi masyarakat, termasuk dalam pendidikan. Tantangan bagi dunia pendidikan adalah mengimbangi perubahan ini dengan pembelajaran berbasis digital. Penguasaan teknologi dalam proses pembelajaran menjadi tolok ukur kompetensi dan profesionalisme pendidik untuk memenuhi kebutuhan peserta didik.
            <br><br> Dalam menghadapi tantangan ini, SMP Hasanuddin 3 telah membentuk Tim IT yang bertugas mengelola inovasi pembelajaran, termasuk peluncuran website sekolah ini. Harapan kami, website ini dapat menjadi sumber informasi publik tentang perkembangan SMP Hasanuddin 3, sarana pengembangan diri bagi tenaga edukatif dan peserta didik, serta sebagai jembatan komunikasi antara sekolah dan masyarakat.
            <br><br> Kami akan terus memperbarui informasi secara berkala, dan dukungan dari pengunjung sangat kami harapkan untuk evaluasi dan pengembangan sekolah di masa mendatang.
            <br><br> Terima kasih.
            <br><br> Wassalamu alaikum wr wb.
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
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusmp1.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Fatimatuz Zahro’, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru PAI & Waka Kurikulum</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusmp2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Linatun Nafisah
                    <br>
                    <span class="text-xs text-gray-400">Guru Bahasa Indonesia & BK</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusmp3.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Zubaidah Lestiawati, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru IPA & Koor P5</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusmp4.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Ambar Kismiyarsih, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru Seni Rupa</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusmp5.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Adhiati Susani, S.Sos 
                    <br>
                    <span class="text-xs text-gray-400">Guru Bahasa Jawa & PPKn</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusmp6.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Yenny Kurniawati, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru Bahasa Inggris</span>
                </figcaption>
            </figure>
            <figure class="max-w-lg">
                <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusmp7.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
                <figcaption class="mt-3 text-sm text-center text-black font-bold">
                    Fahri Husaini, S.Pd 
                    <br>
                    <span class="text-xs text-gray-400">Guru PJOK & Kabid.Kesiswaan </span>
                </figcaption>
            </figure>       
        </div>
    </div>
  </section>
  
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
  
  
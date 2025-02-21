<x-layoutsd>

<!-- Carousel Section -->
<div id="carousel" class="relative">
    <div class="overflow-hidden rounded-lg">
        <div class="relative w-full">
            <img src="/img/fotosd2.png" alt="Gambar 1" class="w-full h-100 object-cover"> <!-- Mengatur tinggi gambar -->
            <div class="absolute inset-0 bg-gray-900 bg-opacity-50 flex flex-col items-center justify-center"> <!-- flex-col untuk pengaturan vertikal -->
                <h2 class="text-white text-4xl font-bold mb-4">Selamat Datang di SD NU PUNGKURAN</h2>
                <!-- Tombol Daftar Sekarang -->
                <a href="/loginppdb"
                target="_blank"
                class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-6 rounded-full">Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

{{-- sambutan --}}
<h3 class="py-5 mt-10 text-center text-3xl font-bold text-green-900 dark:text-gray-400">Sambutan Kepala Sekolah</h3> <!-- Margin top ditambahkan di sini -->
<div class="grid grid-cols-1 gap-3 sm:grid-cols-3 mx-20">
    <img class="mb-3 px-20 h-30 w-29 shadow-lg rounded-lg shadow-gray-500/20" src="/img/kepseksd.png" alt="image description">
    <div class="col-span-2">
        <p class="mb-10 px-20 justify-between text-lg font-normal text-gray-500 dark:text-gray-400">
            Assalamu’alaikum warahmatullahi wabarakatuh,
            <br><br> Selamat datang di SD ISLAM NU PUNGKURAN. Kami bersyukur atas dukungan dan kerja sama dari semua pihak dalam mewujudkan visi pendidikan kami. Di sini, kami berkomitmen untuk menyediakan lingkungan belajar yang berkualitas dan berlandaskan nilai-nilai keagamaan.
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
            <br> <br> SD ISLAM NU PUNGKURAN merupakan salah satu sekolah terbaik di Kota Semarang. Kami berkomitmen untuk memberikan pendidikan berkualitas berdasarkan nilai-nilai Islam dan budaya luhur bangsa Indonesia.
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
                    Menjadi lembaga pendidikan yang unggul dalam mencetak generasi yang beriman, bertakwa, berakhlakul karimah, serta mampu bersaing di era global, berlandaskan nilai-nilai Islam Ahlussunnah Wal Jamaah.
                </p>
            </div>

            <!-- Misi Section -->
            <div class="bg-green-200 border border-green-700 rounded-lg p-6 mb-6 w-full">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Misi</h3>
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-4">
                    <li>Menyelenggarakan pendidikan berbasis akhlakul karimah.</li>
                    <li>Meningkatkan kualitas tenaga pendidik profesional dan Islami.</li>
                    <li>Mendorong prestasi akademik dan non-akademik dengan nilai keislaman.</li>
                    <li>Mengintegrasikan ilmu pengetahuan umum dan agama.</li>
                    <li>Membangun lingkungan belajar yang kondusif dan modern.</li>
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
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd1.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Ibu Tina
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd2.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Ibu Widya
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd3.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Ibu Isna
                  <br>
                  <span class="text-xs text-gray-400">Kebersihan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd4.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Ibu Norma
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd5.png" alt="Guru 1"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center  text-black font-bold">
                  Bapak Yusuf
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd6.png" alt="Guru 2"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Bapak Jumanto
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd7.png" alt="Guru 2"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Ibu Ana
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd8.png" alt="Guru 2"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Ibu Heni
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd9.png" alt="Guru 2"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Bapak Zakariya
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd10.png" alt="Guru 2"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center text-black font-bold">
                  Ibu Sulis
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
              </figcaption>
          </figure>
          <figure class="max-w-lg">
              <img class="h-auto w-52 max-h-96 rounded-lg" src="/img/gurusd11.png" alt="Guru 3"> <!-- Ukuran 10x12 -->
              <figcaption class="mt-3 text-sm text-center  text-black font-bold">
                  Ibu Evi
                  <br>
                  <span class="text-xs text-gray-400">Jabatan</span>
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
          <img class="h-400 w-400 rounded-lg" src="/img/galerisd1.png" alt="image description">
      </div>
      <!-- Foto 2 -->
      <div class="rounded-lg overflow-hidden">
          <img class="h-400 w-300 rounded-lg" src="/img/galerisd2.png" alt="image description">
      </div>
      <!-- Foto 3 -->
      <div class="rounded-lg overflow-hidden">
        <img class="h-400 w-400 rounded-lg" src="/img/galerisd3.png" alt="image description">
      </div>
    </div>
  </div>



</section>
</x-layoutsd>


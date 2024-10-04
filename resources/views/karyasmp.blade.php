<x-layoutsmp>
    {{-- Judul Halaman --}}
    <h1 class="py-5 text-center text-3xl font-bold text-green-900 dark:text-gray-400">Karya Siswa</h1>

    {{-- Bagian Lukisan --}}
    <h2 class="py-5 mb-5 text-center text-2xl font-semibold text-green-900 dark:text-gray-400">Lukisan</h2>
    <div class="flex flex-wrap justify-center gap-6 max-w-full">
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-400 w-400 object-cover rounded-lg" src="/img/lukisansd1.png" alt="Najwa -3B">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Najwa - 2A</figcaption>
        </figure>
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-400 w-400 object-cover rounded-lg" src="/img/lukisansd2.png" alt="Lukisan 2">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Am - 3A</figcaption>
        </figure>
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-400 w-400 object-cover rounded-lg" src="/img/lukisansd3.png" alt="Lukisan 3">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Rizki - 4A</figcaption>
        </figure>
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-400 w-400 object-cover rounded-lg" src="/img/lukisansd4.png" alt="Lukisan 4">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Edo - 5A</figcaption>
        </figure>
    </div>


    {{-- Bagian Karya Tulis --}}
    <h2 class="py-5 mt-12 mb-5 text-center text-2xl font-semibold text-green-900 dark:text-gray-400">Karya Tulis</h2>
    <div class="flex flex-wrap justify-center gap-6 max-w-full mb-10"> <!-- Tambahkan 'mb-12' untuk jarak -->
        {{-- Gambar 1 --}}
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-64 w-64 object-cover rounded-lg cursor-pointer hover:opacity-90 transition"
                src="/img/puisisd1.png" alt="Karya Tulis 1" onclick="openModal(this.src)">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Bagas - 3A</figcaption>
        </figure>

        {{-- Gambar 2 --}}
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-64 w-64 object-cover rounded-lg cursor-pointer hover:opacity-90 transition"
                src="/img/puisisd2.png" alt="Karya Tulis 2" onclick="openModal(this.src)">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Syafiq - 4A</figcaption>
        </figure>

        {{-- Gambar 3 --}}
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-64 w-64 object-cover rounded-lg cursor-pointer hover:opacity-90 transition"
                src="/img/puisisd3.png" alt="Karya Tulis 3" onclick="openModal(this.src)">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Rani - 5A</figcaption>
        </figure>

        {{-- Gambar 4 --}}
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-64 w-64 object-cover rounded-lg cursor-pointer hover:opacity-90 transition"
                src="/img/puisisd4.png" alt="Karya Tulis 4" onclick="openModal(this.src)">
            <figcaption class="mt-3 text-sm text-center text-gray-700 dark:text-gray-700">Fiana - 6A</figcaption>
        </figure>
    </div>

    {{-- Modal untuk memperbesar gambar --}}
    <div id="imageModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 hidden z-50">
        <span class="absolute top-5 right-5 text-white text-3xl cursor-pointer" onclick="closeModal()">&times;</span>
        <img id="modalImage" class="max-h-screen max-w-full rounded-lg">
    </div>

    <script>
        // Fungsi untuk membuka modal dengan gambar yang dipilih
        function openModal(src) {
            document.getElementById('modalImage').src = src;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>
</x-layoutsmp>

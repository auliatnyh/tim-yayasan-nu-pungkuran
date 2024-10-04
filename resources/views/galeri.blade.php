<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="text-3xl">Ini adalah Halaman Galeri Femil</h2> --}}
    <h1 class="py-5 text-center text-3xl font-bold text-green-900 dark:text-gray-400 ">Galeri
    </h1>
    <div class="flex flex-wrap justify-center gap-6 max-w-full">
        <figure class="flex flex-col items-center">
            <img class="h-60 w-60 rounded-lg" src="/img/galeri.jpeg" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Fotografi</figcaption>
        </figure>
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-60 w-60 rounded-lg" src="/img/galeri2.jpeg" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Lomba Futsal</figcaption>
        </figure>
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-60 w-60 rounded-lg" src="/img/galeri3.jpeg" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kegiatan Belajar Mengajar
            </figcaption>
        </figure>
    </div>
    </div>
</x-layout>

<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="text-3xl">Ini adalah Halaman Galeri Femil</h2> --}}
    <h1 class="py-5 text-center text-3xl font-bold text-green-900 dark:text-gray-400 ">Galeri
    </h1>
    <div class="flex flex-wrap justify-center gap-6 max-w-full">
        <figure class="flex flex-col items-center">
            <img class="h-60 w-50 rounded-lg" src="/img/galerisd1.png" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kreasi Siswa </figcaption>
        </figure>
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-60 w-50 rounded-lg" src="/img/galerisd2.png" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Upacara Bendera</figcaption>
        </figure>
        <figure class="flex flex-col items-center max-w-lg">
            <img class="h-60 w-50 rounded-lg" src="/img/galerisd3.png" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Jum'at Sehat
            </figcaption>
        </figure>
    </div>
    </div>
</x-layout>

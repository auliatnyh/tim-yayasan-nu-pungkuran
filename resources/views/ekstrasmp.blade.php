<x-layoutsmp>
    {{-- <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="text-3xl">Ini adalah Halaman Galeri Femil</h2> --}}
    <h1 class="py-5 mb-10 text-center text-3xl font-bold text-green-900 dark:text-gray-400 ">Ekstrakurikuler
    </h1>
    <div class="flex flex-wrap justify-center gap-6 max-w-full mb-20">
        <figure data-modal-target="modal1" data-modal-toggle="modal1" class="flex flex-col items-center">
            <img class="h-64 w-64 rounded-lg" src="/img/ekstra1.png" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Kebudayaan Jawa</figcaption>
        </figure>
        <figure data-modal-target="modal2" data-modal-toggle="modal2" class="flex flex-col items-center">
            <img class="h-64 w-64 rounded-lg" src="/img/ekstra2.png" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Bulu tangki</figcaption>
        </figure>
        <figure data-modal-target="modal3" data-modal-toggle="modal3" class="flex flex-col items-center">
            <img class="h-64 w-64 rounded-lg" src="/img/ekstra3.png" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Basket</figcaption>
        </figure>
        <figure data-modal-target="modal4" data-modal-toggle="modal4" class="flex flex-col items-center">
            <img class="h-64 w-64 rounded-lg" src="/img/ekstra4.png" alt="image description">
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Basket</figcaption>
        </figure>
    </div>


    <!--Modal 1-->
    <div id="modal1" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Kebudayaan Jawa
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal1">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <img class="h-50 w-60 rounded-lg" src="/img/ekstra1.png" alt="image description">
                        <div class="col-span-2">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 mb-3">
                                Ekstrakurikuler Kebudayaan Jawa merupakan wadah bagi siswa untuk mempelajari dan
                                melestarikan
                                budaya Jawa, seperti seni tari, gamelan, wayang kulit, dan sastra Jawa. Kegiatan ini
                                bertujuan
                                untuk menumbuhkan rasa cinta terhadap warisan budaya serta meningkatkan keterampilan
                                seni
                                tradisional.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Jadwal latihan : <br>
                                Senin - Jumat : 08.00 - 15.00
                            </p>
                        </div>
                    </div>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 py-1">
                        Juara yang pernah diraih :
                        <br>
                        1 Juara 1 Lomba Karawitan Tingkat Provinsi <bt>
                            2. Penampilan Terbaik dalam Festival Tari Tradisional Nasional <br>
                            3. Juara 2 Lomba Wayang Kulit Pelajar Tingkat Nasional <br>
                            4. Penghargaan Karya Sastra Jawa Terbaik <br>
                            5. Penampilan Terfavorit pada Pagelaran Seni Budaya Daerah
                    </p>
                </div>
            </div>
        </div>
    </div>




    <!--Modal 2-->
    <div id="modal2" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Bulu Tangkis
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <img class="h-50 w-60 rounded-lg" src="/img/ekstra2.png" alt="image description">
                        <div class="col-span-2">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 mb-3">
                                Ekstrakurikuler Kebudayaan Jawa merupakan wadah bagi siswa untuk mempelajari dan
                                melestarikan
                                budaya Jawa, seperti seni tari, gamelan, wayang kulit, dan sastra Jawa. Kegiatan ini
                                bertujuan
                                untuk menumbuhkan rasa cinta terhadap warisan budaya serta meningkatkan keterampilan
                                seni
                                tradisional.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Jadwal latihan : <br>
                                Senin - Jumat : 08.00 - 15.00
                            </p>
                        </div>
                    </div>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 py-1">
                        Juara yang pernah diraih :
                        <br>
                        1 Juara 1 Lomba Karawitan Tingkat Provinsi <bt>
                            2. Penampilan Terbaik dalam Festival Tari Tradisional Nasional <br>
                            3. Juara 2 Lomba Wayang Kulit Pelajar Tingkat Nasional <br>
                            4. Penghargaan Karya Sastra Jawa Terbaik <br>
                            5. Penampilan Terfavorit pada Pagelaran Seni Budaya Daerah
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--Modal 3-->
    <div id="modal3" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Basket
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal3">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <img class="h-50 w-60 rounded-lg" src="/img/ekstra3.png" alt="image description">
                        <div class="col-span-2">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 mb-3">
                                Ekstrakurikuler Kebudayaan Jawa merupakan wadah bagi siswa untuk mempelajari dan
                                melestarikan
                                budaya Jawa, seperti seni tari, gamelan, wayang kulit, dan sastra Jawa. Kegiatan ini
                                bertujuan
                                untuk menumbuhkan rasa cinta terhadap warisan budaya serta meningkatkan keterampilan
                                seni
                                tradisional.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Jadwal latihan : <br>
                                Senin - Jumat : 08.00 - 15.00
                            </p>
                        </div>
                    </div>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 py-1">
                        Juara yang pernah diraih :
                        <br>
                        1 Juara 1 Lomba Karawitan Tingkat Provinsi <bt>
                            2. Penampilan Terbaik dalam Festival Tari Tradisional Nasional <br>
                            3. Juara 2 Lomba Wayang Kulit Pelajar Tingkat Nasional <br>
                            4. Penghargaan Karya Sastra Jawa Terbaik <br>
                            5. Penampilan Terfavorit pada Pagelaran Seni Budaya Daerah
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Modal 4-->
    <div id="modal4" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Basket
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal4">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
                        <img class="h-50 w-60 rounded-lg" src="/img/ekstra4.png" alt="image description">
                        <div class="col-span-2">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 mb-3">
                                Ekstrakurikuler Kebudayaan Jawa merupakan wadah bagi siswa untuk mempelajari dan
                                melestarikan
                                budaya Jawa, seperti seni tari, gamelan, wayang kulit, dan sastra Jawa. Kegiatan ini
                                bertujuan
                                untuk menumbuhkan rasa cinta terhadap warisan budaya serta meningkatkan keterampilan
                                seni
                                tradisional.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Jadwal latihan : <br>
                                Senin - Jumat : 08.00 - 15.00
                            </p>
                        </div>
                    </div>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 py-1">
                        Juara yang pernah diraih :
                        <br>
                        1 Juara 1 Lomba Karawitan Tingkat Provinsi <bt>
                            2. Penampilan Terbaik dalam Festival Tari Tradisional Nasional <br>
                            3. Juara 2 Lomba Wayang Kulit Pelajar Tingkat Nasional <br>
                            4. Penghargaan Karya Sastra Jawa Terbaik <br>
                            5. Penampilan Terfavorit pada Pagelaran Seni Budaya Daerah
                    </p>
                </div>
            </div>
        </div>
    </div>


</x-layoutsmp>

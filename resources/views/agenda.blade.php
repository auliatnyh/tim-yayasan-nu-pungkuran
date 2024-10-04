<x-layout>
    <h1 class="py-5 mb-10 text-center text-3xl font-bold text-green-900 dark:text-gray-400 ">Agenda
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 px-10 mb-10"> 
        <!-- Kalender -->
        <div class="flex flex-auto mx-40" id="datepicker-inline" inline-datepicker data-date="02/25/2024"></div>

        <div class="flex flex-col mx-10 align-center">
            <!-- Kegiatan -->
            <h1 class="text-3xl mx-10 text-center font-bold tracking-tight text-gray-900 dark:text-white"
                style="border-bottom: 1px solid gray; margin-bottom: 20px; padding-bottom: 10px">
                Kegiatan
            </h1>

            <!-- nama kegiatan -->
            <h3 class="mb-2  mx-10 text-l text-left text-gray-500 dark:text-gray-400">Hari Kemerdekaan</h3>
        </div>
    </div>
</x-layout>

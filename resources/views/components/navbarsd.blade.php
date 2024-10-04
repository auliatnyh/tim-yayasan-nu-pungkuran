<header class="bg-green-500 shadow fixed w-full top-0 z-50">
    <div class="py-3 px-4">
        <div class="flex md:order-2 justify-end">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false"
                class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-1 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
        </div>
    </div>
</header>

<!-- Navbar putih tanpa gap -->
<nav class="bg-white fixed w-full z-50 top-12" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-30 lg:px-30 py-2">
        <div class="flex h-30 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-20 w-20" src="/img/logo.png" alt="Your Company">
                </div>
                <ul
                    class="flex flex-col p-4 md:p-0 mt-0 font-lg border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <div class="hidden md:block">
                        <div class="ml-5 px-60 flex item-center items-baseline space-x-4 justify-between">
                            <x-nav-link href="/sd" :active="request()->is('sd')">Beranda</x-nav-link>
                            <x-nav-link href="/programsd" :active="request()->is('programsd')">Program</x-nav-link>
                            <x-nav-link href="/ekstrasd" :active="request()->is('ekstrasd')">Ekstrakulikuler</x-nav-link>
                            <x-nav-link href="/prestasisd" :active="request()->is('prestasisd')">Prestasi</x-nav-link>
                            <x-nav-link href="/karyasd" :active="request()->is('karyasd')">Karya Siswa</x-nav-link>
                            <x-nav-link href="/tatibsd" :active="request()->is('tatibsd')">Tata Tertib</x-nav-link>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>

<main class="mt-36"> 
</main>

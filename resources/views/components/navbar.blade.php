<header class="bg-green-600 shadow fixed w-full top-0 z-50">
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
            {{-- <h1 class="text-3xl font-bold tracking-tight text-white">{{ $slot }}</h1> --}}
        </div>
</header>
{{-- 
<button type="button"
    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
    data-modal-hide="modal1">
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
    </svg>
    <span class="sr-only">Close modal</span>
</button> --}}

<nav class="bg-white fixed w-full z-30 top-12" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-30 lg:px-30 py-2">
        <div class="flex h-30 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-20 w-20" src="/img/logo.png" alt="yayasan">
                </div>
                {{-- beranda --}}
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <div class="hidden md:block">
                        <div class="ml-5 px-60 flex item-center items-baseline space-x-4 justify-between">
                            <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
                            <x-nav-link href="/profil" :active="request()->is('profil')">Tentang Kami</x-nav-link>


                            {{-- beranda end --}}



                            {{-- agar bisa diklik gantian dan diklik dimanapun untuk menutup --}}
                            <div x-data="{ openDropdown: null }"class="ml-5 flex items-baseline space-x-4"
                                @click.outside="openDropdown = null" @scroll.outside="openDropdown = null">



                                {{-- Pendidikan  --}}
                                <div class="relative inline-block">
                                    <div @mouseenter="openDropdown = 'pendidikan'; isHovering = true"
                                        @mouseleave="isHovering = false; setTimeout(() => { if (!isHovering) openDropdown = null }, 300)">
                                        <x-nav-link to="/pendidikan" className="flex items-center">
                                            <button type="button"
                                                class="flex items-center gap-x-1  text-md font-medium leading-5 text-black-500"
                                                aria-expanded="false" id="dropdown-btn-2">
                                                Pendidikan
                                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </x-nav-link>
                                    </div>
                                    <div x-show="openDropdown === 'pendidikan'"
                                        x-transition:enter="transition ease-out duration-200"
                                        x-transition:enter-start="opacity-0 translate-y-1"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-150"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="absolute -left-8 z-10 mt-2 w-40  max-w-md overflow-hidden rounded-xl bg-white shadow-lg ring-1 ring-gray-900/5"
                                        @mouseenter="isHovering = true"
                                        @mouseleave="isHovering = false; setTimeout(() => { if (!isHovering) openDropdown = null }, 200)">
                                        <div class="p-4">
                                            <div @click="selectedOption = 'sd'; openDropdown = null"
                                                class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-2 hover:bg-gray-50">
                                                <div class="flex-auto">
                                                    <a href="/sd" class="block font-semibold text-gray-900">
                                                        SD
                                                    </a>
                                                </div>
                                            </div>
                                            <div @click="selectedOption = 'smp'; openDropdown = null"
                                                class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-2 hover:bg-gray-50">
                                                <div class="flex-auto">
                                                    <a href="/smp" class="block font-semibold text-gray-900">
                                                        SMP
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- pendidikan end --}}

                                {{-- informasi  --}}
                                <div x-data="dropdown - 2" class ="relative inline-block">
                                    <div @mouseenter="openDropdown = 'informasi'; isHovering = true"
                                        @mouseleave="isHovering = false; setTimeout(() => { if (!isHovering) openDropdown = null }, 300)">
                                        <x-nav-link to="/informasi" className="flex items-center">
                                            <button type="button"
                                                class="flex items-center gap-x-1 text-md ont-medium leading-5 text-black-500"
                                                aria-expanded="false" id="dropdown-btn-2">
                                                Informasi
                                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </x-nav-link>
                                    </div>
                                    <div x-show="openDropdown === 'informasi'"
                                        x-transition:enter="transition ease-out duration-200"
                                        x-transition:enter-start="opacity-0 translate-y-1"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        x-transition:leave="transition ease-in duration-150"
                                        x-transition:leave-start="opacity-100 translate-y-0"
                                        x-transition:leave-end="opacity-0 translate-y-1"
                                        class="absolute -left-8 z-10 mt-2 w-40  max-w-md overflow-hidden rounded-xl bg-white shadow-lg ring-1 ring-gray-900/5"
                                        @mouseenter="isHovering = true"
                                        @mouseleave="isHovering = false; setTimeout(() => { if (!isHovering) openDropdown = null }, 200)">
                                        <div class="p-4">
                                            <div @click="selectedOption = 'agenda'; openDropdown = null"
                                                :class="{ 'bg-blue-500 text-white': selectedOption === 'agenda', 'hover:bg-gray-50': selectedOption !== 'agenda' }"
                                                class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-2">
                                                <div class="flex-auto">
                                                    <a href="/agenda" class="block font-semibold text-gray-900">
                                                        Agenda
                                                    </a>
                                                </div>
                                            </div>
                                            <div @click="selectedOption = 'ppdb'; openDropdown = null"
                                                class="group relative flex items-center gap-x-6 rounded-lg p-2 text-sm leading-1 hover:bg-gray-50">
                                                <div class="flex-auto">
                                                    <a href="/ppdb" class="block font-semibold text-gray-900">
                                                        Info PPDB
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="selectedOption" class="mt-2">
                                            <span class="text-sm text-gray-700">Selected: <strong
                                                    x-text="selectedOption"></strong></span>
                                        </div>
                                    </div>
                                </div>
                                <x-nav-link href="/galeri" :active="request()->is('galeri')">Galeri</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">Kontak Kami</x-nav-link>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('dropdown-2', () => ({
                openDropdown: false,
                selectedOption: null,
                selectOption(option) {
                    this.selectedOption = option;
                    this.openDropdown = false;
                    // Navigate to the selected option's route
                    window.location.href = `/${option}`;
                }
            }));
        });
    </script>


    <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click="isOpen = !isOpen"
            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show= "isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                aria-current="page">Home</a>
            <a href="/blog"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
            <a href="/about"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
            <a href="/about"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
            <a href="/contact"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                    <div class="text-sm font-medium leading-none text-gray-400">tom@example.com
                    </div>
                </div>
                {{-- <button type="button"
                    class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button> --}}
            </div>
        </div>
    </div>

</nav>

<main class="mt-36">
</main>

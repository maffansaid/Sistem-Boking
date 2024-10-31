<nav class="bg-transparent w-full fixed z-30">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-[#FBB603] focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 m-auto" id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <a href="#tentang">
                    <li
                        class="bg-[#FBB603] p-3 rounded-[15px] w-full text-center transition transform duration-300 hover:scale-110 hover:bg-[#f9a800] mb-2">
                        <div class="text-black text-sm md:text-lg">Tentang</div>
                    </li>
                </a>
                <a href="#lokasi">
                    <li
                        class="bg-[#FBB603] p-3 rounded-[15px] w-full text-center transition transform duration-300 hover:scale-110 hover:bg-[#f9a800] mb-2">
                        <div class="text-black text-sm md:text-lg">Lokasi</div>
                    </li>
                </a>
                <a href="/UserPemesanan">
                    <li
                        class="bg-[#FBB603] p-3 rounded-[15px] w-full text-center transition transform duration-300 hover:scale-110 hover:bg-[#f9a800] mb-2">
                        <div class="text-black text-sm md:text-lg">Sewa</div>
                    </li>
                </a>
                <a href="#kontak">
                    <li
                        class="bg-[#FBB603] p-3 rounded-[15px] w-full text-center transition transform duration-300 hover:scale-110 hover:bg-[#f9a800] mb-2">
                        <div class="text-black text-sm md:text-lg">Kontak</div>
                    </li>
                </a>
                <li
                    class="bg-[#FBB603] p-3 rounded-[15px] w-full text-center transition transform duration-300 hover:scale-110 hover:bg-[#f9a800] mb-2">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-center w-full text-black rounded text-sm md:text-lg">
                        Informasi
                        <svg class="w-2.5 h-2.5 ms-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-50 hidden font-normal divide-y divide-gray-100 rounded-lg">
                        <ul class="font-medium mt-2" aria-labelledby="dropdownLargeButton">
                            <li
                                class="bg-white md:p-2 rounded-[15px] w-full text-center hover:bg-[#FBB603] text-black hover:text-white transition transform duration-300 hover:scale-110 mb-2">
                                <a href="#jadwal" class="block py-2 px-3 md:p-0 rounded text-sm md:text-lg"
                                    aria-current="page">Jadwal</a>
                            </li>
                            <li
                                class="bg-white md:p-2 rounded-[15px] w-full text-center hover:bg-[#FBB603] text-black hover:text-white transition transform duration-300 hover:scale-110 mb-2">
                                <a href="#galeri" class="block py-2 px-3 md:p-0 rounded text-sm md:text-lg"
                                    aria-current="page">Galeri</a>
                            </li>
                            <li
                                class="bg-white md:p-2 rounded-[15px] w-full text-center hover:bg-[#FBB603] text-black hover:text-white transition transform duration-300 hover:scale-110 mb-2">
                                <a href="#informasi" class="block py-2 px-3 md:p-0 rounded text-sm md:text-lg"
                                    aria-current="page">Informasi</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

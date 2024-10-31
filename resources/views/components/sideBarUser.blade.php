<button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar" aria-controls="cta-button-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm rounded-lg sm:hidden hover:bg-[#FBB603] focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="cta-button-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#D9D9D9]">

        <ul class="space-y-2 font-medium">
            <li class="pb-2">
                <a href="mailto:gorbulutangkislamsel@gmail.com" class="items-center text-gray-900 rounded-lg group ">
                    <img src="/assets/logo_polres.png" alt=""
                        class="w-[80px] h-[60px] md:w-[140px] md:h-[100px] m-auto justify-center items-center flex">
                    <span class="ms-3 flex justify-center text-sm">Polres Lampung-Selatan</span>
                </a>
            </li>

            <li>
                @php
                    $activePagePath1 = ['UserPemesanan'];
                @endphp
                <a href="/UserPemesanan"
                    class="flex items-center p-2 hover:text-white rounded-lg group @if (in_array(Request::path(), $activePagePath1)) text-white rounded-lg bg-[#99FF33]
        @else
            hover:bg-[#99FF33] bg-[#FBB603] hover:text-white @endif">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Bagian Biodata</span>
                </a>
            </li>

            <li>
                <div class="div">
                    <svg class="flex-shrink-0 w-10 h-10 transition duration-75 flex m-auto justify-center items-center"
                        aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M12 6V18M12 18L7 13M12 18L17 13" stroke="#000000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
            </li>

            <li>
                @php
                    $activePagePath2 = ['UserWaktu'];
                @endphp
                <a href="/UserWaktu"
                    class="flex items-center p-2 hover:text-white rounded-lg group @if (in_array(Request::path(), $activePagePath2)) text-white rounded-lg bg-[#99FF33]
        @else
            hover:bg-[#99FF33] bg-[#FBB603] hover:text-white @endif">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" viewBox="0 0 32 32" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M16 9V16.005L19 19.002M10 3V1.505C10 1.229 10.224 1 10.5 1H21.5C21.776 1 22 1.229 22 1.505V3M22 29V30.505C22 30.781 21.776 31 21.5 31H10.5C10.224 31 10 30.781 10 30.505V29M27 16.0049C27 9.9299 22.075 5.0049 16 5.0049C9.925 5.0049 5 9.9299 5 16.0049C5 22.0799 9.925 27.0049 16 27.0049C22.075 27.0049 27 22.0799 27 16.0049Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Bagian Waktu</span>
                </a>
            </li>

            <li>
                <div class="div">
                    <svg class="flex-shrink-0 w-10 h-10 transition duration-75 flex m-auto justify-center items-center"
                        aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M12 6V18M12 18L7 13M12 18L17 13" stroke="#000000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
            </li>

            <li>
                @php
                    $activePagePath3 = ['UserPembayaran'];
                @endphp
                <a href="/UserPembayaran"
                    class="flex items-center p-2 hover:text-white rounded-lg group @if (in_array(Request::path(), $activePagePath3)) text-white rounded-lg bg-[#99FF33]
        @else
            hover:bg-[#99FF33] bg-[#FBB603] hover:text-white @endif">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" version="1.1"
                        id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 32 32" xml:space="preserve" fill="currentColor">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                    stroke: currentColor;
                                    stroke-width: 2;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-miterlimit: 10;
                                }

                                .st1 {
                                    fill: none;
                                    stroke: currentColor;
                                    stroke-width: 2;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-miterlimit: 10;
                                    stroke-dasharray: 3;
                                }

                                .st2 {
                                    fill: none;
                                    stroke: currentColor;
                                    stroke-width: 2;
                                    stroke-linejoin: round;
                                    stroke-miterlimit: 10;
                                }

                                .st3 {
                                    fill: none;
                                }
                            </style>
                            <path class="st0"
                                d="M6,7L6,7c-1.7,0-3,1.3-3,3v16c0,1.7,1.3,3,3,3h10c1.7,0,3-1.3,3-3V10c0-1.7-1.3-3-3-3h0">
                            </path>
                            <path class="st0" d="M6,5v12h10V5c0-1.1-0.9-2-2-2H4C5.1,3,6,3.9,6,5z"></path>
                            <line class="st0" x1="8" y1="25" x2="14" y2="25">
                            </line>
                            <path class="st0" d="M19,10h8c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2h-7"></path>
                            <line class="st0" x1="29" y1="14" x2="20" y2="14">
                            </line>
                            <rect x="23" y="18" transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 44 -4)"
                                class="st0" width="2" height="4"></rect>
                            <line class="st0" x1="11" y1="6" x2="11" y2="7">
                            </line>
                            <line class="st0" x1="11" y1="13" x2="11" y2="14">
                            </line>
                            <path class="st0"
                                d="M12,7h-1.5C9.7,7,9,7.7,9,8.5v0C9,9.3,9.7,10,10.5,10h1c0.8,0,1.5,0.7,1.5,1.5v0c0,0.8-0.7,1.5-1.5,1.5H10">
                            </path>
                            <rect x="-72" y="-432" class="st3" width="536" height="680"></rect>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Bagian Pembayaran</span>
                </a>
            </li>

            <li>
                <div class="div">
                    <svg class="flex-shrink-0 w-10 h-10 transition duration-75 flex m-auto justify-center items-center"
                        aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M12 6V18M12 18L7 13M12 18L17 13" stroke="#000000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
            </li>

            <li>
                @php
                    $activePagePath4 = ['UserSelesai'];
                @endphp
                <a href="/UserSelesai"
                    class="flex items-center p-2 hover:text-white rounded-lg group @if (in_array(Request::path(), $activePagePath4)) text-white rounded-lg bg-[#99FF33]
        @else
            hover:bg-[#99FF33] bg-[#FBB603] hover:text-white @endif">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" viewBox="0 0 20 20"
                        version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        fill="currentColor">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>finish_line [#103]</title>
                            <desc>Created with Sketch.</desc>
                            <defs> </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="currentColor"
                                fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-260.000000, -7759.000000)"
                                    fill="currentColor">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path
                                            d="M214,7611 L218,7611 L218,7607 L214,7607 L214,7611 Z M210,7607 L214,7607 L214,7603 L210,7603 L210,7607 Z M214,7603 L218,7603 L218,7599 L214,7599 L214,7603 Z M222,7599 L222,7603 L218,7603 L218,7607 L222,7607 L222,7611 L224,7611 L224,7599 L222,7599 Z M206,7607 L210,7607 L210,7611 L206,7611 L206,7619 L204,7619 L204,7599 L210,7599 L210,7603 L206,7603 L206,7607 Z"
                                            id="finish_line-[#103]"> </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Selesai</span>
                </a>
            </li>

        </ul>

        <ul class="pt-4 mt-4 space-y-2 font-medium border-t-2 border-gray-200 dark:border-gray-700">
            <li>
                <a href="/"
                    class="flex items-center p-2 bg-[#FBB603] rounded-lg hover:bg-[#99FF33] group w-fit m-auto text-black hover:text-white">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" fill="currentColor"
                        viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M222.927 580.115l301.354 328.512c24.354 28.708 20.825 71.724-7.883 96.078s-71.724 20.825-96.078-7.883L19.576 559.963a67.846 67.846 0 01-13.784-20.022 68.03 68.03 0 01-5.977-29.488l.001-.063a68.343 68.343 0 017.265-29.134 68.28 68.28 0 011.384-2.6 67.59 67.59 0 0110.102-13.687L429.966 21.113c25.592-27.611 68.721-29.247 96.331-3.656s29.247 68.721 3.656 96.331L224.088 443.784h730.46c37.647 0 68.166 30.519 68.166 68.166s-30.519 68.166-68.166 68.166H222.927z">
                            </path>
                        </g>
                    </svg>
                    <span class="flex-1 ms-3 ">Home</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

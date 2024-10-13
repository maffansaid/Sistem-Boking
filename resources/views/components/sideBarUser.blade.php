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
            <li>
                <a href="#" class="items-center p-2 text-gray-900 rounded-lg group">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="w-20 h-20 flex justify-center m-auto">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M12.12 12.78C12.05 12.77 11.96 12.77 11.88 12.78C10.12 12.72 8.71997 11.28 8.71997 9.50998C8.71997 7.69998 10.18 6.22998 12 6.22998C13.81 6.22998 15.28 7.69998 15.28 9.50998C15.27 11.28 13.88 12.72 12.12 12.78Z"
                                stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M18.74 19.3801C16.96 21.0101 14.6 22.0001 12 22.0001C9.40001 22.0001 7.04001 21.0101 5.26001 19.3801C5.36001 18.4401 5.96001 17.5201 7.03001 16.8001C9.77001 14.9801 14.25 14.9801 16.97 16.8001C18.04 17.5201 18.64 18.4401 18.74 19.3801Z"
                                stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <span class="ms-3 flex justify-center text-sm">muhammadaffansaid@gmail.com</span>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath1 = ['UserPemesanan']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
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
                    // path halaman aktif
                    $activePagePath2 = ['UserWaktu']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
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
                    // path halaman aktif
                    $activePagePath3 = ['UserPembayaran']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
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
                    // path halaman aktif
                    $activePagePath4 = ['UserSelesai']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
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
                            <g id="Page-1" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
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
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="/Home"
                    class="flex items-center p-2 text-white bg-[#A40000] hover:text-white rounded-lg hover:bg-[#A40000] group">
                    <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                        <path
                            d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                        <path
                            d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

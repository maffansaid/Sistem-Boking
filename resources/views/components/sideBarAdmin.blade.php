<button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar" aria-controls="cta-button-sidebar" type="button" class="ms-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm hover:bg-[#FBB603] focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600 sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="cta-button-sidebar" class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-[#D9D9D9] px-3 py-4">

        <ul class="space-y-2 font-medium">
            <li class="pb-2">
                <a href="mailto:gorbulutangkislamsel@gmail.com" class="group items-center rounded-lg text-gray-900">
                    <img src="/assets/logo_polres.png" alt="" class="m-auto flex h-[60px] w-[80px] items-center justify-center md:h-[100px] md:w-[140px]">
                    <span class="ms-3 flex justify-center text-sm">Polres Lampung-Selatan</span>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath1 = ['BagianInformasi']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
                @endphp
                <a href="/BagianInformasi" class="@if (in_array(Request::path(), $activePagePath1)) text-white rounded-lg bg-[#FBB603]
        @else
            hover:bg-[#FBB603] hover:text-white @endif group flex items-center rounded-lg p-2 hover:text-white">
                    <svg class="h-5 w-5 flex-shrink-0 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="ms-3 flex-1 whitespace-nowrap">Bagian Informasi</span>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath2 = ['BagianWaktu', 'BagianWaktu2']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
                @endphp
                <a href="/BagianWaktu" class="@if (in_array(Request::path(), $activePagePath2)) text-white rounded-lg bg-[#FBB603]
        @else
            hover:bg-[#FBB603] hover:text-white @endif group flex items-center rounded-lg p-2 hover:text-white">
                    <svg class="h-5 w-5 flex-shrink-0 transition duration-75" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M16 9V16.005L19 19.002M10 3V1.505C10 1.229 10.224 1 10.5 1H21.5C21.776 1 22 1.229 22 1.505V3M22 29V30.505C22 30.781 21.776 31 21.5 31H10.5C10.224 31 10 30.781 10 30.505V29M27 16.0049C27 9.9299 22.075 5.0049 16 5.0049C9.925 5.0049 5 9.9299 5 16.0049C5 22.0799 9.925 27.0049 16 27.0049C22.075 27.0049 27 22.0799 27 16.0049Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <span class="ms-3 flex-1 whitespace-nowrap">Bagian Waktu</span>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath3 = ['BagianPermintaan', 'BagianPermintaan2']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
                @endphp
                <a href="/BagianPermintaan" class="@if (in_array(Request::path(), $activePagePath3)) text-white rounded-lg bg-[#FBB603]
        @else
            hover:bg-[#FBB603] hover:text-white @endif group flex items-center rounded-lg p-2 hover:text-white">
                    <svg fill="currentColor" viewBox="0 0 16 16" id="request-approval-16px" class="h-5 w-5 flex-shrink-0 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="Path_47" data-name="Path 47" d="M-19,12a2,2,0,0,0,2-2,2,2,0,0,0-2-2,2,2,0,0,0-2,2A2,2,0,0,0-19,12Zm0-3a1,1,0,0,1,1,1,1,1,0,0,1-1,1,1,1,0,0,1-1-1A1,1,0,0,1-19,9Zm2.5,4h-5A2.5,2.5,0,0,0-24,15.5,1.5,1.5,0,0,0-22.5,17h7A1.5,1.5,0,0,0-14,15.5,2.5,2.5,0,0,0-16.5,13Zm1,3h-7a.5.5,0,0,1-.5-.5A1.5,1.5,0,0,1-21.5,14h5A1.5,1.5,0,0,1-15,15.5.5.5,0,0,1-15.5,16ZM-8,3.5v5A2.5,2.5,0,0,1-10.5,11h-2.793l-1.853,1.854A.5.5,0,0,1-15.5,13a.489.489,0,0,1-.191-.038A.5.5,0,0,1-16,12.5v-2a.5.5,0,0,1,.5-.5.5.5,0,0,1,.5.5v.793l1.146-1.147A.5.5,0,0,1-13.5,10h3A1.5,1.5,0,0,0-9,8.5v-5A1.5,1.5,0,0,0-10.5,2h-7A1.5,1.5,0,0,0-19,3.5v3a.5.5,0,0,1-.5.5.5.5,0,0,1-.5-.5v-3A2.5,2.5,0,0,1-17.5,1h7A2.5,2.5,0,0,1-8,3.5Zm-6.854,4.354-2-2a.5.5,0,0,1,0-.708.5.5,0,0,1,.708,0L-14.5,6.793l2.646-2.647a.5.5,0,0,1,.708,0,.5.5,0,0,1,0,.708l-3,3A.5.5,0,0,1-14.5,8,.5.5,0,0,1-14.854,7.854Z" transform="translate(24 -1)"></path>
                        </g>
                    </svg>
                    <span class="ms-3 flex-1 whitespace-nowrap">Bagian Permintaan</span>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath4 = ['BagianRiwayat', 'BagianRiwayat/lihatRiwayat']; // path halaman aktif
                    // if (isset($id)) {
                    //     array_push($activePagePath1, 'loginAdmin/edit/' . $id);
                    // }
                @endphp
                <a href="/BagianRiwayat" class="@if (in_array(Request::path(), $activePagePath4)) text-white rounded-lg bg-[#FBB603]
        @else
            hover:bg-[#FBB603] hover:text-white @endif group flex items-center rounded-lg p-2 hover:text-white">
                    <svg class="h-5 w-5 flex-shrink-0 transition duration-75" aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: currentColor;
                                        stroke: #000000;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 20px;
                                    }
                                </style>
                            </defs>
                            <g data-name="Layer 2" id="Layer_2">
                                <g data-name="E425, History, log, manuscript" id="E425_History_log_manuscript">
                                    <path class="cls-1" d="M75.11,117h0A21.34,21.34,0,0,1,53.83,95.57V31.39A21.34,21.34,0,0,1,75.11,10h0A21.34,21.34,0,0,1,96.39,31.39V95.57A21.34,21.34,0,0,1,75.11,117Z">
                                    </path>
                                    <rect class="cls-1" height="64.17" width="319.22" x="96.39" y="31.39"></rect>
                                    <rect class="cls-1" height="320.87" width="319.22" x="96.39" y="95.57"></rect>
                                    <path class="cls-1" d="M34.34,39.08H53.83a0,0,0,0,1,0,0v48.8a0,0,0,0,1,0,0H34.34A24.34,24.34,0,0,1,10,63.54v-.13A24.34,24.34,0,0,1,34.34,39.08Z">
                                    </path>
                                    <path class="cls-1" d="M436.89,117h0a21.34,21.34,0,0,0,21.28-21.39V31.39A21.34,21.34,0,0,0,436.89,10h0a21.34,21.34,0,0,0-21.28,21.39V95.57A21.34,21.34,0,0,0,436.89,117Z">
                                    </path>
                                    <path class="cls-1" d="M482.51,39.08H502a0,0,0,0,1,0,0v48.8a0,0,0,0,1,0,0H482.51a24.34,24.34,0,0,1-24.34-24.34v-.13a24.34,24.34,0,0,1,24.34-24.34Z" transform="translate(960.17 126.96) rotate(-180)"></path>
                                    <path class="cls-1" d="M75.11,395h0a21.34,21.34,0,0,0-21.28,21.39v64.18A21.34,21.34,0,0,0,75.11,502h0a21.34,21.34,0,0,0,21.28-21.39V416.43A21.34,21.34,0,0,0,75.11,395Z">
                                    </path>
                                    <rect class="cls-1" height="64.17" width="319.22" x="96.39" y="416.43"></rect>
                                    <path class="cls-1" d="M34.34,424.12H53.83a0,0,0,0,1,0,0v48.8a0,0,0,0,1,0,0H34.34A24.34,24.34,0,0,1,10,448.58v-.13A24.34,24.34,0,0,1,34.34,424.12Z">
                                    </path>
                                    <path class="cls-1" d="M436.89,395h0a21.34,21.34,0,0,1,21.28,21.39v64.18A21.34,21.34,0,0,1,436.89,502h0a21.34,21.34,0,0,1-21.28-21.39V416.43A21.34,21.34,0,0,1,436.89,395Z">
                                    </path>
                                    <path class="cls-1" d="M482.51,424.12H502a0,0,0,0,1,0,0v48.8a0,0,0,0,1,0,0H482.51a24.34,24.34,0,0,1-24.34-24.34v-.13a24.34,24.34,0,0,1,24.34-24.34Z" transform="translate(960.17 897.04) rotate(-180)"></path>
                                    <line class="cls-1" x1="143.41" x2="256" y1="140.11" y2="140.11"></line>
                                    <line class="cls-1" x1="143.41" x2="371.26" y1="186.47" y2="186.47"></line>
                                    <line class="cls-1" x1="143.41" x2="371.26" y1="232.82" y2="232.82"></line>
                                    <line class="cls-1" x1="143.41" x2="371.26" y1="279.18" y2="279.18"></line>
                                    <line class="cls-1" x1="143.41" x2="371.26" y1="325.53" y2="325.53"></line>
                                    <line class="cls-1" x1="256" x2="371.26" y1="371.89" y2="371.89"></line>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="ms-3 flex-1 whitespace-nowrap">Bagian Riwayat</span>
                </a>
            </li>
        </ul>
        <ul class="mt-4 space-y-2 border-t border-gray-200 pt-4 font-medium dark:border-gray-700">
            <li>
                <a href="/Logout" class="group flex items-center rounded-lg bg-[#A40000] p-2 text-white hover:bg-[#A40000] hover:text-white">
                    <svg class="h-5 w-5 flex-shrink-0 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                        <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                        <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                    </svg>
                    <span class="ms-3 flex-1 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

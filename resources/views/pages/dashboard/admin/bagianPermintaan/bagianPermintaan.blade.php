<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Permintaan Admin</title>
    <link rel="icon" type="image/x-icon" href="/assets/logo_polres.png">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}
</head>

<body>
    <x-sideBarAdmin />
    <div class="min-h-screen bg-neutral-200 p-4 sm:ml-64">

    <!-- Pop-up Messages -->
    @if(session('success') || session('error'))
        <div id="popup-message"
            class="fixed top-4 left-1/2 z-50 w-11/12 max-w-sm -translate-x-1/2 transform rounded-lg p-4 shadow-lg 
                transition-all duration-500 ease-in-out opacity-100 bg-{{ session('success') ? 'green-500' : 'red-500' }} 
                text-white slide-in">
            <!-- Ikon -->
            <div class="flex items-center space-x-3">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg" stroke="white">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M12.4 21.75C9.81413 21.75 7.33418 20.7228 5.5057 18.8943C3.67722 17.0658 2.64999 14.5859 2.64999 12C2.64999 9.41414 3.67722 6.93419 5.5057 5.10571C7.33418 3.27723 9.81413 2.25 12.4 2.25C12.5989 2.25 12.7897 2.32902 12.9303 2.46967C13.071 2.61032 13.15 2.80109 13.15 3C13.15 3.19891 13.071 3.38968 12.9303 3.53033C12.7897 3.67098 12.5989 3.75 12.4 3.75C10.212 3.75 8.11354 4.61919 6.56636 6.16637C5.01919 7.71354 4.14999 9.81196 4.14999 12C4.14999 14.188 5.01919 16.2865 6.56636 17.8336C8.11354 19.3808 10.212 20.25 12.4 20.25C13.4932 20.2536 14.5761 20.0377 15.5844 19.6151C16.5927 19.1926 17.5059 18.5719 18.27 17.79C18.4106 17.6481 18.6017 17.5679 18.8015 17.5669C19.0012 17.566 19.1931 17.6444 19.335 17.785C19.4769 17.9256 19.5571 18.1167 19.5581 18.3165C19.559 18.5162 19.4806 18.7081 19.34 18.85C18.4349 19.7715 17.3547 20.5028 16.1629 21.0008C14.971 21.4989 13.6917 21.7536 12.4 21.75Z" fill="white"></path>
                            <path d="M12.1 15.45C12.0015 15.4505 11.9038 15.4312 11.8128 15.3935C11.7218 15.3557 11.6392 15.3001 11.57 15.23L7.56999 11.23C7.43751 11.0878 7.36539 10.8998 7.36881 10.7055C7.37224 10.5112 7.45096 10.3258 7.58837 10.1884C7.72578 10.051 7.91117 9.97225 8.10547 9.96882C8.29977 9.9654 8.48782 10.0375 8.62999 10.17L12.1 13.64L20.1 5.64C20.1687 5.56631 20.2515 5.50721 20.3435 5.46622C20.4355 5.42523 20.5348 5.40318 20.6355 5.40141C20.7362 5.39963 20.8362 5.41816 20.9296 5.45588C21.023 5.4936 21.1078 5.54974 21.179 5.62096C21.2502 5.69218 21.3064 5.77701 21.3441 5.8704C21.3818 5.96379 21.4004 6.06382 21.3986 6.16452C21.3968 6.26522 21.3748 6.36454 21.3338 6.45654C21.2928 6.54854 21.2337 6.63134 21.16 6.7L12.66 15.2C12.5904 15.2798 12.5042 15.3435 12.4075 15.3867C12.3108 15.4298 12.2059 15.4514 12.1 15.45Z" fill="white"></path>
                        </g>
                    </svg>
                </div>
                <div class="flex-1">
                    <!-- Pesan -->
                    <p class="font-semibold text-center">{{ session('success') ?? session('error') }}</p>
                </div>
                <!-- Tombol Close -->
                <button id="close-button" class="text-white hover:text-gray-800">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        @endif

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const popup = document.getElementById('popup-message');
                const closeButton = document.getElementById('close-button');

                // Hilangkan otomatis setelah 3 detik
                setTimeout(() => {
                    if (popup) {
                        popup.classList.add('opacity-0', '-translate-y-4');
                        setTimeout(() => popup.remove(), 300);
                    }
                }, 3000);

                if (closeButton) {
                    closeButton.addEventListener('click', () => {
                        popup.classList.add('opacity-0', '-translate-y-4');
                        setTimeout(() => popup.remove(), 300);
                    });
                }
            });
        </script>

        <div class="m-5 lg:m-20">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-black">
                Daftar Permintaan</div>
            <div class="md:flex md:justify-between">
                <div class="flex gap-4 md:justify-start">
                    <form class="flex w-full flex-col">
                        <label for="dateInput" class="mb-1 text-xs font-semibold text-black md:text-sm">Tanggal</label>
                        <input name="tanggal" type="date" id="dateInput" class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm" placeholder="" value="{{ $tanggal?->format('Y-m-d') ?? '' }}" onchange="this.form.submit()" />
                    </form>
                    <div class="flex w-full flex-col">
                        <label for="dayInput" class="mb-1 text-xs font-semibold text-black md:text-sm">Hari</label>
                        <input type="text" id="dayInput" name="" class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm" placeholder="Hari" readonly>
                    </div>
                </div>
                <script>
                    window.onload = () => {
                        updateDay();
                    }

                    function updateDay() {
                        const dateInput = document.getElementById('dateInput').value;
                        const dayInput = document.getElementById('dayInput');

                        if (dateInput) {
                            const date = new Date(dateInput);
                            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                            const day = days[date.getUTCDay()];
                            dayInput.value = day;
                        } else {
                            dayInput.value = '';
                        }
                    }
                </script>
            </div>
            <div class="relative mt-4 overflow-x-auto">
                <table class="w-full text-center text-sm text-black rtl:text-right">
                    <thead class="bg-[#FBB603] text-xs font-bold uppercase text-black">
                        <tr>
                            <th scope="col" class="rounded-tl-lg px-2 py-1">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama PB
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jadwal
                            </th>
                            <th scope="col" class="rounded-tr-lg px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $item)
                            <tr class="border-b border-[#FBB603] bg-white">
                                <th scope="row" class="whitespace-nowrap px-2 py-1 font-medium text-black">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->nama_pb }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->tanggal }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Str::substr($item->waktuAwal->waktu, 0, 5) }}-{{ Str::substr($item->waktuAkhir->waktu, 0, 5) }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="m-auto flex justify-center justify-items-center gap-2 text-center">
                                        <a href="/BagianPermintaan/{{ $item->id }}/detail" title="lihat">
                                            <div class="rounded-md bg-[#FA8F21] p-1 hover:bg-[#D87815] dark:bg-[#FA8F21] dark:hover:bg-[#D87815]">
                                                <x-svg-lihat />
                                            </div>
                                        </a>
                                        <div class="div">
                                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="delete-button cursor-pointer rounded-md bg-[#FF0000] p-1 hover:bg-[#D51717]" title="Delete" type="button" onclick="setDeleteId({{ $item->id }})">
                                                <x-svg-silang />
                                            </button>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="popup-modal" tabindex="-1" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-md p-4">
            <div class="relative rounded-lg bg-white shadow">
                <button type="button" class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900" data-modal-hide="popup-modal">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <form method="POST" class="p-4 text-center md:p-5">
                    @method('DELETE')
                    @csrf
                    <h3 class="mb-5 text-lg font-bold text-black">
                        Apakah anda yakin mengapus permintaan ?</h3>
                    <div class="col-span-2">
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-900">Masukkan
                            Pesan</label>
                        <input type="text" name="pesan" id="judul" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Masukkan Pesan" required="">
                    </div>
                    <div class="flex justify-between">
                        <div class="div">
                            <div class="mt-5 block rounded-lg bg-[#FBB603] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <div class="flex gap-2">
                                    <button data-modal-hide="popup-modal" class="div">Batal</button>
                                </div>
                            </div>
                        </div>
                        <div class="div">
                            <input type="hidden" name="id" id="delete-id">
                            <button type="submit" class="mt-5 block rounded-lg bg-[#FBB603] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300">
                                Konfirmasi
                            </button>
                            <div id="popUp-modal-simpan" tabindex="-1" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                <div class="relative max-h-full w-full max-w-md p-4">
                                    <div class="relative rounded-lg bg-white shadow">
                                        <button type="button" class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900" data-modal-hide="popUp-modal-simpan">
                                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close
                                                modal</span>
                                        </button>
                                        <div class="p-4 text-center md:p-5">
                                            <div class="bg-transparent">
                                                <svg class="mx-auto mb-4 h-12 w-12 bg-transparent" fill="#99FF33" viewBox="-7.6 0 93.973 93.973" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path id="checklist2" d="M572.822,452.824c-2.939-1.625-3.463-5.666-3.705-9.985.841-16.276.252-33.982.856-50.5.266-5.442.043-11.367.851-16.265,1.176-1.867,3.227-2.86,4.854-4.279a109.4,109.4,0,0,1,22.54,1.142c.8-.429.992-1.478,1.139-2.57.52-.616-.056-2.334.569-2.85a23.764,23.764,0,0,1,.572-6.561,5.687,5.687,0,0,1,3.707-1.428c.463.08.492-.269.858-.285a14.671,14.671,0,0,0,4.277-.045,14.264,14.264,0,0,1,4.854.045c2.186.547,6.295.555,7.988,2.283,1.182,2.821.142,6.524.285,9.987,3.08.461,6.59-.725,9.982-.859.393-.56,1.748-.154,2.281-.57a2.386,2.386,0,0,0,1.359-.13,2.408,2.408,0,0,1,1.213-.155,30.729,30.729,0,0,1,5.418-.284c1.285.423,1.638,1.783,2.281,2.85.693,1.022.949,2.475,1.713,3.424q1.069,18.047.857,37.375c0,6.365-.106,12.852.285,18.828-.117,3.021.276,6.553-.285,9.131.006,3.146-.131,6.144-1.144,8.271-1.02.881-2.834.967-4.847.86a18.968,18.968,0,0,1-5.135.568c-3.088.629-7.386.219-10.556,0-9.037.283-17.553,1.088-26.248,1.711-6.028.194-12.712.45-19.036.45C577.92,452.987,575.3,452.941,572.822,452.824Zm17.689-5.992c3.194-.025,6.414-.014,9.591,0,2.945.011,5.853.021,8.668,0a1.437,1.437,0,0,0,.923-.158,1.458,1.458,0,0,1,1.076-.128c10.912-.026,20.875-.994,31.1-1.711-.6-20.785-.334-42.856.285-63.337a8.98,8.98,0,0,0-.285-5.705c-2.308-1.552-5.967-.067-8.56.572.043,4.047,3.07,8.377.857,11.982a266.843,266.843,0,0,1-44.79.857c-2.948-3.138-1.35-10.826-5.135-13.126a19.431,19.431,0,0,1-4.849.287c-.184,1.814-.832,3.164-.858,5.134a7.173,7.173,0,0,0-.285,2.856c-.832.214.258,2.349-.57,2.564.222,2.316-.412,3.775-.285,5.994a10.031,10.031,0,0,0-.284,2.854c.4,1.089-.747,2.076,0,2.566.615-1.666,1.2-3.361,3.709-3.137.083.581.769.559.856,1.14-2.478,3.894-3.673,9.072-5.423,13.693.183,1.055-.368,2.842.287,3.425.68-1.89,1.231-3.906,4.28-3.425.445.41.992.716,1.139,1.426.146,1.67-1,2.049-1.139,3.424-.554.968-.59,2.454-1.144,3.424-.4,2.638-1.45,4.635-1.708,7.416.139.143.468-.049.858-.239.578-.284,1.288-.567,1.708.239-.6,3.011-1.785,5.443-2.283,8.56-.658,1.149-.767,2.849-1.427,3.992.282,1.717-1.666,2.7-.571,4.284a26.919,26.919,0,0,1,2.569-4.284,23.787,23.787,0,0,1,1.427-1.994c.678-.556.777-1.695,2.283-1.427.608.815-.414,1.912-.856,2.569-.073,1.354-.876,1.976-1.142,3.137-.816,2.037-1.595,4.111-2.283,6.275h3.425c1.546-1.117,1.694-3.627,3.993-3.992.655.689-.292,1.385-.285,2.282-.473,0-.16.791-.572.856.184.623-.806.908.287.855C586.779,446.938,588.674,446.85,590.512,446.832Zm13.979-81.309c-.067,1.876.5,3.111.286,5.134-.555,2.488-.969,5.117-3.137,5.992-2.25.317-4.424.711-6.846.858-.074,2.683.285,5.8-.571,7.7a2.413,2.413,0,0,0,1.42.032,5.878,5.878,0,0,1,1.717-.032,17.611,17.611,0,0,0,3.712-.285c1.424-.042,2.912-.021,4.4,0a48.789,48.789,0,0,0,7.864-.286c.765-.026,1.57-.013,2.375,0a19.249,19.249,0,0,0,4.757-.286,30.093,30.093,0,0,0,9.13,0,72.754,72.754,0,0,1,0-8.276,11.32,11.32,0,0,0-4.015-.287,23.591,23.591,0,0,1-2.548,0c-1.646-.539-4.492.121-5.135-1.427-.113-3.2.815-6.416.284-9.13a31.229,31.229,0,0,0-7.414-.853C608.9,364.986,605.779,364.34,604.49,365.523Zm-5.418,69.9c-.486-.559-.669-1.428-1.429-1.711.2-.766-.589-.551-.854-.855-.245-.231-.172-.782-.572-.858-.68-1.408-1.813-2.37-2.567-3.707-1.785-2.4-3.7-4.672-4.851-7.7a17.5,17.5,0,0,1,4.568-2.854c1.016-1.359,2.958-1.795,4.85-2.283,2.394.645,3.16,2.926,4.277,4.85a6.727,6.727,0,0,1,1.711,2.853,26.022,26.022,0,0,0,2.283,2,5.176,5.176,0,0,0,2.282-2c1.352-.076,1.607-1.248,2.567-1.711a36.859,36.859,0,0,1,4-4.849c1.43-1.424,2.567-3.139,3.992-4.565a63.254,63.254,0,0,1,9.989-7.421,1.841,1.841,0,0,0,1.423-.283c.332,1.822.051,2.592,0,4.565-.945,1.431-1.314,3.441-2.566,4.566-.627,1.749-2.022,2.731-2.854,4.278-2.306,2.352-4.3,5.019-6.56,7.418-.2.881-1.278,1.065-1.715,2-.459.678-1.022,1.256-1.426,2-1.263,1.114-2.078,2.675-3.422,3.711a50.428,50.428,0,0,1-6.562,7.417C602.688,439.412,601.371,436.926,599.072,435.42Zm4.278-54.205c-.514-.512-1.362-1.633-.856-2.282,1.346-.014,2.16.5,3.425.57,5.172-.057,9.35-1.107,14.83-.856.482.567,1.639.458,2,1.143.779-.209.574.565,1.143.568-.06.489.489.739,0,.858,0,1.789-2.174,1.662-3.425,1.428a38.436,38.436,0,0,1-4.565-.856c-4.09-.289-6.638.968-10.269,1.139A3.3,3.3,0,0,1,603.35,381.215Zm3.71-8.561c-.066-1.205.438-1.841.569-2.851,1.048-1.435,4.4-1.931,6.277-.856.418.914,1.078,1.584.856,3.139a5.384,5.384,0,0,1-3.424,3.707C609.5,375.16,607.867,374.322,607.06,372.654Z" transform="translate(-569.117 -359.013)">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500">
                                                Berhasil Simpan Data</h3>
                                            <button data-modal-hide="popUp-modal-simpan" type="submit" class="inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300">
                                                Mengerti
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var dateTimeInput = document.getElementById('DateTime');

        function setDeleteId(id) {
            document.getElementById('delete-id').value = id;
        }

        function setMinDateTime() {
            var now = new Date();
            var year = now.getFullYear();
            var month = (now.getMonth() + 1).toString().padStart(2, '0');
            var day = now.getDate().toString().padStart(2, '0');
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');

            var currentDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

            dateTimeInput.min = currentDateTime;
        }

        setMinDateTime();

        dateTimeInput.addEventListener('focus', setMinDateTime);
    </script>
</body>

</html>

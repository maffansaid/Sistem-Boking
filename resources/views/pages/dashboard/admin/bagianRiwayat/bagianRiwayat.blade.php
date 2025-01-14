<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Riwayat Admin</title>
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
        <div class="m-5 lg:m-20">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-black">
                Daftar Riwayat</div>
            <div class="md:flex md:justify-between space-y-2">
                <div class="md:flex gap-4 md:justify-start">
                    <form class="flex w-fit flex-col">
                        <label for="dateInput" class="mb-1 text-xs font-semibold text-black md:text-sm">Tanggal</label>
                        <input name="tanggal" type="date" id="dateInput" class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm" placeholder="" value="{{ $tanggal?->format('Y-m-d') ?? '' }}" onchange="this.form.submit()" />
                    </form>
                    <div class="flex w-1/2 flex-col">
                        <label for="dayInput" class="mb-1 text-xs font-semibold text-black md:text-sm">Hari</label>
                        <input type="text" id="dayInput" name="" class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm" placeholder="Hari" readonly>
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="dayInput" class="mb-1 text-xs font-semibold text-black md:text-sm">Pencarian</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full rounded-lg border bg-white p-3 pl-10 text-xs text-black shadow-sm focus:outline-none md:text-sm" placeholder="Cari..." required />
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="countries" class="block mb-1 text-sm font-medium text-black">Status</label>
                        <select id="countries" class="h-[46px] bg-gray-50 border border-black/50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Semua</option>
                            <option value="menunggu">Menunggu</option>
                            <option value="berhasil">Berhasil</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-full">
                        <label for="countries" class="block mb-1 text-sm font-medium text-black">Bulan</label>
                        <select id="countries" class="h-[46px] bg-gray-50 border border-black/50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Semua</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-fit">
                        <label for="countries" class="block mb-2 text-sm font-medium text-black">Unduh</label>
                        <button type="button" class="text-white bg-[#99FF33] hover:bg-[#99FF33] focus:ring-4 focus:ring-[#99FF33] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                            <svg class="w-4 h-4 text-black font-bold" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M12.5535 16.5061C12.4114 16.6615 12.2106 16.75 12 16.75C11.7894 16.75 11.5886 16.6615 11.4465 16.5061L7.44648 12.1311C7.16698 11.8254 7.18822 11.351 7.49392 11.0715C7.79963 10.792 8.27402 10.8132 8.55352 11.1189L11.25 14.0682V3C11.25 2.58579 11.5858 2.25 12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.0682L15.4465 11.1189C15.726 10.8132 16.2004 10.792 16.5061 11.0715C16.8118 11.351 16.833 11.8254 16.5535 12.1311L12.5535 16.5061Z" fill="currentColor"></path>
                                    <path d="M3.75 15C3.75 14.5858 3.41422 14.25 3 14.25C2.58579 14.25 2.25 14.5858 2.25 15V15.0549C2.24998 16.4225 2.24996 17.5248 2.36652 18.3918C2.48754 19.2919 2.74643 20.0497 3.34835 20.6516C3.95027 21.2536 4.70814 21.5125 5.60825 21.6335C6.47522 21.75 7.57754 21.75 8.94513 21.75H15.0549C16.4225 21.75 17.5248 21.75 18.3918 21.6335C19.2919 21.5125 20.0497 21.2536 20.6517 20.6516C21.2536 20.0497 21.5125 19.2919 21.6335 18.3918C21.75 17.5248 21.75 16.4225 21.75 15.0549V15C21.75 14.5858 21.4142 14.25 21 14.25C20.5858 14.25 20.25 14.5858 20.25 15C20.25 16.4354 20.2484 17.4365 20.1469 18.1919C20.0482 18.9257 19.8678 19.3142 19.591 19.591C19.3142 19.8678 18.9257 20.0482 18.1919 20.1469C17.4365 20.2484 16.4354 20.25 15 20.25H9C7.56459 20.25 6.56347 20.2484 5.80812 20.1469C5.07435 20.0482 4.68577 19.8678 4.40901 19.591C4.13225 19.3142 3.9518 18.9257 3.85315 18.1919C3.75159 17.4365 3.75 16.4354 3.75 15Z" fill="currentColor"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
                <script>
                    window.onload = () => {
                        updateDay();
                    };

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

            <!-- Table -->
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
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
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
                                {{ $item->status ? 'Telah dibayar' : 'Belum dibayar' }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="m-auto flex justify-center justify-items-center gap-2 text-center">
                                    <a href="/BagianRiwayat/{{ $item->id }}/detail" title="lihat">
                                        <div class="rounded-md bg-[#FA8F21] p-1 hover:bg-[#D87815] dark:bg-[#FA8F21] dark:hover:bg-[#D87815]">
                                            <x-svg-lihat />
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Table -->

            <nav aria-label="Page navigation example" class="justify-end flex mt-6">
                <ul class="flex items-center -space-x-px h-8 text-sm">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <script>
        var dateTimeInput = document.getElementById('DateTime');

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
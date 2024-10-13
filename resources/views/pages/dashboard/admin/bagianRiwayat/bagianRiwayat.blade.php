<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Riwayat Admin</title>
    <link rel="icon" type="image/x-icon" href="/assets/">
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
    <div class="p-4 sm:ml-64 bg-[#A40000] min-h-screen">
        <div class="m-5 lg:m-20">
            <div class="flex m-auto text-center justify-center items-center text-[30px] font-bold text-white mb-10">
                Daftar Riwayat</div>
            <div class="flex flex-col flex-1 mb-4">
                <label for="DateTime" class="text-[26px] font-bold text-white mb-5">Tanggal dan Waktu</label>
                <input name="tanggalMulai" type="datetime-local" id="DateTime"
                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-[50%]"
                    placeholder="Masukkan Tanggal dan Waktu" required />
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-center rtl:text-right text-black font-bold">
                    <thead class="text-xs text-black uppercase bg-[#FBB603]">
                        <tr>
                            <th scope="col" class="px-2 py-1 rounded-tl-lg">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama PB
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jadwal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-tr-lg">
                                Keterangan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b border-[#FBB603]">
                            <th scope="row" class="px-2 py-1 font-medium text-black whitespace-nowrap">
                                1
                            </th>
                            <td class="px-6 py-4">
                                Ahmad
                            </td>
                            <td class="px-6 py-4">
                                Garuda
                            </td>
                            <td class="px-6 py-4">
                                16:00,17:00,18:00
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-items-center m-auto text-center justify-center gap-2">
                                    <a href="/BagianRiwayat/lihatRiwayat" title="lihat">
                                        <div
                                            class="bg-[#FA8F21] dark:bg-[#FA8F21] hover:bg-[#D87815] dark:hover:bg-[#D87815] p-1 rounded-md">
                                            <x-svg-lihat />
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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

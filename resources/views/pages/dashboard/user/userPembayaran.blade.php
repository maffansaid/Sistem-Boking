<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Pembayaran</title>
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
    <x-sideBarUser />
    <div class="p-4 sm:ml-64 bg-[#A40000] min-h-screen">
        <div class="m-5 lg:m-10">
            <div class="flex m-auto text-center justify-center items-center text-[30px] font-bold text-white mb-10">
                Pembayaran</div>
            <div class="w-full">
                <div class="mb-2 lg:mb-3 mt-2">
                    <label for="name" class="block mb-2 text-[12px] font-medium text-white">Nama </label>
                    <input type="text" name="" id="judul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Nama" required="">
                </div>
                <div class="mb-2 lg:mb-3 mt-2">
                    <label for="name" class="block mb-2 text-[12px] font-medium text-white">No Telpon</label>
                    <input type="number" name="" id="judul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="No Telpon" required="">
                </div>
                <div class="mb-2 lg:mb-3 mt-2">
                    <label for="name" class="block mb-2 text-[12px] font-medium text-white">Email</label>
                    <input type="email" name="" id="judul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Asal" required="">
                </div>
                <div class="mb-2 lg:mb-3 mt-2">
                    <label for="name" class="block mb-2 text-[12px] font-medium text-white">Nama PB</label>
                    <input type="name" name="" id="judul"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Nama PB" required="">
                </div>
                <div class="mb-2 lg:mb-3 mt-2 flex justify-between gap-5">
                    <div class="w-1/2">
                        <label for="name" class="block mb-2 text-[12px] font-medium text-white">Tanggal</label>
                        <input name="" type="date" id="DateTime"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan Tanggal dan Waktu" required />
                    </div>
                    <div class="w-1/2">
                        <label for="name" class="block mb-2 text-[12px] font-medium text-white">Jam</label>
                        <input name="" type="time" id="DateTime"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Masukkan Jam" required />
                    </div>
                </div>
                <div class="mb-2 lg:mb-3 mt-2 flex justify-between gap-5">
                    <div class="w-1/2">
                        <label for="name" class="block mb-2 text-[12px] font-medium text-white">Rekening Bank
                            BNI</label>
                        <input type="name" name="" id="judul"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="08066bdcbw" required="">
                    </div>
                    <div class="w-1/2">
                        <label for="name" class="block mb-2 text-[12px] font-medium text-white">Total
                            Pembayaran</label>
                        <input type="number" name="" id="judul"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Rp. 100.000" required="">
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <label for="name" class="block mb-2 text-[12px] font-medium text-white">Kirim Bukti
                        Pembayaran</label>
                    <input
                        class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none w-full lg:w-[50%]"
                        aria-describedby="file_input_help" id="file_input" type="file" accept=".png, .jpg, .jpeg"
                        required>
                    <p class="mt-1 text-sm text-white" id="file_input_help">png, jpg, jpeg</p>
                </div>
                <div class="flex justify-end">
                    <a href="/UserSelesai"
                        class="text-black inline-flex items-center bg-[#FBB603] hover:bg-[#99FF33] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Upload
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk mendapatkan tanggal hari ini dalam format YYYY-MM-DD
        function getTodayDate() {
            const today = new Date();
            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const day = String(today.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        // Menetapkan nilai atribut min ke input tanggal
        document.getElementById('DateTime').min = getTodayDate();
    </script>
</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Pemesanan</title>
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
                Form Pemesanan</div>
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
            </div>
            <div class="flex justify-end">
                <a href="/UserWaktu"
                    class="block text-black bg-[#FBB603] hover:bg-[#99FF33] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-10">
                    Selanjutnya >
                </a>
            </div>
        </div>
    </div>
</body>

</html>

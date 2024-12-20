<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Pemesanan</title>
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
    <style>
        @keyframes moving-border {
            0% {
                border-color: #F8C104;
            }

            50% {
                border-color: #800000;
            }

            100% {
                border-color: #F8C104;
            }
        }

        #moving-border {
            animation: moving-border 3s infinite;
        }

        @keyframes border-tombol {
            0% {
                border-color: #297785;
            }

            50% {
                border-color: #FA8F21;
            }

            100% {
                border-color: #297785;
            }
        }

        #border-tombol {
            animation: border-tombol 3s infinite;
        }
    </style>
</head>

<body>
    <x-sideBarUser />
    <div class="min-h-screen bg-neutral-200 p-4 sm:ml-64">
        <form method="POST" class="m-5 lg:m-10">
            @csrf
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-black">
                Form Pemesanan</div>
            <div class="drop-shadow-2xl" id="moving-border">
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="name" class="mb-2 block text-[12px] font-medium text-black">Nama </label>
                    <input type="text" name="nama" id="nama"
                        class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                        placeholder="Nama" value="{{ session('nama') }}" required>
                    @error('nama')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="no_telpon" class="mb-2 block text-[12px] font-medium text-black">No Telpon</label>
                    <input type="text" name="no_telpon" id="no_telpon"
                        class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                        placeholder="No Telpon" value="{{ session('no_telpon') }}" required>
                    @error('no_telpon')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="email" class="mb-2 block text-[12px] font-medium text-black">Email</label>
                    <input type="email" name="email" id="email"
                        class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                        placeholder="Email" value="{{ session('email') }}" required>
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="nama_pb" class="mb-2 block text-[12px] font-medium text-black">Nama PB</label>
                    <input type="text" name="nama_pb" id="nama_pb"
                        class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                        placeholder="Nama PB" value="{{ session('nama_pb') }}" required>
                    @error('nama_pb')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="mt-10 block rounded-lg bg-[#F8C104] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#B58D05] focus:outline-none focus:ring-4 focus:ring-blue-300 font-bold transition transform duration-300 hover:scale-110">
                    Selanjutnya >
                </button>
            </div>
        </form>
    </div>
</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Pembayaran</title>
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
    <x-sideBarUser />
    <div class="min-h-screen bg-neutral-200 p-4 sm:ml-64">
        <div class="m-5 lg:m-10">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-black">
                Pembayaran</div>
            @error('server')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <form action="" method="POST" class="w-full">
                @csrf
                <div class="mb-2 mt-2 lg:mb-3 drop-shadow-2xl">
                    <label for="nama" class="mb-2 block text-[12px] font-medium text-black">Nama </label>
                    <input type="text" name="" id="nama" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Nama" value="{{ session('nama') }}" disabled>
                </div>
                <div class="mb-2 mt-2 lg:mb-3 drop-shadow-2xl">
                    <label for="nomor_telpon" class="mb-2 block text-[12px] font-medium text-black">No Telpon</label>
                    <input type="number" name="" id="nomor_telpon" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="No Telpon" value="{{ session('no_telpon') }}" disabled>
                </div>
                <div class="mb-2 mt-2 lg:mb-3 drop-shadow-2xl">
                    <label for="email" class="mb-2 block text-[12px] font-medium text-black">Email</label>
                    <input type="email" name="" id="email" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Email" value="{{ session('email') }}" disabled>
                </div>
                <div class="mb-2 mt-2 lg:mb-3 drop-shadow-2xl">
                    <label for="nama_pb" class="mb-2 block text-[12px] font-medium text-black">Nama PB</label>
                    <input type="text" name="" id="nama_pb" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Nama PB" value="{{ session('nama_pb') }}" disabled>
                </div>
                <div class="mb-2 mt-2 flex justify-between gap-5 lg:mb-3 drop-shadow-2xl">
                    <div class="w-1/2">
                        <label for="tanggal" class="mb-2 block text-[12px] font-medium text-black">Tanggal</label>
                        <input name="" type="date" id="DateTime" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Masukkan Tanggal dan Waktu" value="{{ \Carbon\Carbon::parse(session('tanggal'))->format('Y-m-d') }}" disabled />
                    </div>
                    <div class="w-1/2 drop-shadow-2xl">
                        <label for="jam" class="mb-2 block text-[12px] font-medium text-black">Jam</label>
                        <input name="" type="text" id="DateTime" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Masukkan Jam" value="{{ Str::substr(Arr::first(session('waktu_raw')), 0, 5) }}-{{ Str::substr(Arr::last(session('waktu_raw')), 0, 5) }}" disabled />
                    </div>
                </div>
                <div class="mb-2 mt-2 flex justify-between gap-5 lg:mb-3">
                    <div class="w-1/2 drop-shadow-2xl">
                        <label for="bank" class="mb-2 block text-[12px] font-medium text-black">Transfer Bank</label>
                        <select id="bank" name="metode" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" required>
                            <option value="" disabled selected>Pilih Bank</option>
                            <option value="BRIVA">BRI VA</option>
                            <option value="BNIVA">BNI VA</option>
                        </select>
                    </div>
                    <div class="w-1/2 drop-shadow-2xl">
                        <label for="name" class="mb-2 block text-[12px] font-medium text-black">Total
                            Pembayaran</label>
                        <input type="text" name="" id="total_pembayaran" class="focus:ring-neutral-600 focus:border-neutral-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="" value="Rp. {{ number_format(session('harga'), 0, '', '.') }}" disabled>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" class="mt-10 block rounded-lg bg-[#F8C104] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#B58D05] focus:outline-none focus:ring-4 focus:ring-blue-300 font-bold transition transform duration-300 hover:scale-110">
                        Bayar >
                    </button>
                </div>
                <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-black">Apakah anda yakin melakukan pembayaran?</h3>
                                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center transition transform duration-300 hover:scale-110">Ya, Saya yakin!</button>
                                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 transition transform duration-300 hover:scale-110">
                                    Tidak, kembali.
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function getTodayDate() {
            const today = new Date();
            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const day = String(today.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        document.getElementById('DateTime').min = getTodayDate();
    </script>
</body>

</html>
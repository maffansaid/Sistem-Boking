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
    <div class="min-h-screen bg-[#A40000] p-4 sm:ml-64">
        <div class="m-5 lg:m-10">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-white">
                Pembayaran</div>
            @error('server')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <form action="" method="POST" class="w-full">
                @csrf
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="nama" class="mb-2 block text-[12px] font-medium text-white">Nama </label>
                    <input type="text" name="" id="nama" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Nama" value="{{ session('nama') }}" disabled>
                </div>
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="nomor_telpon" class="mb-2 block text-[12px] font-medium text-white">No Telpon</label>
                    <input type="number" name="" id="nomor_telpon" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="No Telpon" value="{{ session('no_telpon') }}" disabled>
                </div>
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="email" class="mb-2 block text-[12px] font-medium text-white">Email</label>
                    <input type="email" name="" id="email" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Email" value="{{ session('email') }}" disabled>
                </div>
                <div class="mb-2 mt-2 lg:mb-3">
                    <label for="nama_pb" class="mb-2 block text-[12px] font-medium text-white">Nama PB</label>
                    <input type="text" name="" id="nama_pb" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Nama PB" value="{{ session('nama_pb') }}" disabled>
                </div>
                <div class="mb-2 mt-2 flex justify-between gap-5 lg:mb-3">
                    <div class="w-1/2">
                        <label for="tanggal" class="mb-2 block text-[12px] font-medium text-white">Tanggal</label>
                        <input name="" type="date" id="DateTime" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Masukkan Tanggal dan Waktu" value="{{ \Carbon\Carbon::parse(session('tanggal'))->format('Y-m-d') }}" disabled />
                    </div>
                    <div class="w-1/2">
                        <label for="jam" class="mb-2 block text-[12px] font-medium text-white">Jam</label>
                        <input name="" type="text" id="DateTime" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Masukkan Jam" value="{{ Str::substr(Arr::first(session('waktu_raw')), 0, 5) }}-{{ Str::substr(Arr::last(session('waktu_raw')), 0, 5) }}" disabled />
                    </div>
                </div>
                <div class="mb-2 mt-2 flex justify-between gap-5 lg:mb-3">
                    <div class="w-1/2">
                        <label for="bank" class="mb-2 block text-[12px] font-medium text-white">Transfer Bank</label>
                        <select id="bank" name="metode" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" required>
                            <option value="" disabled selected>Pilih Bank</option>
                            <option value="BRIVA">BRI VA</option>
                            <option value="BNIVA">BNI VA</option>
                        </select>
                    </div>
                    <div class="w-1/2">
                        <label for="name" class="mb-2 block text-[12px] font-medium text-white">Total
                            Pembayaran</label>
                        <input type="text" name="" id="total_pembayaran" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="" value="Rp. {{ number_format(session('harga'), 0, '', '.') }}" disabled>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center rounded-lg bg-[#FBB603] px-5 py-2.5 text-center text-sm font-medium text-black hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Bayar >
                    </button>
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

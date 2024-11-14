<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Permintaan 2 Admin</title>
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
    <div class="min-h-screen bg-[#A40000] p-4 sm:ml-64">
        <div class="m-5 lg:m-20">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-white">
                Daftar Permintaan</div>
            <div class="flex justify-start">
                <a href="/BagianPermintaan"
                    class="block rounded-lg bg-[#FBB603] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <div class="flex gap-2">
                        <svg class="h-5 w-5" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                                <path fill="#000000"
                                    d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z">
                                </path>
                            </g>
                        </svg>
                        <div class="div">Kembali</div>
                    </div>
                </a>
            </div>
            <div class="justify-between lg:flex lg:gap-10">
                <div class="w-full lg:w-1/2">
                    <div class="mb-2 mt-2 lg:mb-3">
                        <label for="nama" class="mb-2 block text-[12px] font-medium text-white">Nama </label>
                        <input type="text" name="" id="nama"
                            class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            placeholder="Nama" value="{{ $pemesanan->nama }}" required="">
                    </div>
                    <div class="mb-2 mt-2 lg:mb-3">
                        <label for="no_telpon" class="mb-2 block text-[12px] font-medium text-white">No Telpon</label>
                        <input type="number" name="" id="no_telpon"
                            class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            placeholder="No Telpon" value="{{ $pemesanan->no_telpon }}" required="">
                    </div>
                    <div class="mb-2 mt-2 lg:mb-3">
                        <label for="email" class="mb-2 block text-[12px] font-medium text-white">Email</label>
                        <input type="email" name="" id="email"
                            class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            placeholder="Asal" value="{{ $pemesanan->email }}" required="">
                    </div>
                    <div class="mb-2 mt-2 lg:mb-3">
                        <label for="nama_pb" class="mb-2 block text-[12px] font-medium text-white">Nama PB</label>
                        <input type="name" name="" id="nama_pb"
                            class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            placeholder="Nama PB" value="{{ $pemesanan->nama_pb }}" required="">
                    </div>
                    <div class="mb-2 mt-2 lg:mb-3">
                        <label for="tanggal" class="mb-2 block text-[12px] font-medium text-white">Tanggal</label>
                        <input name="" type="date" id="DateTime"
                            class="h-9 w-[50%] rounded-md border border-[#297785] px-2 text-sm text-gray-900 focus:border-[#297785] focus:ring-[#297785]"
                            placeholder="Masukkan Tanggal dan Waktu"
                            value="{{ \Carbon\Carbon::parse($pemesanan->tanggal)->format('Y-m-d') }}" required />
                    </div>
                    <div class="mb-2 mt-2 lg:mb-3">
                        <label for="jam" class="mb-2 block text-[12px] font-medium text-white">Jam</label>
                        <input name="" type="text" id="DateTime"
                            class="h-9 w-[50%] rounded-md border border-[#297785] px-2 text-sm text-gray-900 focus:border-[#297785] focus:ring-[#297785]"
                            placeholder="08:00,09:00,10:00 Wib"
                            value="{{ Str::substr($pemesanan->waktuAwal->waktu, 0, 5) }}-{{ Str::substr($pemesanan->waktuAkhir->waktu, 0, 5) }}"
                            required />
                    </div>
                    <div class="mb-2 mt-2 lg:mb-3">
                        <label for="total_pembayaran" class="mb-2 block text-[12px] font-medium text-white">Total
                            Pembayaran</label>
                        <input name="" type="text"
                            class="h-9 w-[50%] rounded-md border border-[#297785] px-2 text-sm text-gray-900 focus:border-[#297785] focus:ring-[#297785]"
                            placeholder="Rp. 10.000"
                            value="Rp. {{ number_format($pemesanan->pembayaran->harga, 0, '', '.') }}" required />
                    </div>
                </div>
                <div class="mt-5 w-full lg:mt-0 lg:w-1/2">
                    <div>
                        <img id="bukti_pembayaran" class="grayscale-100 h-auto w-full rounded-lg filter"
                            src="assets/hero.svg" alt="">
                        <div class="mt-5 flex justify-end lg:mt-5">
                            <a href="{{ route('transaksi.download-pdf', $pemesanan->id) }}"
                                class="inline-flex items-center rounded-lg bg-[#FBB603] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <div class="flex gap-2">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M17 17H17.01M15.6 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H8.4M12 15V4M12 4L15 7M12 4L9 7"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                    <div class="text-black">
                                        Unduh Bukti Pembayaran
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <script>
                        document.getElementById('unduh_btn').addEventListener('click', function() {
                            var fileURL = document.getElementById('bukti_pembayaran').src;
                            var a = document.createElement('a');
                            a.href = fileURL;
                            var fileName = fileURL.substring(fileURL.lastIndexOf('/') + 1);
                            a.download = fileName;
                            document.body.appendChild(a);
                            a.click();
                            document.body.removeChild(a);
                        });
                        var dateTimeInput = document.getElementById('DateTime');

                        function setMinDateTime() {
                            var now = new Date();
                            var year = now.getFullYear();
                            var month = (now.getMonth() + 1).toString().padStart(2, '0');
                            var day = now.getDate().toString().padStart(2, '0');
                            var hours = now.getHours().toString().padStart(2, '0');
                            var minutes = now.getMinutes().toString().padStart(2, '0');

                            var currentDateTime = ${year}-${month}-${day}T${hours}:${minutes};

                            dateTimeInput.min = currentDateTime;
                        }

                        setMinDateTime();

                        dateTimeInput.addEventListener('focus', setMinDateTime);
                    </script>
                </div>
            </div>
        </div>
</body>

</html>
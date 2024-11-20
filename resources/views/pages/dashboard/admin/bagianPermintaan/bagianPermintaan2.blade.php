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
    <div class="min-h-screen bg-neutral-200 p-4 sm:ml-64">
        <div class="m-5 lg:m-20">
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] font-bold text-black">
                Daftar Permintaan</div>
            <div class="flex justify-start">
                <a href="/BagianPermintaan"
                    class="block rounded-lg bg-[#F8C104] px-5 py-2.5 text-sm font-bold text-black hover:bg-[#B58D05] focus:outline-none focus:ring-4 focus:ring-blue-300 font-bold transition transform duration-300 hover:scale-110">
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
            <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden mt-4">
                <!-- Header -->
                <div class="bg-[#F8C104] px-6 py-4">
                    <h2 class="text-xl font-bold text-black text-center">Detail Permintaan</h2>
                </div>

                <div class="p-6">
                    <!-- Main Content -->
                    <div class="space-y-8">
                        <!-- Details Section -->
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Column 1 -->
                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow-sm">
                                        <h3 class="text-sm md:text-lg font-semibold text-black mb-3 border-b-2 pb-2">Informasi Pribadi</h3>
                                        <div class="space-y-3">
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-black">Nama</span>
                                                <span class="font-medium">{{ $pemesanan->nama }}</span>
                                            </div>
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-black">No Telpon</span>
                                                <span class="font-medium">{{ $pemesanan->no_telpon }}</span>
                                            </div>
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-black">Email</span>
                                                <span class="font-medium">{{ $pemesanan->email }}</span>
                                            </div>
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-black">Nama PB</span>
                                                <span class="font-medium">{{ $pemesanan->nama_pb }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column 2 -->
                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow-sm">
                                        <h3 class="text-sm md:text-lg font-semibold text-black mb-3 border-b-2 pb-2">Informasi Pemesanan</h3>
                                        <div class="space-y-3">
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-gray-600">Tanggal</span>
                                                <span
                                                    class="font-medium">{{ \Carbon\Carbon::parse($pemesanan->tanggal)->format('d F Y') }}</span>
                                            </div>
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-gray-600">Jam</span>
                                                <span class="font-medium">
                                                    {{ Str::substr($pemesanan->waktuAwal->waktu, 0, 5) }} -
                                                    {{ Str::substr($pemesanan->waktuAkhir->waktu, 0, 5) }} WIB
                                                </span>
                                            </div>
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-gray-600">Total Pembayaran</span>
                                                <span class="font-medium text-yellow-600">
                                                    Rp. {{ number_format($pemesanan->pembayaran->harga, 0, '', '.') }}
                                                </span>
                                            </div>
                                            <div class="flex justify-between text-xs md:text-sm">
                                                <span class="text-gray-600">Status</span>
                                                <span class="font-medium">
                                                    @if ($pemesanan->status)
                                                        <span class="text-green-600">Sukses</span>
                                                    @else
                                                        <span class="text-orange-600">Proses</span>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image Section -->
                        {{-- <div class="bg-white rounded-lg p-4 shadow-sm">
                            <h3 class="text-sm font-semibold text-gray-600 mb-4">Bukti Pembayaran</h3>
                            <div class="bg-gray-100 rounded-lg overflow-hidden">
                                <img id="bukti_pembayaran" src="assets/hero.svg" alt="Bukti Pembayaran"
                                    class="w-full h-auto max-h-[400px] object-contain p-4" />
                            </div>
                        </div> --}}

                        <!-- Download Button -->
                        <div class="flex justify-center">
                            <a href="{{ route('transaksi.download-pdf', $pemesanan->id) }}"
                                class="inline-flex items-center px-6 py-3 bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-semibold rounded-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-yellow-300 shadow-md text-sm md:text-sm">
                                <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 17H17.01M15.6 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H8.4M12 15V4M12 4L15 7M12 4L9 7"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Unduh Bukti Pembayaran
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Fungsi untuk download bukti pembayaran
                    document.getElementById('unduh_btn')?.addEventListener('click', function() {
                        var fileURL = document.getElementById('bukti_pembayaran').src;
                        var a = document.createElement('a');
                        a.href = fileURL;
                        var fileName = fileURL.substring(fileURL.lastIndexOf('/') + 1);
                        a.download = fileName;
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                    });

                    // Setup untuk input datetime
                    var dateTimeInput = document.getElementById('DateTime');
                    if (dateTimeInput) {
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
                    }
                });
            </script>
        </div>
</body>

</html>

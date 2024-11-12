<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="/assets/logo_polres.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        .animate-fadeIn {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(0);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <x-layout>

        <section id="home" class="relative min-h-screen w-full items-start justify-center overflow-hidden bg-[url('assets/hero.svg')] bg-cover bg-center pb-36 pl-10 pr-10 pt-36 lg:pb-20 lg:pl-20 lg:pt-28">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="relative z-10 mx-auto grid max-w-screen-xl gap-8 px-4 py-8 lg:grid-cols-2 lg:gap-16 lg:py-16">
                <div class="flex flex-col justify-center">
                    <h1 class="animate-fadeIn mb-4 text-2xl font-bold font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-4xl">
                        PENYEWAAN GEDUNG OLAHRAGA BULU TANGKIS POLRES LAMPUNG - SELATAN</h1>
                    <p class="animate-fadeIn mb-8 text-lg font-normal text-white lg:text-xl">Gedung Olahraga Bulutangkis
                        Polres Lampung
                        Selatan merupakan untuk mendukung kegiatan olahraga, terutama bulutangkis. </p>
                    <div class="animate-fadeIn mt-10 flex flex-col space-y-2 sm:flex-row sm:space-y-0 lg:space-y-4">
                        <a href="/UserPemesanan" class="inline-flex w-[70%] transform items-center justify-center rounded-lg bg-[#FBB603] px-5 py-3 text-center text-base font-medium text-black transition duration-300 hover:scale-110 lg:w-[50%]">Sewa
                            Sekarang!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="tentang" class="w-full items-start justify-center bg-black bg-cover bg-center pb-36 pl-10 pr-10 pt-36 lg:pb-20 lg:pl-20 lg:pr-20 lg:pt-20">
            <h1 class="animate-fadeIn m-auto text-center text-[16px] font-bold text-white lg:text-[32px]">Tentang</h1>
            <div class="mx-auto grid max-w-screen-xl gap-8 px-4 py-8 lg:grid-cols-2 lg:gap-16 lg:py-16">
                <div class="order-last flex flex-col justify-center lg:order-first">
                    <p class="animate-fadeIn mb-8 text-lg font-normal text-white lg:text-xl">
                        Gedung Olahraga Bulutangkis Polres Lampung Selatan merupakan fasilitas modern yang dirancang
                        khusus untuk mendukung kegiatan olahraga, terutama bulutangkis.</p>
                </div>
                <div class="animate-fadeIn flex flex-col justify-center lg:order-first">
                    <img src="assets/tentang.svg" class="image-zoom" />
                </div>
            </div>
        </section>

        <section id="lokasi" class="relative w-full items-start justify-center overflow-hidden bg-[url('assets/lokasi.svg')] bg-cover bg-center pb-36 pl-10 pr-10 pt-36 lg:pb-20 lg:pl-20 lg:pt-20">
            <div class="absolute z-10 w-full bg-black bg-gradient-to-t from-black opacity-60 lg:-ml-20 lg:-mt-20 lg:h-20">
            </div>
            <div class="absolute inset-0 z-10 mt-96 bg-gradient-to-t from-black to-transparent"></div>
            <h1 class="animate-fadeIn z-10 m-auto text-center text-[16px] font-bold text-white lg:text-[32px]">Lokasi
            </h1>
            <div class="z-10 mx-auto max-w-screen-xl px-4 py-8 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                    <div class="flex flex-col justify-center">
                        <iframe class="animate-fadeIn h-48 w-full rounded-lg lg:h-[288px] lg:w-[423px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.152815156867!2d105.57857107586261!3d-5.6910469563062085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4111d361e33821%3A0xcdeed7a91507f499!2sPolres%20Lampung%20Selatan!5e0!3m2!1sid!2sid!4v1729567243832!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div>
                        <table class="animate-fadeIn text-sm text-white lg:text-2xl">
                            <tr>
                                <td class="py-2 lg:py-4">Nama Daerah</td>
                                <td class="py-2 text-white lg:py-4">: Kalianda</td>
                            </tr>
                            <tr>
                                <td class="py-2 lg:py-4">Jalan</td>
                                <td class="py-2 text-white lg:py-4">: Jln. Lintas Sumatra</td>
                            </tr>
                            <tr>
                                <td class="py-2 lg:py-4">Kecamatan</td>
                                <td class="py-2 text-white lg:py-4">: Kalianda</td>
                            </tr>
                            <tr>
                                <td class="py-2 lg:py-4">Kabupaten</td>
                                <td class="py-2 text-white lg:py-4">: Lampung-Selatan</td>
                            </tr>
                            <tr>
                                <td class="py-2 lg:py-4">Provinsi</td>
                                <td class="py-2 text-white lg:py-4">: Lampung</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="jadwal" class="w-full items-start justify-center bg-black bg-cover bg-center pb-36 pl-10 pr-10 pt-36 lg:pl-20 lg:pr-20 lg:pt-20">
            <h1 class="animate-fadeIn m-auto text-center text-[16px] font-bold text-white lg:text-[32px]">Jadwal</h1>

            <div class="animate-fadeIn mb-5 mt-5 flex justify-between space-x-2 md:mb-10 md:mt-10 lg:justify-center lg:space-x-4">
                <form class="flex flex-col">
                    <label for="dateInput" class="mb-1 text-xs font-semibold text-white md:text-sm">Pilih
                        Tanggal</label>
                    <input type="date" id="dateInput" name="tanggal" class="w-full rounded-lg border p-3 text-xs shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 md:text-sm" value="{{ $tanggal }}" onchange="this.form.submit()">
                </form>
                <div class="flex flex-col">
                    <label for="dayInput" class="mb-1 text-xs font-semibold text-white md:text-sm">Hari</label>
                    <input type="text" id="dayInput" name="" class="w-full rounded-lg border bg-white p-3 text-xs text-black shadow-sm focus:outline-none md:text-sm" placeholder="Hari" readonly>
                </div>
            </div>

            <div class="animate-fadeIn relative overflow-x-auto">
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
                            <th scope="col" class="rounded-tr-lg px-6 py-3">
                                Jadwal
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $item)
                            <tr class="border-b border-[#FBB603] bg-white">
                                <th scope="row" class="px-2 py-1">{{ $loop->iteration }}</th>
                                <td class="px-6 py-4">{{ $item->nama }}</td>
                                <td class="px-6 py-4">{{ $item->nama_pb }}</td>
                                <td class="px-6 py-4">{{ $item->tanggal }}</td>
                                <td class="px-6 py-4">{{ Str::substr($item->waktuAwal->waktu, 0, 5) }}-{{ Str::substr($item->waktuAkhir->waktu, 0, 5) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section id="galeri" class="w-full items-start justify-center bg-black bg-cover bg-center pb-36 pl-10 pr-10 pt-36 lg:pb-20 lg:pl-20 lg:pr-20 lg:pt-20">
            <h1 class="animate-fadeIn m-auto text-center text-[16px] font-bold text-white lg:text-[32px]">Gambar</h1>

            <div class="flex items-center justify-center">
                <div class="animate-fadeIn mb-10 mt-10 lg:mb-20 lg:mt-20">
                    <div class="grid h-[600px] grid-cols-1 gap-4 overflow-hidden overflow-y-auto md:grid-cols-2 md:grid-cols-3">
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking1.png" alt="Image 1" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking2.png" alt="Image 2" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking3.png" alt="Image 3" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking4.png" alt="Image 4" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking5.png" alt="Image 5" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking6.png" alt="Image 6" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking2.png" alt="Image 2" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking3.png" alt="Image 3" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="h-48 w-full transform cursor-pointer rounded-lg object-cover transition duration-300 hover:scale-110" src="/assets/boking4.png" alt="Image 4" onclick="openModal(this)">
                        </div>
                    </div>
                </div>
                <div id="imageModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-75 pb-20 pl-5 pr-5 pt-20 md:pl-0 md:pr-0">
                    <span class="absolute right-4 top-4 cursor-pointer text-2xl text-white" onclick="closeModal()">&times;</span>
                    <img id="modalImage" class="max-h-full max-w-full rounded-lg">
                </div>
            </div>

        </section>

        <section id="informasi" class="w-full items-start justify-center bg-black bg-cover bg-center pb-36 pl-10 pr-10 pt-36 lg:pb-20 lg:pl-20 lg:pr-20 lg:pt-20">
            <h1 class="animate-fadeIn m-auto text-center text-[16px] font-bold text-white lg:text-[32px]">Informasi
            </h1>
            <div class="mx-auto max-w-screen-xl gap-8 px-4 py-8 lg:flex lg:gap-8 lg:py-16">
                <div class="order-last m-auto flex justify-center lg:order-first lg:w-[25%]">
                    <p class="animate-fadeIn mb-8 mt-4 text-lg font-normal text-white lg:text-xl">"Periksa informasi
                        ini untuk
                        mendapatkan
                        pemahaman yang lebih baik."</p>
                    <div class="animate-fadeIn absolute -mt-8 ml-60 lg:-mt-36">
                        <svg viewBox="0 0 77 422" fill="none" class="mr-6 h-[150px] w-[35px] lg:h-[410px] lg:w-[77px]" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="4.5" cy="5" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="21.5" cy="5" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="38.5" cy="5" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="55.5" cy="5" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="72.5" cy="5" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="4.5" cy="23" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="21.5" cy="23" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="38.5" cy="23" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="55.5" cy="23" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="72.5" cy="23" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="4.5" cy="41" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="21.5" cy="41" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="38.5" cy="41" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="55.5" cy="41" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="72.5" cy="41" rx="4.5" ry="5" fill="#FBB603" />
                            <ellipse cx="4.5" cy="59" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="59" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="59" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="59" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="59" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="77" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="77" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="77" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="77" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="77" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="95" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="95" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="95" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="95" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="95" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="113" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="113" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="113" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="113" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="113" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="131" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="131" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="131" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="131" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="131" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="291" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="291" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="291" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="291" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="291" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="309" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="309" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="309" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="309" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="309" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="327" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="327" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="327" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="327" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="327" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="345" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="345" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="345" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="345" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="345" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="363" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="363" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="363" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="363" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="363" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="381" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="381" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="381" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="381" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="381" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="399" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="399" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="399" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="399" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="399" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="4.5" cy="417" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="21.5" cy="417" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="38.5" cy="417" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="55.5" cy="417" rx="4.5" ry="5" fill="#D9D9D9" />
                            <ellipse cx="72.5" cy="417" rx="4.5" ry="5" fill="#D9D9D9" />
                        </svg>
                    </div>
                </div>
                <div class="animate-fadeIn mt-10 flex justify-center lg:order-first lg:mt-0 lg:w-[75%]">
                    {{-- <img src="assets/informasi.svg" /> --}}
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-[450px] md:rounded-[50px]">
                            @foreach ($informasi as $item)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ $item->gambar }}" class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                                    {{ $item->judul }}
                                </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                            @for ($i = 0; $i < $informasi->count(); $i++)
                                <button type="button" class="h-3 w-3 rounded-full" aria-current="true" aria-label="Slide {{ $i + 1 }}" data-carousel-slide-to="{{ $i }}"></button>
                            @endfor
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-carousel-prev>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                                <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none" data-carousel-next>
                            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                                <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </section>

    </x-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
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

        function openModal(img) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modalImg.src = img.src;
            modal.classList.remove('hidden');
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
        }

        window.onload = () => {
            updateDay();
        };
    </script>
</body>

</html>

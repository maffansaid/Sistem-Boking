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

        <section id="home"
            class="w-full justify-center items-start bg-cover bg-center bg-[url('assets/hero.svg')] min-h-screen lg:pl-20 lg:pt-28 lg:pb-20 pl-10 pr-10 pt-36 pb-36 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16 relative z-10">
                <div class="flex flex-col justify-center">
                    <h1
                        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white font-bold md:text-5xl lg:text-4xl animate-fadeIn">
                        PENYEWAAN GEDUNG OLAHRAGA BULU TANGKIS POLRES LAMPUNG - SELATAN</h1>
                    <p class="mb-8 text-lg font-normal text-white lg:text-xl animate-fadeIn">Gedung Olahraga Bulutangkis
                        Polres Lampung
                        Selatan merupakan untuk mendukung kegiatan olahraga, terutama bulutangkis. </p>
                    <div class="flex flex-col lg:space-y-4 space-y-2 sm:flex-row sm:space-y-0 mt-10 animate-fadeIn">
                        <a href="/UserPemesanan"
                            class="w-[70%] lg:w-[50%] inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg bg-[#FBB603] transition transform duration-300 hover:scale-110">Sewa
                            Sekarang!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="tentang"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20 lg:pb-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center animate-fadeIn">Tentang</h1>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
                <div class="flex flex-col justify-center order-last lg:order-first">
                    <p class="mb-8 text-lg font-normal text-white lg:text-xl animate-fadeIn">
                        Gedung Olahraga Bulutangkis Polres Lampung Selatan merupakan fasilitas modern yang dirancang
                        khusus untuk mendukung kegiatan olahraga, terutama bulutangkis.</p>
                </div>
                <div class="flex flex-col justify-center lg:order-first animate-fadeIn">
                    <img src="assets/tentang.svg" class="image-zoom" />
                </div>
            </div>
        </section>

        <section id="lokasi"
            class="w-full justify-center items-start bg-cover bg-center bg-[url('assets/lokasi.svg')] pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pt-20 lg:pb-20 relative overflow-hidden">
            <div
                class="absolute w-full bg-gradient-to-t bg-black opacity-60 from-black z-10 lg:h-20 lg:-ml-20 lg:-mt-20">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent mt-96 z-10"></div>
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center z-10 animate-fadeIn">Lokasi
            </h1>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-8 z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8">
                    <div class="flex flex-col justify-center">
                        <iframe class="w-full h-48 lg:w-[423px] lg:h-[288px] rounded-lg animate-fadeIn"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.152815156867!2d105.57857107586261!3d-5.6910469563062085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4111d361e33821%3A0xcdeed7a91507f499!2sPolres%20Lampung%20Selatan!5e0!3m2!1sid!2sid!4v1729567243832!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div>
                        <table class="text-white text-sm lg:text-2xl animate-fadeIn">
                            <tr>
                                <td class="lg:py-4 py-2">Nama Daerah</td>
                                <td class="text-white lg:py-4 py-2">: Kalianda</td>
                            </tr>
                            <tr>
                                <td class="lg:py-4 py-2">Jalan</td>
                                <td class="text-white lg:py-4 py-2">: Jln. Lintas Sumatra</td>
                            </tr>
                            <tr>
                                <td class="lg:py-4 py-2">Kecamatan</td>
                                <td class="text-white lg:py-4 py-2">: Kalianda</td>
                            </tr>
                            <tr>
                                <td class="lg:py-4 py-2">Kabupaten</td>
                                <td class="text-white lg:py-4 py-2">: Lampung-Selatan</td>
                            </tr>
                            <tr>
                                <td class="lg:py-4 py-2">Provinsi</td>
                                <td class="text-white lg:py-4 py-2">: Lampung</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="jadwal"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center animate-fadeIn">Jadwal</h1>

            <div
                class="flex justify-between lg:justify-center space-x-2 lg:space-x-4 mt-5 mb-5 md:mt-10 md:mb-10 animate-fadeIn">
                <div class="flex flex-col">
                    <label for="dateInput" class="mb-1 text-xs md:text-sm font-semibold text-white">Pilih
                        Tanggal</label>
                    <input type="date" id="dateInput" name=""
                        class="border rounded-lg p-3 w-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 text-xs md:text-sm"
                        onchange="updateDay()">
                </div>
                <div class="flex flex-col">
                    <label for="dayInput" class="mb-1 text-xs md:text-sm font-semibold text-white">Hari</label>
                    <input type="text" id="dayInput" name=""
                        class="border rounded-lg p-3 w-full bg-white text-black shadow-sm focus:outline-none text-xs md:text-sm"
                        placeholder="Hari" readonly>
                </div>
            </div>

            <div class="relative overflow-x-auto animate-fadeIn">
                <table class="w-full text-sm text-center rtl:text-right text-black">
                    <thead class="text-xs text-black uppercase bg-[#FBB603] font-bold">
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
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3 rounded-tr-lg">
                                Jadwal
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $dummyData = [
                        [
                            'id' => 1,
                            'nama' => 'Ahmad',
                            'nama_pb' => 'Garuda',
                            'tanggal' => '10/31/2024',
                            'jadwal' => '16:00,17:00,18:00',
                        ],
                        [
                            'id' => 2,
                            'nama' => 'Fulan',
                            'nama_pb' => 'Tangkas',
                            'tanggal' => '10/31/2024',
                            'jadwal' => '20:00',
                        ],
                        [
                            'id' => 3,
                            'nama' => 'Siti',
                            'nama_pb' => 'Mandala',
                            'tanggal' => '10/31/2024',
                            'jadwal' => '09:00,12:00,15:00',
                        ],
                        [
                            'id' => 4,
                            'nama' => 'Budi',
                            'nama_pb' => 'Rajawali',
                            'tanggal' => '10/31/2024',
                            'jadwal' => '14:00,16:00,18:00',
                        ],
                    ];
                    ?>
                    <tbody>
                        @foreach ($dummyData as $data)
                            <tr class="bg-white border-b border-[#FBB603]">
                                <th scope="row" class="px-2 py-1">{{ $data['id'] }}</th>
                                <td class="px-6 py-4">{{ $data['nama'] }}</td>
                                <td class="px-6 py-4">{{ $data['nama_pb'] }}</td>
                                <td class="px-6 py-4">{{ $data['tanggal'] }}</td>
                                <td class="px-6 py-4">{{ $data['jadwal'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section id="galeri"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20 lg:pb-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center animate-fadeIn">Gambar</h1>

            <div class="flex justify-center items-center">
                <div class="mt-10 lg:mt-20 mb-10 lg:mb-20 animate-fadeIn">
                    <div
                        class="h-[600px] overflow-y-auto overflow-hidden grid grid-cols-1 md:grid-cols-2 md:grid-cols-3 gap-4 ">
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking1.png" alt="Image 1" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking2.png" alt="Image 2" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking3.png" alt="Image 3" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking4.png" alt="Image 4" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking5.png" alt="Image 5" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking6.png" alt="Image 6" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking2.png" alt="Image 2" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking3.png" alt="Image 3" onclick="openModal(this)">
                        </div>
                        <div>
                            <img class="w-full h-48 object-cover rounded-lg cursor-pointer transition transform duration-300 hover:scale-110"
                                src="/assets/boking4.png" alt="Image 4" onclick="openModal(this)">
                        </div>
                    </div>
                </div>
                <div id="imageModal"
                    class="fixed inset-0 hidden bg-black bg-opacity-75 flex items-center justify-center z-50 pt-20 pb-20 md:pl-0 md:pr-0 pl-5 pr-5">
                    <span class="absolute top-4 right-4 text-white text-2xl cursor-pointer"
                        onclick="closeModal()">&times;</span>
                    <img id="modalImage" class="max-w-full max-h-full rounded-lg">
                </div>
            </div>

        </section>

        <section id="informasi"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20 lg:pb-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center animate-fadeIn">Informasi
            </h1>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:flex gap-8 lg:gap-8">
                <div class="flex lg:w-[25%] justify-center order-last lg:order-first m-auto">
                    <p class="mb-8 text-lg font-normal text-white lg:text-xl mt-4 animate-fadeIn">"Periksa informasi
                        ini untuk
                        mendapatkan
                        pemahaman yang lebih baik."</p>
                    <div class="absolute lg:-mt-36 -mt-8 ml-60 animate-fadeIn">
                        <svg viewBox="0 0 77 422" fill="none"
                            class="h-[150px] w-[35px] lg:h-[410px] lg:w-[77px] mr-6"
                            xmlns="http://www.w3.org/2000/svg">
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
                <div class="flex lg:w-[75%] justify-center lg:order-first lg:mt-0 mt-10 animate-fadeIn">
                    {{-- <img src="assets/informasi.svg" /> --}}
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:rounded-[50px] md:h-[450px]">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="assets/informasi.svg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="assets/boking1.png"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="assets/boking2.png"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
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
    </script>
</body>

</html>

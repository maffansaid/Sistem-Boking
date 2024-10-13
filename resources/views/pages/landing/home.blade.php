<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="/assets/">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <x-layout>
        <section id="home"
            class="w-full justify-center items-start bg-cover bg-center bg-[url('assets/hero.svg')] min-h-screen lg:pl-20 lg:pt-28 lg:pb-20 pl-10 pt-36 pb-36 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16 relative z-10">
                <div class="flex flex-col justify-center">
                    <h1
                        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white font-bold md:text-5xl lg:text-4xl">
                        PENYEWAAN GEDUNG OLAHRAGA BULU TANGKIS POLRES LAMPUNG - SELATAN</h1>
                    <p class="mb-8 text-lg font-normal text-white lg:text-xl">Gedung olahraga bulutangkis ini merupakan salah satu fasilitas olehraga yang disediakan oleh Polres Lampung- Selatan.</p>
                    <div class="flex flex-col lg:space-y-4 space-y-2 sm:flex-row sm:space-y-0 mt-10">
                        <a href="/UserPemesanan"
                            class="w-[70%] lg:w-[50%] inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg bg-[#FBB603]">Sewa
                            Sekarang!</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="tentang"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20 lg:pb-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center">Tentang</h1>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
                <div class="flex flex-col justify-center order-last lg:order-first">
                    <p class="mb-8 text-lg font-normal text-white lg:text-xl">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, </p>
                </div>
                <div class="flex flex-col justify-center lg:order-first">
                    <img src="assets/tentang.svg"
                        class="image-zoom" />
                </div>
            </div>
        </section>
        <section id="lokasi"
            class="w-full justify-center items-start bg-cover bg-center bg-[url('assets/lokasi.svg')] pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pt-20 lg:pb-20 relative overflow-hidden">
            <div
                class="absolute w-full bg-gradient-to-t bg-black opacity-60 from-black z-10 lg:h-20 lg:-ml-20 lg:-mt-20">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent mt-96 z-10"></div>
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center z-10">Lokasi</h1>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-8 z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-8">
                    <div class="flex flex-col justify-center">
                        <iframe class="w-full h-48 lg:w-[423px] lg:h-[288px] rounded-lg"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4700369129467!2dYOUR_LONGITUDE!3dYOUR_LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3AYOUR_PLACE_NAME!2sYOUR_PLACE_NAME!5e0!3m2!1sen!2sus!4v1649450625935!5m2!1sen!2sus"
                            width="623" height="488" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div>
                        <table class="text-white lg:text-2xl">
                            <tr>
                                <td class="text-sm lg:text-2xl lg:py-4 py-2">Nama Daerah</td>
                                <td class="text-white text-sm lg:text-2xl lg:py-4 py-2">: Kalianda</td>
                            </tr>
                            <tr>
                                <td class="text-sm lg:text-2xl lg:py-4 py-2">Jalan</td>
                                <td class="text-white text-sm lg:text-2xl lg:py-4 py-2">: Jln. Lintas Sumatra</td>
                            </tr>
                            <tr>
                                <td class="text-sm lg:text-2xl lg:py-4 py-2">Kecamatan</td>
                                <td class="text-white text-sm lg:text-2xl lg:py-4 py-2">: Kalianda</td>
                            </tr>
                            <tr>
                                <td class="text-sm lg:text-2xl lg:py-4 py-2">Kabupaten</td>
                                <td class="text-white text-sm lg:text-2xl lg:py-4 py-2">: Lampung-Selatan</td>
                            </tr>
                            <tr>
                                <td class="text-sm lg:text-2xl lg:py-4 py-2">Provinsi</td>
                                <td class="text-white text-sm lg:text-2xl lg:py-4 py-2">: Lampung</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section id="jadwal"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center">Jadwal</h1>
            <div class="py-4 px-2 mx-auto max-w-screen-xl lg:py-8 lg:px-4 flex justify-center items-center">
                <div class="flex flex-col lg:space-y-4 space-y-2 sm:flex-row sm:space-y-0 m-auto">
                    <a href="#"
                        class="lg:w-full inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg bg-[#FBB603]">
                        Tanggal
                    </a>
                </div>
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
                            <th scope="col" class="px-6 py-3 rounded-tr-lg">
                                Jadwal
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
                        </tr>
                        <tr class="bg-white border-b border-[#FBB603]">
                            <th scope="row" class="px-2 py-1 font-medium text-black whitespace-nowrap">
                                2
                            </th>
                            <td class="px-6 py-4">
                                Fulan
                            </td>
                            <td class="px-6 py-4">
                                Tangkas
                            </td>
                            <td class="px-6 py-4">
                                20.00
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section id="galeri"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20 lg:pb-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center">Gambar</h1>
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-10 lg:mt-20">
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg filter grayscale-100"
                            src="https://via.placeholder.com/300" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="informasi"
            class="w-full justify-center items-start bg-cover bg-center bg-black pl-10 pr-10 pt-36 pb-36 lg:pl-20 lg:pr-20 lg:pt-20 lg:pb-20">
            <h1 class="text-white text-[16px] lg:text-[32px] font-bold m-auto text-center">Informasi</h1>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:flex gap-8 lg:gap-8">
                <div class="flex lg:w-[25%] justify-center order-last lg:order-first m-auto">
                    <p class="mb-8 text-lg font-normal text-white lg:text-xl">"Periksa informasi ini untuk mendapatkan
                        pemahaman yang lebih baik."</p>
                    <div class="absolute lg:-mt-36 -mt-8 ml-60">
                        <svg viewBox="0 0 77 422" fill="none" class="h-[150px] w-[35px] lg:h-[350px] lg:w-[77px]"
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
                <div class="flex lg:w-[75%] justify-center lg:order-first lg:mt-0 mt-10">
                    <img src="assets/informasi.svg" />
                </div>
            </div>
        </section>
    </x-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>

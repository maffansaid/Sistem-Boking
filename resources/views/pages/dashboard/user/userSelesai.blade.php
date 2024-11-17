<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Selesai</title>
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
        .typewriter {
            overflow: hidden;
            border-right: 2px solid #666;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <x-sideBarUser />
    <div class="min-h-screen bg-[#A40000] p-4 sm:ml-64">
        <div class="m-5 rounded-lg bg-[#D9D9D9] text-center text-[24px] text-black lg:m-10">
            <div class="mx-auto max-w-full overflow-hidden rounded-lg bg-white shadow-lg">
                <div class="bg-[#99FF33] p-4 text-center text-black">
                    <h2 class="text-2xl font-bold">Struk Transaksi</h2>
                </div>

                <div class="m-auto mb-4 flex items-center justify-center rounded-lg p-4 text-sm text-red-800"
                    role="alert">
                    <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Perhatian ! </span>Jika anda sudah membayar, mohon muat ulang halaman
                        ini
                    </div>
                </div>

                <div class="p-5">
                    <div class="grid grid-cols-3 gap-y-2">
                        <div class="flex justify-end">
                            <span class="font-medium">Total Pembayaran</span>
                        </div>
                        <div class="flex justify-center">
                            <span class="font-medium">:</span>
                        </div>
                        <div class="flex justify-start">
                            <span class="text-blue-600">Rp
                                {{ number_format($pemesanan->pembayaran->harga, 0, '', '.') }}</span>
                        </div>

                        <div class="flex justify-end">
                            <span class="font-medium">Bank Tujuan</span>
                        </div>
                        <div class="flex justify-center">
                            <span class="font-medium">:</span>
                        </div>
                        <div class="flex justify-start">
                            <span class="">Bank
                                {{ session('metode') === 'BRIVA' ? 'BRI' : (session('metode') === 'BNIVA' ? 'BNI' : 'BCA') }}</span>
                        </div>

                        <div class="flex justify-end">
                            <span class="font-medium">Nomor Virtual Account</span>
                        </div>
                        <div class="flex justify-center">
                            <span class="font-medium">:</span>
                        </div>
                        <div class="flex items-center justify-start">
                            <span class="text-blue-600"
                                id="virtual-account">{{ session('pembayaran')['data']['pay_code'] ?? '' }}</span>
                            <button class="ml-2 rounded bg-[#99FF33] px-2 py-1 text-sm text-black hover:bg-[#99FF33]"
                                onclick="copyToClipboard()">
                                Copy
                            </button>
                        </div>

                        <div class="flex justify-end">
                            <span class="font-medium">Nama</span>
                        </div>
                        <div class="flex justify-center">
                            <span class="font-medium">:</span>
                        </div>
                        <div class="flex justify-start">
                            <span class="">{{ $pemesanan->nama }}</span>
                        </div>

                        <div class="flex justify-end">
                            <span class="font-medium">Nama PB</span>
                        </div>
                        <div class="flex justify-center">
                            <span class="font-medium">:</span>
                        </div>
                        <div class="flex justify-start">
                            <span class="">{{ $pemesanan->nama_pb }}</span>
                        </div>

                        <div class="flex justify-end">
                            <span class="font-medium">Status</span>
                        </div>
                        <div class="flex justify-center">
                            <span class="font-medium">:</span>
                        </div>
                        <div class="flex justify-start">
                            @if ($pemesanan->status)
                                <span class="text-green-600">Sukses</span>
                            @else
                                <span class="text-orange-600">Proses</span>
                            @endif
                            {{-- @if ($status === 'proses') --}}
                            {{-- @elseif($status === 'sukses')
                            @else
                            {{-- @elseif($status === 'gagal')
                                <span class=" text-green-600">Gagal</span>
                            @else
                                <span class=" text-gray-600">Status Tidak Diketahui</span>
                            @endif --}}
                        </div>
                    </div>
                </div>

                <div class="pb-5">
                    <div class="bg-transparent">
                        @if ($pemesanan->status)
                            <svg class="mx-auto mb-4 h-32 w-32 bg-transparent" fill="#99FF33"
                                viewBox="-7.6 0 93.973 93.973" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path id="checklist2"
                                        d="M572.822,452.824c-2.939-1.625-3.463-5.666-3.705-9.985.841-16.276.252-33.982.856-50.5.266-5.442.043-11.367.851-16.265,1.176-1.867,3.227-2.86,4.854-4.279a109.4,109.4,0,0,1,22.54,1.142c.8-.429.992-1.478,1.139-2.57.52-.616-.056-2.334.569-2.85a23.764,23.764,0,0,1,.572-6.561,5.687,5.687,0,0,1,3.707-1.428c.463.08.492-.269.858-.285a14.671,14.671,0,0,0,4.277-.045,14.264,14.264,0,0,1,4.854.045c2.186.547,6.295.555,7.988,2.283,1.182,2.821.142,6.524.285,9.987,3.08.461,6.59-.725,9.982-.859.393-.56,1.748-.154,2.281-.57a2.386,2.386,0,0,0,1.359-.13,2.408,2.408,0,0,1,1.213-.155,30.729,30.729,0,0,1,5.418-.284c1.285.423,1.638,1.783,2.281,2.85.693,1.022.949,2.475,1.713,3.424q1.069,18.047.857,37.375c0,6.365-.106,12.852.285,18.828-.117,3.021.276,6.553-.285,9.131.006,3.146-.131,6.144-1.144,8.271-1.02.881-2.834.967-4.847.86a18.968,18.968,0,0,1-5.135.568c-3.088.629-7.386.219-10.556,0-9.037.283-17.553,1.088-26.248,1.711-6.028.194-12.712.45-19.036.45C577.92,452.987,575.3,452.941,572.822,452.824Zm17.689-5.992c3.194-.025,6.414-.014,9.591,0,2.945.011,5.853.021,8.668,0a1.437,1.437,0,0,0,.923-.158,1.458,1.458,0,0,1,1.076-.128c10.912-.026,20.875-.994,31.1-1.711-.6-20.785-.334-42.856.285-63.337a8.98,8.98,0,0,0-.285-5.705c-2.308-1.552-5.967-.067-8.56.572.043,4.047,3.07,8.377.857,11.982a266.843,266.843,0,0,1-44.79.857c-2.948-3.138-1.35-10.826-5.135-13.126a19.431,19.431,0,0,1-4.849.287c-.184,1.814-.832,3.164-.858,5.134a7.173,7.173,0,0,0-.285,2.856c-.832.214.258,2.349-.57,2.564.222,2.316-.412,3.775-.285,5.994a10.031,10.031,0,0,0-.284,2.854c.4,1.089-.747,2.076,0,2.566.615-1.666,1.2-3.361,3.709-3.137.083.581.769.559.856,1.14-2.478,3.894-3.673,9.072-5.423,13.693.183,1.055-.368,2.842.287,3.425.68-1.89,1.231-3.906,4.28-3.425.445.41.992.716,1.139,1.426.146,1.67-1,2.049-1.139,3.424-.554.968-.59,2.454-1.144,3.424-.4,2.638-1.45,4.635-1.708,7.416.139.143.468-.049.858-.239.578-.284,1.288-.567,1.708.239-.6,3.011-1.785,5.443-2.283,8.56-.658,1.149-.767,2.849-1.427,3.992.282,1.717-1.666,2.7-.571,4.284a26.919,26.919,0,0,1,2.569-4.284,23.787,23.787,0,0,1,1.427-1.994c.678-.556.777-1.695,2.283-1.427.608.815-.414,1.912-.856,2.569-.073,1.354-.876,1.976-1.142,3.137-.816,2.037-1.595,4.111-2.283,6.275h3.425c1.546-1.117,1.694-3.627,3.993-3.992.655.689-.292,1.385-.285,2.282-.473,0-.16.791-.572.856.184.623-.806.908.287.855C586.779,446.938,588.674,446.85,590.512,446.832Zm13.979-81.309c-.067,1.876.5,3.111.286,5.134-.555,2.488-.969,5.117-3.137,5.992-2.25.317-4.424.711-6.846.858-.074,2.683.285,5.8-.571,7.7a2.413,2.413,0,0,0,1.42.032,5.878,5.878,0,0,1,1.717-.032,17.611,17.611,0,0,0,3.712-.285c1.424-.042,2.912-.021,4.4,0a48.789,48.789,0,0,0,7.864-.286c.765-.026,1.57-.013,2.375,0a19.249,19.249,0,0,0,4.757-.286,30.093,30.093,0,0,0,9.13,0,72.754,72.754,0,0,1,0-8.276,11.32,11.32,0,0,0-4.015-.287,23.591,23.591,0,0,1-2.548,0c-1.646-.539-4.492.121-5.135-1.427-.113-3.2.815-6.416.284-9.13a31.229,31.229,0,0,0-7.414-.853C608.9,364.986,605.779,364.34,604.49,365.523Zm-5.418,69.9c-.486-.559-.669-1.428-1.429-1.711.2-.766-.589-.551-.854-.855-.245-.231-.172-.782-.572-.858-.68-1.408-1.813-2.37-2.567-3.707-1.785-2.4-3.7-4.672-4.851-7.7a17.5,17.5,0,0,1,4.568-2.854c1.016-1.359,2.958-1.795,4.85-2.283,2.394.645,3.16,2.926,4.277,4.85a6.727,6.727,0,0,1,1.711,2.853,26.022,26.022,0,0,0,2.283,2,5.176,5.176,0,0,0,2.282-2c1.352-.076,1.607-1.248,2.567-1.711a36.859,36.859,0,0,1,4-4.849c1.43-1.424,2.567-3.139,3.992-4.565a63.254,63.254,0,0,1,9.989-7.421,1.841,1.841,0,0,0,1.423-.283c.332,1.822.051,2.592,0,4.565-.945,1.431-1.314,3.441-2.566,4.566-.627,1.749-2.022,2.731-2.854,4.278-2.306,2.352-4.3,5.019-6.56,7.418-.2.881-1.278,1.065-1.715,2-.459.678-1.022,1.256-1.426,2-1.263,1.114-2.078,2.675-3.422,3.711a50.428,50.428,0,0,1-6.562,7.417C602.688,439.412,601.371,436.926,599.072,435.42Zm4.278-54.205c-.514-.512-1.362-1.633-.856-2.282,1.346-.014,2.16.5,3.425.57,5.172-.057,9.35-1.107,14.83-.856.482.567,1.639.458,2,1.143.779-.209.574.565,1.143.568-.06.489.489.739,0,.858,0,1.789-2.174,1.662-3.425,1.428a38.436,38.436,0,0,1-4.565-.856c-4.09-.289-6.638.968-10.269,1.139A3.3,3.3,0,0,1,603.35,381.215Zm3.71-8.561c-.066-1.205.438-1.841.569-2.851,1.048-1.435,4.4-1.931,6.277-.856.418.914,1.078,1.584.856,3.139a5.384,5.384,0,0,1-3.424,3.707C609.5,375.16,607.867,374.322,607.06,372.654Z"
                                        transform="translate(-569.117 -359.013)"></path>
                                </g>
                            </svg>
                        @else
                            <svg class="mx-auto mb-4 h-32 w-32 bg-transparent" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M18.364 8.05026L17.6569 7.34315C14.5327 4.21896 9.46734 4.21896 6.34315 7.34315C3.21895 10.4673 3.21895 15.5327 6.34315 18.6569C9.46734 21.7811 14.5327 21.7811 17.6569 18.6569C19.4737 16.84 20.234 14.3668 19.9377 12.0005M18.364 8.05026H14.1213M18.364 8.05026V3.80762"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                </g>
                            </svg>
                        @endif
                        {{-- @if ($status === 'proses')
                        {{-- @elseif($status === 'sukses') --}}

                        {{-- @elseif($status === 'gagal')
                            <svg class="mx-auto mb-4 w-32 h-32 bg-transparent" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.364 8.05026L17.6569 7.34315C14.5327 4.21896 9.46734 4.21896 6.34315 7.34315C3.21895 10.4673 3.21895 15.5327 6.34315 18.6569C9.46734 21.7811 14.5327 21.7811 17.6569 18.6569C19.4737 16.84 20.234 14.3668 19.9377 12.0005M18.364 8.05026H14.1213M18.364 8.05026V3.80762" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <svg class="mx-auto mb-4 w-32 h-32 bg-transparent" fill="#000000" viewBox="0 0 200 200" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title></title><path d="M114,100l49-49a9.9,9.9,0,0,0-14-14L100,86,51,37A9.9,9.9,0,0,0,37,51l49,49L37,149a9.9,9.9,0,0,0,14,14l49-49,49,49a9.9,9.9,0,0,0,14-14Z"></path></g></svg>
                        @else
                        -
                        @endif --}}
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="{{ route('transaksi.download-pdf', $pemesanan->id) }}" target="__blank"
                        class="mb-5 flex items-center gap-2 rounded-lg bg-[#FBB603] px-5 py-2.5 text-sm font-medium text-black hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                        Unduh Transaksi
                    </a>

                </div>

                <div class="m-auto flex h-[50px] w-fit p-4 text-center">
                    <p class="typewriter text-sm text-gray-600" id="animated-text">Terima kasih telah bertransaksi
                        dengan kami!</p>
                </div>

            </div>
        </div>
    </div>

    <script>
        function copyToClipboard() {
            const virtualAccount = document.getElementById("virtual-account").textContent;
            navigator.clipboard.writeText(virtualAccount)
                .then(() => {
                    alert("Nomor Virtual Account disalin: " + virtualAccount);
                })
                .catch(err => {
                    console.error("Gagal menyalin: ", err);
                });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const text = "Terima kasih telah bertransaksi dengan kami!";
            const textElement = document.getElementById('animated-text');
            let currentIndex = 0;
            let isDeleting = false;

            function animate() {
                if (!isDeleting) {
                    textElement.textContent = text.substring(0, currentIndex + 1);
                    currentIndex++;

                    if (currentIndex === text.length) {
                        setTimeout(() => {
                            isDeleting = true;
                        }, 500);
                    }
                } else {
                    textElement.textContent = text.substring(0, currentIndex - 1);
                    currentIndex--;

                    if (currentIndex === 0) {
                        isDeleting = false;
                        setTimeout(() => {
                            animate();
                        }, 500);
                        return;
                    }
                }

                const timeout = isDeleting ? 50 : 100;
                setTimeout(animate, timeout);
            }

            animate();
        });
    </script>

</body>

</html>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Informasi Admin</title>
    <link rel="icon" type="image/x-icon" href="/assets/logo_polres.png">
    {{-- Awal Tailwind --}}
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>
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
            <div class="m-auto mb-10 flex items-center justify-center text-center text-[30px] text-white">
                Daftar
                Informasi</div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-center text-sm text-black rtl:text-right">
                    <thead class="bg-[#FBB603] text-xs font-bold uppercase text-black">
                        <tr>
                            <th scope="col" class="rounded-tl-lg px-2 py-1">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Poster
                            </th>
                            <th scope="col" class="rounded-tr-lg px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $dummyData = [
                        //     [
                        //         'id' => 1,
                        //         'judul' => 'Ahmad',
                        //         'poster' => '/assets/logo_polres.png',
                        //     ],
                        //     [
                        //         'id' => 2,
                        //         'judul' => 'Apan',
                        //         'poster' => '/assets/boking1.png',
                        //     ],
                        // ];
                        ?>
                        @foreach ($data as $data)
                            <tr class="border-b border-[#FBB603] bg-white">
                                <th scope="row" class="whitespace-nowrap px-2 py-1 font-medium text-black">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data['judul'] }}
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ $data['gambar'] }}" alt="" class="m-auto flex h-10 w-10 md:h-20 md:w-32">
                                </td>
                                <td class="px-6 py-4">
                                    <div class="m-auto flex justify-center justify-items-center gap-2 text-center">
                                        <button onclick="showImage('{{ $data['gambar'] }}')" title="lihat" class="rounded-md bg-[#FA8F21] p-1 hover:bg-[#D87815]">
                                            <x-svg-lihat />
                                        </button>
                                        <button onclick="showDeleteModal({{ $data['id'] }})" title="Delete" class="delete-button cursor-pointer rounded-md bg-[#FF0000] p-1 hover:bg-[#D51717]" type="button">
                                            <x-svg-delete />
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    <!-- Image Modal -->
                    <div id="imageModal" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
                        <div class="relative">
                            <img id="fullImage" src="" alt="Poster" class="max-h-screen max-w-full">
                            <button onclick="closeImage()" class="absolute right-2 top-2 rounded-full bg-white p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Popup Modal (Ditempatkan di luar foreach loop) -->
                    <div id="popup-modal" tabindex="-1" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
                        <div class="relative w-[90%] rounded-lg bg-white p-4 shadow md:w-[30%]">
                            <button type="button" onclick="closeDeleteModal()" class="absolute right-3 top-3 rounded-lg bg-transparent p-2 text-gray-400 hover:bg-gray-200">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="text-center">
                                <svg class="mx-auto mb-4 h-12 w-12 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <p class="mb-5 text-lg text-gray-500">Yakin ingin hapus data?</p>
                                <form id="form-delete" action="" method="POST" class="hidden">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" id="id-delete">
                                </form>
                                <button onclick="confirmDelete()" class="rounded-md bg-red-600 px-5 py-2 text-white hover:bg-red-800">Ya</button>
                                <button onclick="closeDeleteModal()" class="ms-3 rounded-md bg-gray-200 px-5 py-2 text-gray-700">Tidak</button>
                            </div>
                        </div>
                    </div>

                    <script>
                        let selectedId = null;

                        function showImage(src) {
                            document.getElementById('fullImage').src = src;
                            document.getElementById('imageModal').classList.remove('hidden');
                        }

                        function closeImage() {
                            document.getElementById('imageModal').classList.add('hidden');
                        }

                        function showDeleteModal(id) {
                            selectedId = id;
                            document.getElementById('id-delete').value = id;
                            document.getElementById('popup-modal').classList.remove('hidden');
                        }

                        function closeDeleteModal() {
                            document.getElementById('popup-modal').classList.add('hidden');
                        }

                        function confirmDelete() {
                            if (selectedId !== null) {
                                document.getElementById('form-delete').submit();
                                console.log('ID ' + selectedId + ' berhasil dihapus.');
                                closeDeleteModal();
                                selectedId = null;
                            }
                        }
                    </script>

                </table>
            </div>
            <!-- Modal toggle -->
            <div class="flex justify-end">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="mt-10 block rounded-lg bg-[#FBB603] px-5 py-2.5 text-sm font-medium text-black hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300" type="button">
                    Tambah +
                </button>
            </div>
            <!-- Main modal -->
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                <div class="relative max-h-full w-full max-w-md p-4">
                    <!-- Modal content -->
                    <div class="relative rounded-lg bg-white shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between rounded-t border-b bg-[#A40000] p-4 md:p-5">
                            <h3 class="text-lg font-semibold text-white">
                                Tambah Data
                            </h3>
                            <button type="button" class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-gray-200 hover:text-gray-900" data-modal-toggle="crud-modal">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form method="POST" enctype="multipart/form-data" class="p-4 md:p-5">
                            @csrf
                            <div class="mb-4 grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <label for="name" class="mb-2 block text-sm font-medium text-gray-900">Judul</label>
                                    <input type="text" name="judul" id="judul" class="focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900" placeholder="Judul" required="">
                                    @error('judul')
                                        <p class="text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <label class="mb-2 block text-sm font-medium text-gray-900" for="file_input">Upload
                                    Poster</label>
                                <input class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none" aria-describedby="file_input_help" id="file_input" name="gambar" type="file" accept=".png, .jpg, .jpeg" required>
                                <p class="mt-1 text-sm text-gray-500" id="file_input_help">png, jpg, jpeg</p>
                                @error('gambar')
                                    <p class="text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="inline-flex items-center rounded-lg bg-[#FBB603] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#99FF33] focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    Upload
                                </button>
                                <div id="popUp-modal-simpan" tabindex="-1" class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                    <div class="relative max-h-full w-full max-w-md p-4">
                                        <div class="relative rounded-lg bg-white shadow">
                                            <button type="button" class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900" data-modal-hide="popUp-modal-simpan">
                                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 text-center md:p-5">
                                                <div class="bg-transparent">
                                                    <svg class="mx-auto mb-4 h-12 w-12 bg-transparent" fill="#99FF33" viewBox="-7.6 0 93.973 93.973" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path id="checklist2" d="M572.822,452.824c-2.939-1.625-3.463-5.666-3.705-9.985.841-16.276.252-33.982.856-50.5.266-5.442.043-11.367.851-16.265,1.176-1.867,3.227-2.86,4.854-4.279a109.4,109.4,0,0,1,22.54,1.142c.8-.429.992-1.478,1.139-2.57.52-.616-.056-2.334.569-2.85a23.764,23.764,0,0,1,.572-6.561,5.687,5.687,0,0,1,3.707-1.428c.463.08.492-.269.858-.285a14.671,14.671,0,0,0,4.277-.045,14.264,14.264,0,0,1,4.854.045c2.186.547,6.295.555,7.988,2.283,1.182,2.821.142,6.524.285,9.987,3.08.461,6.59-.725,9.982-.859.393-.56,1.748-.154,2.281-.57a2.386,2.386,0,0,0,1.359-.13,2.408,2.408,0,0,1,1.213-.155,30.729,30.729,0,0,1,5.418-.284c1.285.423,1.638,1.783,2.281,2.85.693,1.022.949,2.475,1.713,3.424q1.069,18.047.857,37.375c0,6.365-.106,12.852.285,18.828-.117,3.021.276,6.553-.285,9.131.006,3.146-.131,6.144-1.144,8.271-1.02.881-2.834.967-4.847.86a18.968,18.968,0,0,1-5.135.568c-3.088.629-7.386.219-10.556,0-9.037.283-17.553,1.088-26.248,1.711-6.028.194-12.712.45-19.036.45C577.92,452.987,575.3,452.941,572.822,452.824Zm17.689-5.992c3.194-.025,6.414-.014,9.591,0,2.945.011,5.853.021,8.668,0a1.437,1.437,0,0,0,.923-.158,1.458,1.458,0,0,1,1.076-.128c10.912-.026,20.875-.994,31.1-1.711-.6-20.785-.334-42.856.285-63.337a8.98,8.98,0,0,0-.285-5.705c-2.308-1.552-5.967-.067-8.56.572.043,4.047,3.07,8.377.857,11.982a266.843,266.843,0,0,1-44.79.857c-2.948-3.138-1.35-10.826-5.135-13.126a19.431,19.431,0,0,1-4.849.287c-.184,1.814-.832,3.164-.858,5.134a7.173,7.173,0,0,0-.285,2.856c-.832.214.258,2.349-.57,2.564.222,2.316-.412,3.775-.285,5.994a10.031,10.031,0,0,0-.284,2.854c.4,1.089-.747,2.076,0,2.566.615-1.666,1.2-3.361,3.709-3.137.083.581.769.559.856,1.14-2.478,3.894-3.673,9.072-5.423,13.693.183,1.055-.368,2.842.287,3.425.68-1.89,1.231-3.906,4.28-3.425.445.41.992.716,1.139,1.426.146,1.67-1,2.049-1.139,3.424-.554.968-.59,2.454-1.144,3.424-.4,2.638-1.45,4.635-1.708,7.416.139.143.468-.049.858-.239.578-.284,1.288-.567,1.708.239-.6,3.011-1.785,5.443-2.283,8.56-.658,1.149-.767,2.849-1.427,3.992.282,1.717-1.666,2.7-.571,4.284a26.919,26.919,0,0,1,2.569-4.284,23.787,23.787,0,0,1,1.427-1.994c.678-.556.777-1.695,2.283-1.427.608.815-.414,1.912-.856,2.569-.073,1.354-.876,1.976-1.142,3.137-.816,2.037-1.595,4.111-2.283,6.275h3.425c1.546-1.117,1.694-3.627,3.993-3.992.655.689-.292,1.385-.285,2.282-.473,0-.16.791-.572.856.184.623-.806.908.287.855C586.779,446.938,588.674,446.85,590.512,446.832Zm13.979-81.309c-.067,1.876.5,3.111.286,5.134-.555,2.488-.969,5.117-3.137,5.992-2.25.317-4.424.711-6.846.858-.074,2.683.285,5.8-.571,7.7a2.413,2.413,0,0,0,1.42.032,5.878,5.878,0,0,1,1.717-.032,17.611,17.611,0,0,0,3.712-.285c1.424-.042,2.912-.021,4.4,0a48.789,48.789,0,0,0,7.864-.286c.765-.026,1.57-.013,2.375,0a19.249,19.249,0,0,0,4.757-.286,30.093,30.093,0,0,0,9.13,0,72.754,72.754,0,0,1,0-8.276,11.32,11.32,0,0,0-4.015-.287,23.591,23.591,0,0,1-2.548,0c-1.646-.539-4.492.121-5.135-1.427-.113-3.2.815-6.416.284-9.13a31.229,31.229,0,0,0-7.414-.853C608.9,364.986,605.779,364.34,604.49,365.523Zm-5.418,69.9c-.486-.559-.669-1.428-1.429-1.711.2-.766-.589-.551-.854-.855-.245-.231-.172-.782-.572-.858-.68-1.408-1.813-2.37-2.567-3.707-1.785-2.4-3.7-4.672-4.851-7.7a17.5,17.5,0,0,1,4.568-2.854c1.016-1.359,2.958-1.795,4.85-2.283,2.394.645,3.16,2.926,4.277,4.85a6.727,6.727,0,0,1,1.711,2.853,26.022,26.022,0,0,0,2.283,2,5.176,5.176,0,0,0,2.282-2c1.352-.076,1.607-1.248,2.567-1.711a36.859,36.859,0,0,1,4-4.849c1.43-1.424,2.567-3.139,3.992-4.565a63.254,63.254,0,0,1,9.989-7.421,1.841,1.841,0,0,0,1.423-.283c.332,1.822.051,2.592,0,4.565-.945,1.431-1.314,3.441-2.566,4.566-.627,1.749-2.022,2.731-2.854,4.278-2.306,2.352-4.3,5.019-6.56,7.418-.2.881-1.278,1.065-1.715,2-.459.678-1.022,1.256-1.426,2-1.263,1.114-2.078,2.675-3.422,3.711a50.428,50.428,0,0,1-6.562,7.417C602.688,439.412,601.371,436.926,599.072,435.42Zm4.278-54.205c-.514-.512-1.362-1.633-.856-2.282,1.346-.014,2.16.5,3.425.57,5.172-.057,9.35-1.107,14.83-.856.482.567,1.639.458,2,1.143.779-.209.574.565,1.143.568-.06.489.489.739,0,.858,0,1.789-2.174,1.662-3.425,1.428a38.436,38.436,0,0,1-4.565-.856c-4.09-.289-6.638.968-10.269,1.139A3.3,3.3,0,0,1,603.35,381.215Zm3.71-8.561c-.066-1.205.438-1.841.569-2.851,1.048-1.435,4.4-1.931,6.277-.856.418.914,1.078,1.584.856,3.139a5.384,5.384,0,0,1-3.424,3.707C609.5,375.16,607.867,374.322,607.06,372.654Z" transform="translate(-569.117 -359.013)"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500">
                                                    Berhasil Upload Data</h3>
                                                <button data-modal-hide="popUp-modal-simpan" type="submit" class="inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300">
                                                    Mengerti
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
